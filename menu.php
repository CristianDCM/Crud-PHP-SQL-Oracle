<?php
session_start();
if ($_SESSION['nombre'] != 'admin') {
    echo '<script>';
    echo 'alert("No eres Admin!");';
    echo 'window.location.href="index.php";';
    echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div class="containermenu">
        <div class="marginmenu">
            <table class="contmenu">
                <thead>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CONTRASEÑA</th>
                    <th>ACCIONES</th>
                </thead>
                <?php
                include("db.php");
                $tabla = "PRUEBA";
                $sentencia = "SELECT * FROM $tabla";
                $resultado = oci_parse($conexion, $sentencia);
                oci_execute($resultado);
                if (!$resultado) {
                    echo "<script>alert('Fallo al mostrar');</script>";
                };
                while ($filas = oci_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $filas['ID'] . "</td>";
                    echo "<td>" . $filas['NOMBRE'] . "</td>";
                    echo "<td>" . $filas['CONTRASENA'] . "</td>";
                    echo "<td><a href='modificar.php?ID=" . $filas['ID'] . "'><button type='button' class='btn btn-success'>Modificar</button></a> \n";
                    echo "<a href='eliminar.php?ID=" . $filas['ID'] . "''><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <a href="registrar.php"> <button type="button" class="btn btn-primary">Registrar</button></a>
        <a href="index.php"> <button type="button" class="btn btn-secondary">Login</button></a>
    </div>
</body>

</html>