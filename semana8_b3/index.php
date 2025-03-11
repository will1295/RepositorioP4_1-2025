<!--
Arreglos
-->
<?php
                        #Imprimir juan
    $arreglo = array("Maria","Juan","Angel","Luis","Ana");
    echo $arreglo[1];
    echo "<br>";
                        #Imprimir el dia de hoy
    $arreglo2 = [20,"San Miguel","Lunes",12.5,true];
    echo "Hoy es ".$arreglo2[2];
                #Imprimir Juan Perez
    $arreglo3 = ["nombre"=>"Juan","apellido"=>"Perez",
                "edad"=>25];
    echo "<br>";
    echo "Mi nombre es: ".$arreglo3['nombre']." ".$arreglo3['apellido'];
    echo "<br>";
    echo sprintf("Mi nombre es %s %s",$arreglo3['nombre'],$arreglo3['apellido']);
    echo '<br>';
    $nombre = $arreglo3['nombre'];
    $apellido = $arreglo3['apellido'];

                #Imprimir la edad de maria
    $arreglo4 = array("nombre"=>"Maria","apellido"=>"Sanchez",
                    "edad"=>20);
    echo "La edad de ".$arreglo4['nombre']." es ".$arreglo4['edad'];
                #Imprimir estudiante Pedro que es de sede san miguel
    $arreglo5 = ["Estudiantes"=>[
        "SMSS1234"=> "Maria",
        "SMSS1235"=> "Juan",
        "SMSS1236"=> "Angel",
        "SMSS1237"=> "Pedro"
    ],"Sede"=>"San Miguel","Año"=>2024];
    echo "<br>";
    echo $arreglo5['Estudiantes']["SMSS1237"]." va a clases en la sede ".$arreglo5['Sede'];
    echo '<br>';

    #Estructura for
    #Iteracion;Condicion;Aumento o Decremento
    for ($i= 1; $i<= 10; $i++) {
        echo $i;
        echo '<br>';
    }

    #Estructura While y Do-While
    $it=0;
    while ($it<10) {
        echo "Hello World!";
        echo "<br>";
        $it++;
    }

    $it2=0;
    do{
        echo "Hola Mundo!";
        echo "<br>";
        $it2++;
    }
    while ($it2<10);

    #Estructura foreach
    foreach ($arreglo5['Estudiantes'] as $nombre=>$estudiantes) {
        echo $estudiantes;
        echo "<br>";
    }
    #Estructura if
    $num1 = 10;
    $num2 = 4;
    if ($num1>$num2) {
        echo 'El '.$num1." es mayor"; 

    }

    #Estructura switch
    echo '<br>';
    $op = 1;

    switch ($op) {
        case 1:
            echo 'Haz elegido la opcion 1';
            break;
        case 2:
            echo 'Haz elegido la opcion 2';
            break;
        case 3:
            echo 'Haz elegido la opcion 3';
            break;
        default:
            echo 'Opcion no valida';
            break;
    }
    


?>