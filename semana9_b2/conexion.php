<?php

    $conexion = mysqli_connect("localhost",
    "root","","hospital");
    if(mysqli_connect_errno()){
        echo "Error: ".mysqli_connect_error();
    }
    else{
        /*echo "Conexion realizada exitosamente";*/
    }
?>