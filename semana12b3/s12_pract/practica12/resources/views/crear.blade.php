<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar nuevo libro</h1>
    <form action="" method="post">
        @csrf
        <input type="text">
        <select name="" id="">
            <option value="">Seleccione un autor</option>
            @foreach($autores as $autor)
                <option value="{{$autor->id}}">{{$autor->nombre}}</option>
            @endforeach
        </select>
    </form>
</body>
</html>