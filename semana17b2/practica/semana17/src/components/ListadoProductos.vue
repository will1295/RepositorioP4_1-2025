<template>
    <h2>Nuevo producto</h2>
    <input v-model="nuevonombre" type="text" placeholder="nombre">
    <textarea v-model="nuevadescripcion" placeholder="descripcion"></textarea>
    <input v-model="nuevoprecio" type="number" placeholder="precio">
    <input v-model="nuevostock" type="number" placeholder="stock">
    <button @click="guardar">Guardar nuevo</button>
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
    export default{
        data(){
            return{
                productos:[
                    {nombre:"Churros",descripcion:"Marca Diana",precio:0.30,stock:10},
                    {nombre:"Mochila",descripcion:"Mochila Toto",precio:29.99,stock:5},
                    {nombre:"Zapatos",descripcion:"Marca CAT",precio:139.99,stock:8},
                    {nombre:"Smartwatch",descripcion:"Marca samsung",precio:300,stock:3},
                    {nombre:"Laptop",descripcion:"Marca HP",precio:550,stock:5}
                ],
                nuevonombre:"",
                nuevadescripcion:"",
                nuevoprecio:0,
                nuevostock:0
            }
        },
        methods:{
            guardar(){
                this.productos.push(
                    {
                        nombre:this.nuevonombre,
                        descripcion:this.nuevadescripcion,
                        precio:this.nuevoprecio,
                        stock:this.nuevostock
                    }
                )

            }
        }
    }

</script>