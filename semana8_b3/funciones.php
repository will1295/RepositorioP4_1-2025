<?php        
   function mifuncion(){
    return "Hola Mundo!";
   }
   echo mifuncion();
   echo "<br>";

   $num1 = 20;
   $num2 = 10;
   #Argumento por referencia, &
   function sumar(&$num1,$num2){
    $num1 = $num1**2;
    return ($num1) + ($num2**2);
   }
   echo sumar($num1,$num2);
   echo "<br>";
   echo $num1;

   # Parametros de longitud variable
   function sum ($valor,...$nums){
    echo '<br>';
    return $valor*array_sum($nums);
   }

   echo sum(1,2,3,4,5);
   echo sum(4,5);
   echo sum(6,6,7,8,9);

?>