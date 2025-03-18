<?php include 'conexion.php';

    $id = $_GET['id'];
    $resultado= $conexion->query("SELECT *FROM 
    tblEmpleados WHERE id=$id");
    $empleado = $resultado->fetch_assoc();
?>

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
        <input type="text" name="nombre" id="" 
        value="<?php echo $empleado['nombre']?>">
        <label for="">Carnet</label>
        <input type="text" name="carnet" id=""
        value="<?php echo $empleado['carnet']?>">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha" id=""
        value="<?php echo $empleado['fechanac']?>">
        <button type="submit">Actualizar Registro</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nom = $_POST['nombre'];
            $ct = $_POST['carnet'];
            $fec = $_POST['fecha'];

            $insercion = $conexion
            ->prepare("UPDATE tblempleados SET
            nombre=?,carnet=?,fechanac=? WHERE id=$id");
            $insercion->bind_param("sss", $nom, $ct, $fec);
            $insercion->execute();
            header("Location:index.php");

        }

    ?>
</body>
<?php include 'footer.php'?>
</html>