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
        <input type="text" name="nom" placeholder="nombre">
        <input type="text" name="nacio" placeholder="nacionalidad">
        <button type="submit">Guardar datos</button>
    </form>
</body>
</html>