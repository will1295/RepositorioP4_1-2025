<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar nuevo artista</h1>

    <form action="" method="post">
        @csrf
        <input type="text" name='nombre' placeholder='nombre'>
        <input type="text" name='nacionalidad' placeholder='nacionalidad'>
        <button type='subtmit'>Registrar</button>
    </form>
</body>
</html>