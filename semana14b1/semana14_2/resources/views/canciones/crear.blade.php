<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nueva cancion</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="nombre" id="" placeholder="nombre de la cancion">
        <input type="number" name="duracion" id="" placeholder="duracion en segundos">
        <select name="idartista" id="">
            @foreach($artistas as $artista)
                <option value="{{$artista->id}}">{{$artista->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Crear</button>
    </form>
</body>
</html>