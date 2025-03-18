<?php include 'conexion.php'; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $resultado = $conexion->query("SELECT * FROM tblestudiantes
                        WHERE id=$id");
        $alumno = $resultado->fetch_assoc();
    }
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
        <label for="">Nombre de estudiante</label>
        <input type="text" name="estudiante" 
        value="<?php echo $alumno['nombre']?>">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha" id=""
        value="<?php echo $alumno['fechanac'] ?>">
        <label for="">Carrera</label>
        <input type="text" name="carrera" 
        value="<?php echo $alumno['carrera'] ?>">
        <button type="submit">Registrar</button>
    </form>

    <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre = $_POST['estudiante'];
    $fecha = $_POST['fecha'];
    $carr = $_POST['carrera'];

    $insertar = $conexion->prepare(
        "UPDATE tblestudiantes SET nombre=?,fechanac=?,carrera=?
        WHERE id=$id");
    $insertar->bind_param('sss',$nombre,$fecha,$carr);
    $insertar->execute();
    header("Location:index.php");    

}
?>
</body>
</html>

