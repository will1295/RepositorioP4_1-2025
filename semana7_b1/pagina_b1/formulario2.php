<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formsal" action="" method="post">
        <label for="">Escribe tu nombre</label>
        <input type="text" name="nombre" id="">
        <button type="submit">Enviar Saludo</button>
    </form>
    <p id="parrafo"></p>
    <script>
        document.getElementById('formsal').addEventListener(
            'submit',function(event){
                event.preventDefault();
                    //Inicializando la informacion de la solicitud
                let info = new FormData(this);
                //Informacion de la peticion con fetch
                fetch("saludo.php",{
                    //Tipo de solicitud al archivo de php
                    method:"POST",
                    //Informacion contenida en la peticion
                    body:info
                })
                //Tipo de respuesta en este caso es un JSON
                .then(response =>response.json())
                //Que es lo que va a hacer la peticion con la informacion
                .then(data=>{
                    document.getElementById('parrafo').textContent = data.mensaje;
                })
            }
        )
    </script>
</body>
</html>