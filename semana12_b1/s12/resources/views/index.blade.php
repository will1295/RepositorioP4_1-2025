<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>Listado de libros</h1>
    <ul>
        @foreach($libros as $libro)
        <li>{{$libro->titulo}} - {{$libro->autor}} - {{$libro->disponibilidad}}</li>
        @endforeach
    </ul>

    <a href="{{route('crear')}}"><button>Nuevo Registro</button></a>
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
                @if($libro->disponibilidad)
                    <td>Si</td>
                @else
                    <td>No</td>
                @endif
                <td>
                    <a href="{{route('editar',$libro->id)}}"><button type="button">Editar</button></a>
                    <a href="">
                        <form action="/{{$libro->id}}" method="post">
                        @csrf
                        @method("DELETE")
                            <button type="submit">Borrar</button>
                        </form>
                    </a>
                </td>    

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>