<template>
    <h1>Lista de productos disponibles</h1>

    <div>
        <p>Agregar nuevo</p>
        <input v-model="nuevoid" type="number" placeholder="id">
        <input v-model="nuevonombre" type="text" placeholder="nombre">
        <input v-model="nuevoprecio" type="number" placeholder="precio">
        <input v-model="nuevostock" type="number" placeholder="stock">
        <button @click="agregarProducto">Guardar</button>
    </div>

    <ul v-for="producto in productos" key="id">
        <li>Nombre: {{producto.nombre}} Precio: ${{producto.precio}} Stock: {{producto.stock}}</li>
    </ul>

</template>

<script>
    export default{
        data(){
            return{
                productos:[
                    //id,nombre,precio,stock
                    {id:1,nombre:"Soda",precio:1.0,stock:5},
                    {id:2,nombre:"Maruchan",precio:0.85,stock:10},
                    {id:3,nombre:"Doritos",precio:0.75,stock:12},
                    {id:4,nombre:"Sardinas",precio:1.25,stock:7},
                    {id:5,nombre:"Chicles",precio:0.05,stock:25}
                ],
                nuevoid:0,
                nuevonombre:"",
                nuevoprecio:0,
                nuevostock:0
            }
        },
        methods:{
            agregarProducto(){
                this.productos.push({
                    id:this.nuevoid,
                    nombre:this.nuevonombre,
                    precio:this.nuevoprecio,
                    stock:this.nuevostock
                })  
            }
        }
    }

</script>