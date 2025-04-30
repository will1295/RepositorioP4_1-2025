<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar cancion</h1>

    <form action="{{route('cactualizar',$cancion->id)}}" method="post">
        @csrf 
        @method('PUT')
        <input type="text" name="nombre" id="" value="{{$cancion->nombre}}">
        <input type="number" name="duracion" id="" value="{{$cancion->duracion}}">
        <select name="idartista" id="">
            @foreach($artistas as $artista)
            <option value="{{$artista->id}}" {{$cancion->idartista == $artista->id ? 'selected':''}}>
                {{$artista->nombre}}
            </option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>