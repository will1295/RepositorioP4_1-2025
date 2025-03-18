<?php include 'conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre de estudiante</label>
        <input type="text" name="estudiante">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha" id="">
        <label for="">Carrera</label>
        <input type="text" name="carrera" id="">
        <button type="submit">Registrar</button>
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre = $_POST['estudiante'];
            $fecha = $_POST['fecha'];
            $carr = $_POST['carrera'];

            $insertar = $conexion->prepare(
                'INSERT INTO tblestudiantes (nombre
                ,fechanac,carrera)VALUES(?,?,?)');
            $insertar->bind_param('sss',$nombre,$fecha,$carr);
            $insertar->execute();
            header("Location:index.php");    

        }
    ?>
</body>
</html>