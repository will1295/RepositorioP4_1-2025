<template>
    <input v-model="nombre" type="text" placeholder="Escribe tu nombre">
    <p>Hola, {{ nombre }}</p>

    <h2>Ingresa tus datos: </h2>
    <form>
        <input v-model="formulario.email" type="email" placeholder="Escribe tu correo">
        <input v-model="formulario.edad" type="number" placeholder="Edad">
        <select v-model="formulario.depa" name="" id="">
            <option value="sm">San Miguel</option>
            <option value="us">Usulutan</option>
            <option value="mo">Morazan</option>
            <option value="lu">La Union</option>
        </select>
        <button @click="enviar" type="button">Enviar info</button>

    </form>

</template>

<script>
    export default{
        data(){
            return{
                nombre:"",
                formulario:{
                    email:"",
                    edad:"",
                    depa:"mo"
                }
            }
        },
        methods:{
            enviar(){
                console.log("Datos",this.formulario);
                //alert("Datos",${this.formulario});
            }

        }
    }

</script>