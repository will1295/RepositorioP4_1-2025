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

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>¿Está disponible?</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                @if($libro->dispon)
                    <td>Si</td>
                @else
                    <td>No</td>
                @endif
                <td>
                    <a href="{{route('editar',$libro->id)}}"><button type="button">Editar</button></a>
                    <form action="{{route('eliminar',$libro->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimninar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>