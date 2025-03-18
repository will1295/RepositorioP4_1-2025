<?php include 'conexion.php'; ?>

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
        <input type="text" name="nombre" id="">
        <label for="">Carnet</label>
        <input type="text" name="carnet" id="">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha" id="">
        <button type="submit">Ingresar Nuevo Registro</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nom = $_POST['nombre'];
            $ct = $_POST['carnet'];
            $fec = $_POST['fecha'];

            $insercion = $conexion
            ->prepare("INSERT INTO tblempleados(
            nombre,carnet,fechanac) VALUES(?,?,?)");
            $insercion->bind_param("sss", $nom, $ct, $fec);
            $insercion->execute();
            header("Location:index.php");

        }

    ?>
</body>
<?php include 'footer.php'?>
</html>