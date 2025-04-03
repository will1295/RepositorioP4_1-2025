<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de nombres</h1>   
    
    @foreach($nombres as $nombre)
        <li>{{$nombre}}</li>
    @endforeach

</body>
</html>