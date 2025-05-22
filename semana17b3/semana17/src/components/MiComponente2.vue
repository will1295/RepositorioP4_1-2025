<template>
    <input v-model="nombre" placeholder="Escribe tu nombre aqui">
    <p>Hola, {{ nombre }}, espero te encuentres bien!</p>
    <div>
        <input v-model="formulario.email" type="email" placeholder="Escribe tu correo">
        <input v-model="formulario.contra" type="password" placeholder="Contraseña">
        <select name="" id="" v-model="formulario.pais">
            <option value="es">El Salvador</option>
            <option value="us">Estados Unidos</option>
            <option value="co">Colombia</option>
        </select>
        <button @click="enviar">Enviar datos</button>
    </div>

</template>

<script>
    export default{
        data(){
            return{
                nombre:"nombre",
                formulario:{
                    email:"",
                    contra:"",
                    pais:"es"
                }
            }
        },
        methods:{
            enviar(){
                console.log("Datos",this.formulario);
            }
        }
    }

</script>