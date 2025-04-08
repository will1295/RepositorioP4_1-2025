<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border:solid 1px black;
        }
    </style>
</head>
<body>
    <h1>Listado de libros</h1>
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
                    <button>Editar</button>
                    <a href="">
                        <form action="/{{$libro->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>