<template>
  <main>
      <section id="contactanos" class="pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <h2><b>contactanos</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p>Dejanos tus datos y cuentanos en que te podemos ayudar.</p>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            <form @submit.prevent="agregar">
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
          </div>
        </div>
        <div class="row">
            <p class="copyright text-center fs-8 mt-5">
                Construido by Santiago Chia para la prueba de desarrollo web - wolke
                Copyright &copy; por Santiago Chia. El 100% de esta pagina es de uso personal y no comercial, no se puede reclamar el diseño como propiedad de tercero. creditos a autor, 
                Santiago Chia. Derechos reservados.
            </p>        
        </div>
      </div>
    </section>
  </main>
</template>

<script>
import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'
export default {
    name: "PmContact",
    data(){
        return {
            contact: {
                name: "",
                phone: "",
                email: "",
                comment: "",
            },
        }
    },

    methods: {
        agregar(){
        if(this.contact.name.trim() === '' || this.contact.phone.trim() === '' || this.contact.email.trim() === ''){
            // alert('Debes completar todos los campos antes de enviar');
            Swal.fire({
              title: 'Error!',
              text: 'Debes completar todos los campos antes de enviar',
              icon: 'error',
              confirmButtonText: 'Try it',
              confirmButtonColor: '#e63939',
            })
        return;
        }
        const contactNuevo = this.contact; 
        axios.post('http://127.0.0.1:8000/api/contact', contactNuevo)
        .then((res) =>{
          const result = res.data;
          if(result != null){
              // alert('okey, se envio correctamente')
              Swal.fire({
                title: 'Correcto',
                text: 'okey, se envio correctamente',
                icon: 'successes',
                confirmButtonText: 'Next',
                confirmButtonColor: '#E66239',
              })
                this.contact = {
                    name: "",
                    phone: "",
                    email: "",
                    comment: "",
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

      },
    }
}
</script>

<style lang="scss" scoped>
    main{
        background-color: #000;
    }
    h2{
        color: #ffff;
    }
    p:first-child{
        color: #ffff;
    }
</style>