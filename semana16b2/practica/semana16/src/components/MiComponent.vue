<template>
    <h1>Este es mi primer component</h1>
    <h2>Mi nombre es: {{ nombre }}</h2>
    <h2>Tengo {{ edad }} años de edad y soy de la carrera de {{ carrera }}</h2>
</template>

<script>
    export default{
        data(){
            return{
                nombre:'Pepito'
            }
        },
        props:['carrera','edad']
    }

</script>