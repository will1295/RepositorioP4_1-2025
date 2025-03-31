<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>

    <h2>Suma de dos valores</h2>
    <form action="" method="post">
        @csrf
        <input type="number" name="numero1" placeholder="Escribe un número">
        <input type="number"  name="numero2" placeholder="Escribe un número">
        <button type="submit">Sumar</button>
    </form>


</body>
</html>