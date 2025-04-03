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
        <label for="">Primer numero</label>
        <input type="number" name="numero1" id="">
        <label for="">Segundo numero</label>
        <input type="number" name="numero2" id="">
        <select name="op" id="">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select>
        <button type="submit">Ver Resultado</button>
    </form>
</body>
</html>