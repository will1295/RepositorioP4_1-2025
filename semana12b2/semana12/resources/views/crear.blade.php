<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo Registro</h1>
    <form action="" method="post">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="intitulo" id="">
        <label for="">Autor</label>
        <input type="text" name="inautor" id="">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>