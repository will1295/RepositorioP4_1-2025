<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de libros disponibles</h1>
    <a href="{{route('crear')}}"><button>Nuevo Registro</button></a>
    <ol>
        @foreach($libros as $libro)
        <li>{{$libro->titulo}} - {{$libro->autor}} - {{$libro->dispon}}</li>
        @endforeach
    </ol>
    
</body>
</html>