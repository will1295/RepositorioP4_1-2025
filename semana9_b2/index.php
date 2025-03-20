<?php include "conexion.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hospital Pepito Perez</h1>
    <a href="agregar.php"><button type="button">Agregar nuevo paciente</button></a>
    <h2>Listado de Pacientes</h2>
    <?php 
        $listado = $conexion->query("SELECT * FROM tblpacientes");

        echo "<table>
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Fecha de consulta</th>
                            <th>Motivo de la consulta</th>
                        </tr>
                    </thead>
                    <tbody>";
        while ($dato = $listado->fetch_assoc()){
            echo "<tr>
                    <td>{$dato['nombre']}</td>
                    <td>{$dato['fconsult']}</td>
                    <td>{$dato['mconsult']}</td>
                    <td>
                        <a href='editar.php?id={$dato['id']}'>
                            <button>Editar</button>
                        </a>
                        <a href='eliminar.php?id={$dato['id']}'>
                            <button>Borrar</button>
                        </a>
                    </td>
                </tr>
            ";
        }
        echo "</tbody>
                </table>";
    ?>
</body>
</html>