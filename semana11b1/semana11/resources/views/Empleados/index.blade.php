<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de empleados</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del empleado</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nombres as $empleado)
            <tr>
                <td>{{$empleado}}</td>
                <td>{{$dato}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>  

    <form action="" method="post">
        @csrf
        <button type="submit">Click aqui!</button>
    </form>

</body>
</html>