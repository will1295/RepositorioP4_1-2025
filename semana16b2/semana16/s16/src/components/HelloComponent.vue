<!--Un component tiene que llevar al menos
una etiqueta template que es la apariencia del component-->
<template>
    <h1>Hola Mundo!</h1>
    <h2>Mi nombre es {{ nombre }}</h2>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</template>

<script>
    export default{
        //data es para retornar un valor
        data(){
            return{
                nombre:"Maria Hernandez"
            }
        }

        //methods()
    }

</script>