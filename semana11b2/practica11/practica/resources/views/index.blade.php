<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Biblioteca Laravel</h1>
    <h2>Listado de libros</h2>
    <ol>
    @foreach($info as $libro)
        <li>Libro: {{$libro['titulo']}} -  Autor: {{$libro['autor']}}</li>    
    @endforeach
    </ol>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>¿Está disponible?</th>
            </tr>
        </thead>
        <tbody>
        @foreach($info as $libro)
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