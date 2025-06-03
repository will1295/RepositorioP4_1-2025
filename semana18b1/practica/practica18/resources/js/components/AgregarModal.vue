<template>
  <div v-if="visible" class="modal-overlay">
    <form>
      <input type="text" placeholder="Titulo de la pelicula">
      <select>
        <option value="">Excelente</option>
        <option value="">Buena</option>
        <option value="">Regular</option>
        <option value="">No la recomiendo</option>
      </select>
      <input type="text" placeholder="Genero de la pelicula">
      <textarea placeholder="Comentarios.."></textarea>
      <button type="submit">Guardar</button>
      <button type="button" @click="$emit('cerrar')">Cancelar</button>
    </form>
  </div>
</template>

<script>

    export default{
        props:['visible'],
    }


</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* fondo oscuro */
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background-color: white;
  padding: 20px;
  border-radius: 12px;
  width: 400px;
  max-width: 90%;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.acciones {
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
}
</style>