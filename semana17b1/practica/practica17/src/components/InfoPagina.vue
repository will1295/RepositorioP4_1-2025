<template>
    <h1>Tienda UGB</h1>
    
    <button @click="mostrar=!mostrar">
        {{  mostrar ? "Ocultar" : "Mostrar" }} informacion de la tienda.
    </button>
    <div v-if="mostrar">
        <p>Horario de atencion: Lunes a Viernes de 7:00 a.m. - 5:00 p.m.</p>
        <p>Telefono de contacto: 1231-3378</p>
        <p>Direccion: Calle x San Miguel</p>
    </div>
    

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