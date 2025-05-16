<template>
  <div id="app">

  <Header></Header>
  <main>
  <Content></Content>
  <Imagen></Imagen>
  <Footer></Footer>
  </main>
  </div>
</template>

<script>
  import Header from './components/Header.vue';
  import Imagen from './components/Imagen.vue';
  import Content from './components/Content.vue';
  import Footer from './components/Footer.vue';

  export default{
    name:'App',
    components:{
      Header,
      Content,
      Imagen,
      Footer
    }
  }
</script>

<style scoped>

 #app{
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  align-items: center;
  justify-content: flex-start;
  text-align: center;
 }
 
 main{
  flex: 1;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
 }

 footer{
  width: 100%;
 }

</style>