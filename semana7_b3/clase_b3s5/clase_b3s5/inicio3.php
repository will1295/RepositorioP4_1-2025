<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de nombres</h1>
    <form id="formulario" action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">
        <button type="submit">Recibe un saludo con tu nombre</button>
    </form>

    <p id="sal"></p>

    <script>
        document.getElementById("formulario").addEventListener("submit",function(event){
            event.preventDefault();
            let info = new FormData(this);

            fetch("saludo2.php",{
                method:"POST",
                body:info
            })
            .then(response => response.json())
            .then(data =>{
                document.getElementById("sal").textContent = data.mensaje;
            })

        })
    </script>
</body>
</html>