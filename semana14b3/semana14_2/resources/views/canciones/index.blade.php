<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de canciones</h1>

    <ol>
        @foreach($canciones as $cancion)
        <li>
            {{$cancion->titulo}} - {{$cancion->duracion}} - {{$cancion->artista->nombre}}

            <a href="{{route('ceditar',$cancion->id)}}"><button type="button">Editar</button></a>

            <form action="{{route ('cborrar',$cancion->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
        </li>
        @endforeach
    </ol>
    
</body>
</html>