<template>
<main>
  <button type="button" @click="agregar" class="btn btn-dark mb-2">Agregar</button>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">comment</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr  v-for="(c, index) in contacts" :key="c.id">
      <th scope="row">{{c.id}}</th>
      <td>{{c.name}}</td>
      <td>{{c.phone}}</td>
      <td>{{c.email}}</td>
      <td><button type="button" @click="watchComment(c)" class="btn btn-info">Ver</button></td>
      <td>
        <button type="button" @click="editar(c.id)" class="btn btn-dark">Editar</button>
        <button type="button" @click="eliminar(c.id, index)" class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
</main>
</template>
<script>
import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'
export default {
  data(){
    return {
      contacts: [],
      url: 'http://127.0.0.1:8000/',
    }
  },
  created(){
    axios.get(`${this.url}api/contacts`).then(res=>{
      this.contacts = res.data;
    })
  },

  methods: {
    editar(id){
      window.location.href = `${this.url}contact/edit/${id}`;
    },

    eliminar(id, index){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`${this.url}api/contact/${id}`)
            .then(()=>{
              this.contacts.splice(index, 1);
            })
        }
      })
    },

    agregar(){
      window.location.href = `${this.url}contact/edit/0`;
    },

    watchComment(contact){
          Swal.fire({
              title: `usuario ${contact.name}`,
              text: `${contact.comment}`,
              icon: 'info',
              confirmButtonText: 'Back',
              confirmButtonColor: '#e63939',
          })
    }
  }
}
</script>

