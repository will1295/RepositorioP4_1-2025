<template>
    <h1>Formulario de contacto</h1>

    <form>
        <label for="">Telefono</label>
        <input v-model="telefono" type="text">
        <label for="">Correo</label>
        <input v-model="correo" type="email" name="" id="">
        <label>Mensaje</label>
        <textarea v-model="mensaje"></textarea>
    </form>

    <h2>Vista previa del mensaje</h2>
    <p>Mensaje: {{ mensaje }}</p>
    <p>Por favor contactame al telefono: {{telefono}} y/o correo: {{ correo }}</p>

</template>

<script>
    export default{
        data(){
            return{
                correo: "",
                telefono: "",
                mensaje: ""
            }
        }
    }

</script>