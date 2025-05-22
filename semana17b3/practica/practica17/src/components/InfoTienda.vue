<template>
     <h1>Tienda UGB</h1>
     <section>
        <button @click="mostrar = !mostrar">
            {{ mostrar ? 'Ocultar':'Mostrar' }} información adicional
        </button>
     </section>
    <div v-if="mostrar">
        <p>Direccion: Direccion x</p>
        <p>Telefono: 123456</p>
        <p>Horario: 7:00 a.m. - 5:00 p.m.</p>
    </div>

</template>

<script>
    export default{
        data(){
            return{
                mostrar:false
            }
        }
    }

</script>