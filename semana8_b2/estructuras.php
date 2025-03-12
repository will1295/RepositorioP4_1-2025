<?php
    #Estructra if,else y elseif
    $num1 = 20;
    $num2 = 10;

    if ($num1 > $num2) {
        echo "El primer numero es mayor";
    }
    elseif ($num1 < $num2) {
        echo "El segundo numero es mayor";
    }
    else{
        echo "Error";
    }

    echo "<br>";
    #Estructura switch
    $op = 3;
    switch ($op) {
        case 1:
            echo "El cliente quiere agua";
            break;
        case 2:
            echo "El cliente quiere gaseosa";
            break;
        case 3:
            echo "El cliente quiere jugo";
            break;
        default:
            echo "Opcion no valida";    
    }
    echo "<br>";

    #Do y Do - while

    $i = 1;
    do{
        echo $i;
        echo "<br>";
        $i++;
    } while ($i < 10);

    $j = 0;
    while ($j < 10){
        echo $j;
        echo "<br>";
        $j++;
    };

    $arreglo = ["Jhonny Deep","Jennifer Lawrence","Maddona","Beyonce"];
 
        # arreglo as pseudonimo para los elementos
    foreach ($arreglo as $celebridad) {
        echo 'Bievenido a la fiesta '.$celebridad;
        echo "<br>";
    }

    $duis = ["Persona1"=>"123214124","Persona2"=>"123514",
                "Persona3"=>"1230344"];

    echo "Listado de Duis";
    echo "<br>";
    foreach($duis as $clave =>$valor) {
        echo $valor;
        echo "<br>";
    }

?>