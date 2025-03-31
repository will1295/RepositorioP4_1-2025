<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de clientes de la sucursal {{$info}}!</h1>
    @foreach($listado as $cliente)
    <li>{{$cliente}}</li>
    @endforeach
</body>
</html>