<template>
  <div id="app">
    <Header></Header>
    <Content></Content>
    <Imagen></Imagen>
    <Footer></Footer>
  </div>

</template>

<script>
  import Header from './components/Header.vue';
  import Content from './components/Content.vue';
  import Imagen from './components/Imagen.vue';
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