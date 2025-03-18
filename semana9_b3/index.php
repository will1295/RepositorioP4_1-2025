<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Estudiantes</h1>
    <?php
        $liest = $conexion->query('SELECT * from tblestudiantes');
        echo '<table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Carrera</th>
                    </tr>
                </thead>
                <tbody>';
            while($fila = $liest->fetch_assoc()){
                echo "<tr>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['fechanac']}</td>
                    <td>{$fila['carrera']}</td>
                    <td><a href='editar.php?id={$fila['id']}'>Editar</a></td>
                    <td><a href='eliminar.php?id={$fila['id']}'>Eliminar</a></td>
                    </tr>
                   
                ";
            }
            echo '</tbody>
                </table> ';
    ?>
</body>
        <!--Al incluir el footer aqui el archivo de footer aparece al final 
        del body-->
<?php include 'footer.php'?>
</html>