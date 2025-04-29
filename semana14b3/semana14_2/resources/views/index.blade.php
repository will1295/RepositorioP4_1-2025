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
        </li>
        @endforeach
    </ol>
</body>
</html>