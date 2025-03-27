<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Esta es otra view</h1>

    <form action="/datos" method="post">
        @csrf
        <button type="submit">Haz click aqui y ve la magia</button>
    </form>

</body>
</html>