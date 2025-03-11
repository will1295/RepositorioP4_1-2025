<?php
    #For
    #Sentencia;condicion;iteracion
    for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo "<br>";
    }

    #Estructura do-while y while
    $i=0;
    do{
        echo "Hola Mundo!";
        $i++;
        echo "<br>";
    }while($i<10);

    $j = 0;
    while($j< 10){
        echo "Imprimir desde while";
        echo "<br>";
        $j++;
    };

    #Uso de foreach

    $arreglo = array("Juan","Maria","Ana","Luis","Pedro");

    foreach ($arreglo as $nombre) {
        echo "Hola ".$nombre."<br>";
    }

    $arreglo2 = ["Manzana"=>"Rojo","Pera"=>"Verde","Guineo"=>"Amarillo"];

    foreach ($arreglo2 as $fruta=>$color) {
        echo "La ".$fruta." es de color: ".$color."<br>";
    }

    $arreglo3 = [["SMSS1234"=>"Fernando", "Edad"=>20],
        ["SMSS1235"=> "Ana","Edad"=>19],
        ["SMSS1236"=> "Jorge","Edad"=>21],
        ["SMSS1237"=> "Ernesto","Edad"=>23]];

    foreach($arreglo3 as $codigo => $info){
        foreach($info as $key => $value) {
            echo "$key:$value"."<br>";
        }
    }

?>