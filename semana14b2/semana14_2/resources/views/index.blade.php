<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
    
    <title>Document</title>
</head>
<body>
    <h1>Lista de canciones</h1>
    
    <a href="{{route ('crear')}}"><button type="button">Insertar nueva cancion</button></a>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Duracion (s)</th>
                <th>Artista</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($canciones as $cancion)
                <tr>
                    <td>{{$cancion->titulo}}</td>
                    <td>{{$cancion->duracion}}</td>
                    <td>{{$cancion->artistas->nombre}}</td>
                    <td>
                        <a href="{{route ('editar',$cancion->id)}}"><button type="button">Editar</button></a>
                    </td>
                    <td>
                        <form action="{{route('borrar',$cancion->id)}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>