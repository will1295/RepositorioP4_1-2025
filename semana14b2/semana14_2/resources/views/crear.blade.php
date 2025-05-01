<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nueva cancion</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="titulo" id="" placeholder="Titulo">
        <input type="number" name="duracion" id="" min=1 step=1 placeholder="Duracion">
        <select name="fkartistas" id="">
            @foreach($artistas as $artista)
            <option value="{{$artista->id}}">{{$artista->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Registrar nuevo</button>
    </form>
    <a href="{{route ('index')}}"><button type="button">Regresar</button></a>
</body>
</html>