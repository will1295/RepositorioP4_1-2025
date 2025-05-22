<template>
    <h1>Lista de estudiantes</h1>
    <ol>
        <p v-if="estudiantes.length>1">Total de estudiantes {{ estudiantes.length }}</p>
        <p v-else-if="estudiantes.length==1">Solo hay un estudiante</p>
        <p v-else>No hay estudiantes registrados</p>
        <li v-for="estudiante in estudiantes" :key="estudiantes.id">
            {{ estudiante.nombre }}
        </li>
    </ol>

    <div>
        <button @click="mostrar = !mostrar">Mira lo que pasa si haces click!</button>
        <p v-if="mostrar">Este mensaje cambia su visibilidad con ayuda del boton</p>
    </div>

    <h2 v-text="info"></h2>

</template>

<script>
    export default{
        data(){
            return{
                estudiantes:[
                    {id:1,nombre:'Juanita'},
                    {id:2,nombre:'Pepito'},
                    {id:3,nombre:'Pablo'},
                    {id:4,nombre:'Ana'},
                    {id:5,nombre:'Luis'}
                ],
                mostrar:true,
                info:"Esto se llena mediante un v-text"
            }
        }
    }
</script>