<template>
    <h2>Listado de estudiantes</h2>
    <ul>
        <li v-for="elemento in listado" :key='elemento.id'>
            {{ elemento.nombre }}
        </li>
    </ul>
</template>

<script>
    export default{
        data(){
            return{
                listado:[
                    {id:1,nombre:"Juan"},
                    {id:2,nombre:"Maria"},
                    {id:3,nombre:"Pedro"}]
            }
        }
    }
</script>