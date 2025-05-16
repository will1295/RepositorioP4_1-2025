<template>
    <h1>Hola soy {{nombre}} y esta es mi primera pagina con Vue</h1>
    <section>
    <p>Esta pagina posee tres componentes
        que al montarlos al mismo tiempo
        producen esta pagina
    </p>
    </section>
</template>

<script>
    export default{
        name:'Content',
        data(){
            return{
                nombre:"Pepito"
            } 
        }
    };

</script>

<style scoped>
section{
    background-color: aqua;
    padding: 30px;
    height: 100px;
    border-radius: 10px;
}

</style>