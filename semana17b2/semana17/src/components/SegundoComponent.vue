<template>
     <h3>Uso de v-model</h3>

     <input v-model="texto" type="text" placeholder="Escribe algo aqui">

     <label for="">{{ texto }}</label>

     <label for="">Selecciona tu departamento: </label>
     <select v-model="opcion" name="" id="">
        <option value="sm">San Miguel</option>
        <option value="us">Usulutan</option>
        <option value="la">La Union</option>
        <option value="mo">Morazan</option>
     </select>

     <label for="">Haz seleccionado: {{ opcion }}</label>

</template>

<script>
    export default{
        data(){
            return{
               texto:"",
               opcion:"sm"
            }
        }
    }

</script>