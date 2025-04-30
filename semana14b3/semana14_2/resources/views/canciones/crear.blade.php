<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf 
        <input type="text" name='titulo' placeholder='Titulo de cancion'>
        <input type="number" name='duracion'  placeholder='Duracion en segundos'>
        <select name="idartista" id="">
            @foreach($artistas as $artista)
                <option value="{{$artista->id}}">{{$artista->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Guardar cancion</button>
    </form>
</body>
</html>