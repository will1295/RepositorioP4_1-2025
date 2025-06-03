<template>

    <h1>Agregar nuevo producto</h1>
    <form>
        <input v-model="nuevo.nombre" type="text" placeholder="Nombre del producto">
        <textarea v-model="nuevo.descripcion" placeholder="Descripcion"></textarea>
        <label for="">Precio del producto</label>
        <input v-model="nuevo.precio" type="number" step="0.1">
        <label for="">Stock</label>
        <input v-model="nuevo.stock" type="number" step="1">
        <button @click="agregar()">Agregar nuevo</button>
    </form>

    <h1>Lista de productos</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="producto in productos">
                <td>{{ producto.nombre }}</td>
                <td>{{ producto.descripcion }}</td>
                <td>${{ producto.precio }}</td>
                <td>{{ producto.stock }}</td>
            </tr>

        </tbody>
    </table>

</template>

<script>
    import axios from 'axios'
    export default{
        data(){
            return{
                productos:[],
                nuevo:{
                    'nombre':'',
                    'descripcion':'',
                    precio:0,
                    stock:0
                }
            }
        },
        mounted(){
            this.cargarProductos();
        },
        methods:{
            cargarProductos(){
                axios.get('/api/productos')
                .then(response=>{
                    this.productos = response.data
                })
                .catch(error=>{
                    console.error("Error al mostrar los datos",error);
                })
            },
            agregar(){
                axios.post('/api/productos/',this.nuevo)
                .then(()=>{
                    this.cargarProductos();
                })
                .catch(error=>{
                    console.error("Error al guardar los datos",error);
                })
            }
        }
    }

</script>