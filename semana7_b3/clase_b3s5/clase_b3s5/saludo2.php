<?php

    header("Content-Type: application/JSON");
    $nombre = $_POST['nombre'];
    echo json_encode(["mensaje" => "Hola ".$nombre." espero que pases un buen día"]);

?>