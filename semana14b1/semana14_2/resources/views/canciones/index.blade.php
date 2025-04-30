<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de canciones</h1>

    <ol>
        @foreach($canciones as $cancion)
        <li>
            {{$cancion->nombre}} - {{$cancion->duracion}} - {{$cancion->artistas->nombre}}

            <a href="{{route('cactualizar',$cancion->id)}}"><button type="button">Editar</button></a>

            <form action="{{route('celiminar',$cancion->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        @endforeach
    </ol>
</body>
</html>