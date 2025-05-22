<template>
    <h3>Uso de v-bind</h3>

    <img v-bind:src="link" alt="">
    <button v-bind:disabled="estado">Hola soy un boton!</button>
    <p :style="{color:colorTexto,fontSize:tamanio+'px'}">
        Esto es un parrafo que obtiene su estilo de manera dinamica
    </p>
</template>

<script>
    export default{
        data(){
            return{
                link:"https://facturacion.ugb.edu.sv/img/job-profile2.a5201693.png",
                estado:true,
                colorTexto:"green",
                tamanio:25
            }
        }
    }
 

</script>