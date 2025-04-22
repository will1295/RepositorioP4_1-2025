<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizando Registro</h1>
    <form action="{{route('actualizar',$libro->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Titulo</label>
        <input type="text" name="intitulo" id="" value="{{$libro->titulo}}">
        <label for="">Autor</label>
        <input type="text" name="inautor" id="" value="{{$libro->autor}}">
        <label for="">¿Sigue disponible?</label>
        <input type="checkbox" value="1" name="dispon" id=""
            @if($libro->dispon==1)checked
            @endif>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>