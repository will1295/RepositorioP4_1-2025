<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
        header("Content-Type: application/json");
        $nombre = $_POST['nombre'];
        echo json_encode(['mensaje'=>'Hola '.$nombre.' pasa un buen dia!']);
        
    }
?>