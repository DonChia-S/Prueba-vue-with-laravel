<template>
<form @submit.prevent="edit">
    <h1 v-if="id != 0">Editar Contacto</h1>
    <h1 v-else>agregar Contacto</h1>
    <div class="form-row mt-1">
    <div class="form-group col">
        <input type="text" class="form-control" placeholder="Nombre" required v-model="contact.name">
    </div>
    <div class="form-group col mt-2">
        <input type="tel" class="form-control" placeholder="Celular o Telefono" required v-model="contact.phone">
    </div>
    </div>
    <div class="form-row mt-2">
    <div class="form-group col">
        <input type="email" class="form-control" placeholder="Email" required v-model="contact.email">
    </div>
    </div>
    <div class="form-row mt-2">
    <div class="form-group col">
        <textarea name="text" class="form-control form-control-lg" placeholder="Deja tu comentario o sugerencia" v-model="contact.comment"></textarea>
        <small class="form-text text-muted">
        Deja tu comentario o sugerencia
        </small>
    </div>
    </div>
    <div class="form-row mt-2">
    <div class="col">
        <button type="submit" class="btn btn-secondary btn-block">Enviar</button>
    </div>
    </div>
</form>
</template>

<script>
import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'
export default {
    data(){
        return {
            contact: {
                name: "",
                phone: "",
                email: "",
                comment: "",
            },
            url: 'http://127.0.0.1:8000/',
        }
    },
    props:{
        id: String,
    },
    mounted(){
        if(this.id != 0){
            axios.get(`${this.url}api/contact/${this.id}`).then((res)=>{
                const result = res.data;
                if(result != null){
                    this.contact = result
                }
            })
        }
    },

    methods: {
        edit(){
            let urlEdit = ''
            let methodEdit = ''
            if(this.id != 0){
                urlEdit = `${this.url}api/contact/${this.id}`;
                methodEdit = 'put'
            }else{
                urlEdit = `${this.url}api/contact/`;
                methodEdit = 'post'
            }

            const contactNuevo = this.contact; 
            axios({
                method: methodEdit,
                url: urlEdit,
                data: contactNuevo 
            })
            .then((res) =>{
            const result = res.data;
            if(result != null){
                // alert('okey, se envio correctamente')
                Swal.fire({
                    title: this.id != 0 ? 'editar' : 'agregar',
                    text: 'Se realizo el proceso correctamente',
                    icon: 'successes',
                    confirmButtonText: 'Next',
                    confirmButtonColor: '#E66239',
                    
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `${this.url}contacts`;
                    }
                })
                if(this.id == 0){
                        this.contact = {
                        name: "",
                        phone: "",
                        email: "",
                        comment: "",
                    }
                }
            }else{
                alert('¡¡Error!!')
                Swal.fire({
                    title: 'Error!',
                    text: 'algo salio mal',
                    icon: 'error',
                    confirmButtonText: 'Try it',
                    confirmButtonColor: '#e63939',
                })
            }
            })
        }


    },
}
</script>

<style>

</style>