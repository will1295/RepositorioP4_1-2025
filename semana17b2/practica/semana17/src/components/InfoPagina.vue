<template>
    <h1>Tienda UGB</h1>
    <button @click="visible=!visible">
        {{ visible ? 'Ocultar' : 'Mostrar' }} informacion de la tienda
    </button>
    <div v-if="visible">
    <p>
        Horario de atencion: Lun-Vier 8:00 a.m. - 5:00 p.m.
        Direccion: San Miguel
        Telefono: 1234-5678
    </p>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                visible:true
            }
        }
    }

</script>