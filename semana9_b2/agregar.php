<?php include 'conexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre</label>
        <input type="tel" name="nom" id="">
        <label for="">Fecha de la consulta</label>
        <input type="date" name="fec" id="">
        <label for="">Motivo de la consulta</label>
        <textarea name="mot" id=""></textarea>
        <button type="submit">Ingresar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nombre = $_POST["nom"];
            $fecha = $_POST["fec"];
            $motivo = $_POST["mot"];

            $insercion = $conexion->prepare("INSERT 
            INTO tblpacientes(nombre,fconsult,mconsult) VALUES(?,?,?)");
            $insercion->bind_param("sss", 
            $nombre, $fecha, $motivo);
            $insercion->execute();
            header("Location:index.php");
        }

    ?>
</body>
</html>