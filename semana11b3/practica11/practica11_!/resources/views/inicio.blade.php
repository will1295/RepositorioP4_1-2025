<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Libros disponibles</h1>

    @foreach($libros as $libro)
        <li>
            {{$libro['titulo']}} - {{$libro['autor']}}
        </li>
    @endforeach

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>¿Está disponible?</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{$libro['titulo']}}</td>
                <td>{{$libro['autor']}}</td>
                @if($libro['disponible'])
                <td>Sí</td>
                @else
                <td>No</td>
                @endif
            </tr>
        @endforeach    
        </tbody>
    </table>

</body>
</html>