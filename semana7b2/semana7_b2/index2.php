<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingresa tu nombre y recibe un saludo</h1>
    <form action="" method="post" onsubmit="event.preventDefault();saludar();">
        <label for="">Nombre: </label>
        <input type="text" name="nom" id="nom">
        <button type="submit">Enviar</button>
    </form>

    <p id="respuesta"></p>

    <script>

        function saludar(){
            let nombre =document.getElementById("nom").value;
            fetch("saludo.php",{
                method:"POST",
                body: new URLSearchParams({nombre:nombre}),
                headers: {"Content-Type":"application/x-www-form-urlencoded"}
            })
            .then(response => response.text())
            .then(data=>{
                document.getElementById("respuesta").innerText = data;
            })
            //.catch(error=> console.error("Error":error));
        }
        
    </script>
</body>
</html>