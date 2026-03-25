<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM persona";
$query = pg_query($con, $sql);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Lista de Personas</h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>

        <?php while($row = pg_fetch_array($query)) { ?>
            <tr>
                <td><?= $row['idpersona'] ?></td>
                <td><?= $row['documento'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['apellido'] ?></td>
                <td><?= $row['direccion'] ?></td>
                <td><?= $row['celular'] ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>

</body>
</html>