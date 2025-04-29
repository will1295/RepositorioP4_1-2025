<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar artista</h1>

    <form action="" method="post">
        @csrf
        @method('PUT')
        <?php echo($artista->nombre) ?>
        <input type="text" name='nombre' placeholder='nombre' value='{{$artista->nombre}}'>
        <input type="text" name='nacionalidad' placeholder='nacionalidad' value='{{$artista->nacionalidad}}'>
        <button type='submit'>Registrar</button>
    </form>
</body>
</html>