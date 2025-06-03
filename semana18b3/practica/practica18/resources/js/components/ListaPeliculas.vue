<template>
    <h1>Lista de peliculas</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Valoracion</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="pelicula in peliculas">
                <td>{{ pelicula.nombre }}</td>
                <td>{{ pelicula.genero }}</td>
                <td>{{ pelicula.valoracion }}</td>
                <td>{{ pelicula.comentario }}</td>
            </tr>
        </tbody>
    </table>




</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                peliculas:[]
            }
        },
        mounted(){
            this.cargarDatos()
        },
        methods:{
            cargarDatos(){
                axios.get('/api/peliculas')
                .then(consulta=>this.peliculas = consulta.data)
                .catch(e=>console.error(e))
            }
        }
    }

</script>