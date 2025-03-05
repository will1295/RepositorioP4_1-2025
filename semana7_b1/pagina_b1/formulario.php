<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Escribe tu nombre</label>
        <input type="text" name="nombre" id="">
        <button type="submit">Enviar Saludo</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nombre = $_POST['nombre'];
        echo'Hola '.$nombre.' pasa un buen dia!';
    }
?>
</body>
</html>