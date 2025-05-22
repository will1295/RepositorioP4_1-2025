<template>
    <p v-if="mostrar">Texto aqui de prueba</p>
    <p v-else>Esto esta normalmente oculto</p>
    <button @click="mostrar=!mostrar">Click aqui!</button>
</template>

<script>
    export default{
        data(){
            return{
                mostrar:true
            }
        }
    }


</script>