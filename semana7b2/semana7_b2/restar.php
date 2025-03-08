<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Escribe un numero</label>
        <input type="number" name="num1" id="num1">
        <label for="">Escribe un numero</label>
        <input type="number" name="num2" id="num2">
        <button type="submit">Sumar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        echo $num1-$num2;
        /*var_dum es una herramienta que me sirve para visualizar 
        el contenido de una variable*/
        var_dump($_POST);
    }
   
?>

</body>
</html>