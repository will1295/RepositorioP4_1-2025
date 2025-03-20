<?php include("conexion.php");

    $id = $_GET["id"];
    $resultado = $conexion->query("SELECT * FROM tblpacientes 
                    WHERE id=$id"); 
    $paciente = $resultado->fetch_assoc(); 
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
        <input type="tel" name="nom" id="" 
        value="<?php echo $paciente["nombre"]?>">
        <label for="">Fecha de la consulta</label>
        <input type="date" name="fec" id=""
        value="<?php echo $paciente["fconsult"]?>">
        <label for="">Motivo de la consulta</label>
        <textarea name="mot" id=""><?php echo $paciente["mconsult"]?></textarea>
        <button type="submit">Ingresar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nombre = $_POST["nom"];
            $fecha = $_POST["fec"];
            $motivo = $_POST["mot"];

            $actualizacion = $conexion->prepare("UPDATE 
            tblpacientes SET nombre=?, fconsult=?,mconsult=?
            WHERE id=$id");
            $actualizacion->bind_param("sss", 
            $nombre, $fecha, $motivo);
            $actualizacion->execute();
            header("Location:index.php");
        }

    ?>
</body>
</html>