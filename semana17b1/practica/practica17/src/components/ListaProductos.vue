<template>
    <h2>Lista de productos disponibles</h2>

    <div>
        <input v-model="nuevonombre" type="text">
        <textarea v-model="nuevadescripcion" name="" id=""></textarea>
        <input v-model="nuevoprecio" type="number">
        <input v-model="nuevostock" type="number">
        <button @click="agregar">Guardar nuevo producto</button>
    </div>

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
                <td>{{ producto.precio }}</td>
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
                    //nombre,descripcion,precio,stock
                    {nombre:"Manzana",descripcion:"Manzana roja",precio:0.75,stock:20},
                    {nombre:"Fresas",descripcion:"Bandeja de fresas",precio:4.25,stock:10},
                    {nombre:"Naranjas",descripcion:"Naranjas por libras",precio:1.25,stock:10},
                    {nombre:"Sandia",descripcion:"Sandia unidad",precio:2.50,stock:21},
                    {nombre:"Kiwi",descripcion:"Kiwi libra",precio:5.20,stock:4}
                ],
                nuevonombre:"",
                nuevadescripcion:"",
                nuevoprecio:0,
                nuevostock:0
            }
        },
        methods:{
            agregar(){
                this.productos.push({
                    nombre:this.nuevonombre,
                    descripcion:this.nuevadescripcion,
                    precio:this.nuevoprecio,
                    stock:this.nuevostock
                })
            }

        }
    }

</script>