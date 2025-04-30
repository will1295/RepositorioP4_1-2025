<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar artista</h1>
    <form action="" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" id="" placeholder='nombre' value="{{$artista->nombre}}">
        <input type="text" name="nacionalidad" id="" placeholder='nacionalidad' value="{{$artista->nombre}}"value="{{$artista->nacionalidad}}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>