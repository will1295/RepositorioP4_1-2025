<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulario de Edad</h1>
    <form action="" method="post">
        <label for="">Digita tu edad</label>
        <input type="text" name="edad" id="">
        <button type="submit">Haz Click Aqui</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $edad = $_POST['edad'];
        if($edad >= 18){
            echo "Eres mayor de edad";
        }
        else{
            echo "Eres menor de edad";
        }
        }

    ?>
</body>
</html>