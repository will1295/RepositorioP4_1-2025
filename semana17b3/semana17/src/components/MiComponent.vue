<template>
    <h1>{{ titulo }}</h1>
    <p v-text="informacion"></p>
    <div>
        <!--V-bind es la directa de vue que permite conectar un valor de atributo-->
        <button 
        v-bind:class="{'activo':'estado'}"
        :style="{fontSize:valor+'px'}"
        @click = "estado = !estado"
        >Haz click aqui</button>
    </div>
    <img :src="url" alt="">

</template>

<script>
    export default{
        data(){
            return{
                titulo:"Clase Semana 17",
                informacion:"Hola mundo!",
                estado:false,
                valor:100,
                url:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbfxZUlBhLx17wdlvEZGnV8lPd9kiBaVcrxg&s"
            }
        }
    }
</script>