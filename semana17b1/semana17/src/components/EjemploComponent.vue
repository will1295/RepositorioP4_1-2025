<template>
    <img v-bind:src="link" alt="">
    <!--  Puedes usar cualquiera de los dos   -->
    <img :src="link" alt="">
    <p :style="{color:valor}">Hola esto es un parrafo</p>
</template>
<script>

    export default{
        data(){
            return{
                link:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbfxZUlBhLx17wdlvEZGnV8lPd9kiBaVcrxg&s",
                valor:"red"
            }
        }
    }

</script>