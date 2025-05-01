<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar cancion</h1>
    <form action="" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" id="" placeholder="Titulo" value="{{$cancion->titulo}}">
        <input type="number" name="duracion" id="" min=1 step=1 placeholder="Duracion" value="{{$cancion->duracion}}">
        <select name="fkartistas" id="">
            @foreach($artistas as $artista)
            <option value="{{$artista->id}}" {{$cancion->fkartistas==$artista->id?'selected':''}}>
                {{$artista->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{route ('index')}}"><button type="button">Regresar</button></a>
</body>
</html>