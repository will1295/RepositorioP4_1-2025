<template>
    <input v-model="mensaje" type="text" placeholder="Escribe tu nombre aqui">
    <label>{{ saludo }}</label>
</template>

<script>
    export default {
        data() {
            return {
                mensaje: ''
            }
        },
        computed: {
            saludo() {
                return this.mensaje ? `Hola ${this.mensaje}` : "";
            }
        }
    }
</script>