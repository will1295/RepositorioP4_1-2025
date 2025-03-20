<?php include("conexion.php");  

    $id = $_GET["id"];
    $conexion->query("DELETE FROM tblpacientes 
                    WHERE id=$id");  
    header("Location:index.php");  

?>