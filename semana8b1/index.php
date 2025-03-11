<?php

    #Arreglos en PHP

    #Imprimir en pantalla el nombre Ana.
    $arreglo1 = array("Juan","Luis","Ana","Maria");
    echo $arreglo1[2];
    echo "<br>";
    #Imprimir en pantalla mi nombre es Angel Hernandez
    $arreglo2 = [20,"San Miguel","Angel","Hernandez"];
    echo "Mi nombre es ".$arreglo2[2]." ".$arreglo2[3];
    echo "<br>";
    #Imprimir en pantalla soy juan y vivo en la union
    $arreglo4 = ["Nombre"=>"Juan","Apellido"=>"Perez",
                "Edad"=>20,"Ciudad"=>"La Union"];
    echo "Soy ".$arreglo4["Nombre"]." y vivo en ".$arreglo4["Ciudad"];
    #Estudio ing en sistemas desde el 2021
    $arreglo5 = array("Carrera"=> "Ing en sistemas",
                "Año"=> 2021);
    echo "<br>";
    echo "Estudio ".$arreglo5["Carrera"]." Desde el año ".$arreglo5["Año"];
    #Soy Jorge y estudio en la sede San Miguel.
        $arreglo6 = ["Estudiantes"=>[
        "SMSS1234"=>"Fernando",
        "SMSS1235"=> "Ana",
        "SMSS1236"=> "Jorge",
        "SMSS1237"=> "Ernesto",
    ],
    "Sede"=>["San Miguel","Usulutan"],"Año"=> 2025];
    echo "<br>";
    echo 'Soy '.$arreglo6['Estudiantes']["SMSS1236"]." y 
        estudio en la sede ".$arreglo6['Sede'][0];


?>