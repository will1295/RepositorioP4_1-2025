<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="number" name="num1" id="" placeholder="ingresa un numero">
        <input type="number" name="num2" id="" placeholder="ingresa un numero">
        <select name="opcion" id="">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select>
        <button type="submit">Haz Click!</button>
    </form>
</body>
</html>