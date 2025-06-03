<template>

<button @click="mostrarModal = !mostrarModal">Agregar nuevo</button>

<h1>Lista de peliculas</h1>

<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Valoracion</th>
            <th>Genero</th>
            <th>Comentarios</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="pelicula in peliculas">
            <td>{{ pelicula.titulo }}</td>
            <td>{{ pelicula.valoracion }}</td>
            <td>{{ pelicula.genero }}</td>
            <td>{{ pelicula.comentario }}</td>
        </tr>
    </tbody>
</table>

<AgregarModal :visible = "mostrarModal" @cerrar="mostrarModal = false"
    @agregado="agregar"></AgregarModal>

</template>

<script>

import axios from 'axios'
import AgregarModal from './AgregarModal.vue'

export default{
    components:{AgregarModal},
    data(){
        return{
            peliculas:[],
            mostrarModal:false
        }
    },
    mounted(){
        this.cargarDatos()
    },
    methods:{
        cargarDatos(){
            axios.get('/api/peliculas')
            .then(consulta =>this.peliculas = consulta.data)
            .catch(e=>console.error(e))
        }
    }
}


</script>