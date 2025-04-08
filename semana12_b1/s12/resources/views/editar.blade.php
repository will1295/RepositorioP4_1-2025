<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('actualizar',$libro->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="">Titulo</label>
        <input type="text" name="intitulo" value="{{$libro->titulo}}">
        <label for="">Autor</label>
        <input type="text" name="inautor" value="{{$libro->autor}}">
        <label for="">¿Sigue disponible?</label>
        <input type="checkbox" name="disponible" id="" value=1
            @if($libro->disponibilidad==1)
                checked @endif>
        <button type="submit">Actualizar Registro</button>
    </form>
</body>
</html>