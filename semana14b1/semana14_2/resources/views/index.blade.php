<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Artistas guardados</h1>

    <ol>
        @foreach($artistas as $artista)
        <li>{{$artista->nombre}} - {{$artista->nacionalidad}}
            <a href="{{route ('editar',$artista->id)}}"><button type="button">Editar</button></a>
            <form action="{{route ('eliminar',$artista->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ol>
</body>
</html>