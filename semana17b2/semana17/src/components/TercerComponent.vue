<template>
    <h3>Uso de v-for, v-if,v-else y v-if-else</h3>

    <h4>Lista de estudiantes</h4>

    <ul v-for="estudiante in estudiantes">
        <li>{{ estudiante.nombre }} {{ estudiante.apellido }}</li>
    </ul>

    <div v-if="disponible">
        Este dato esta sujeto a disponibilidad por una condicion
    </div>

    <h4>Lista de profesores</h4>
    <div v-if="profesores.length<1">
        <p>No hay profesores disponibles</p>
    </div>
    <div v-else-if="profesores.length==1">
        <p>Hay un solo profesor inscrito en el sistema</p>
    </div>
    <div v-else>
        <p v-text="info"></p>
        <ul v-for="profesor in profesores">
        <li>{{ profesor.nombre }} {{ profesor.apellido }}</li>
    </ul>
    </div>

    <button @click="alerta">Haz click aqui!</button>
    

</template>

<script>

    export default{
        data(){
            return{
                estudiantes:[
                    {nombre:"Maria",apellido:"Fuentes"},
                    {nombre:"Juan",apellido:"Perez"},
                    {nombre:"Pedro",apellido:"Sanchez"}
                ],
                disponible:true,
                profesores:[
                    {nombre:"Anita",apellido:"castillo"},
                    {nombre:"Luis",apellido:"Martinez"}
                ]
            }
        },
        computed:{
            info(){
                return "Cantidad de profesores inscritos: "+this.profesores.length
            }
        },
        methods:{
            alerta(){
                alert("Haz hecho click!")
            }
        }
    }

</script>