<template>
  <div>
    <h1>Lista de productos disponibles</h1>

    <h2>Agregar producto</h2>
    <form>
        <input v-model="nuevo.nombre" type="text" placeholder="Nombre">
        <textarea v-model="nuevo.descripcion" placeholder="Descripcion"></textarea>
        <label for="">Precio del producto</label>
        <input v-model="nuevo.precio" type="number" step="0.1">
        <label for="">Cantidad de producto</label>
        <input v-model="nuevo.stock" type="number" step="1">
        <button @click.prevent="agregar" type="submit">Ingresar nuevo</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="producto in productos" :key="producto.id">
          <td>{{ producto.nombre }}</td>
          <td>{{ producto.descripcion }}</td>
          <td>{{ producto.precio }}</td>
          <td>{{ producto.stock }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  data() {
    return {
      productos: [],
      nuevo:{
        nombre:'',
        descripcion:'',
        precio:0,
        stock:0
      }
    };
  },
  mounted() {
    this.cargarProductos();
  },
  methods: {
    cargarProductos() {
      axios.get('/api/productos/')
        .then(response => {
          this.productos = response.data;
        });
    },
    agregar(){
        axios.post('/api/productos/',this.nuevo)
        .then(()=>{
            this.cargarProductos();
        })
        .catch(error =>{
            console.error("Error al agregar",error);
        })
    }
  }
}
</script>
