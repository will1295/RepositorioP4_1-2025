<template>
    <section>
    <h1>Bienvenido a mi pagina de vue</h1>
    <p>Yo soy {{nombre}} y esta pagina tiene tres componentes que en conjunto
        hacen toda la pagina que ves en este momento
    </p>
    </section>
</template>

<script>
    export default{
        data(){
            return{
                nombre:"Juan Perez"
            }
        },
        name:'Content'
    };
</script>

<style scoped>
    section{
        padding: 30px;
        border-radius: 10px;
        width: 80%;
        max-width: 600px;
    }

</style>