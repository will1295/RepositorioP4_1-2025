<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach($musicos as $musico)
        <li>{{$musico->nombre}} -  {{$musico->nacionalidad}}  
                <a href="{{route('editar',$musico->id)}}">
                    <button type="button">Editar</button>
                </a>
                <form action="{{route ('borrar',$musico->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>

        </li>
        @endforeach
    </ol>
</body>
</html>