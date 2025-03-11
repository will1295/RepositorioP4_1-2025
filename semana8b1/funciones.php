<?php

    function mifuncion(){
        return "Hola esta es una funcion";
    }

    echo mifuncion();

    #Funcion con parametros por valor
    function sumar($num1,$num2){
        echo "<br>";
        return $num1 + $num2;
    };
    echo sumar(4,5);

    #Funcion con parametros por referencia
    function cuadrado(&$n1){
        $n1 = $n1**2;
        echo "<br>";
        return $n1;
    }

    $numero = 4;
    echo cuadrado($numero);
    echo "<br>";
    echo $numero;

    #Funcion con parametros con longitud indefinida

    function sumarr($valor,...$numeros){
        echo "<br>";
        return $valor*array_sum($numeros);
    }
    
    echo sumarr(2,2,3);
    echo sumarr(4,2);
    echo sumarr(3,2,3,4,5,6,7,8);



?>