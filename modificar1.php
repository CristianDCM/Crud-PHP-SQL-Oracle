<?php
Modificar($_POST['ID'], $_POST['nombre'], $_POST['contraseña']);
function Modificar($id, $nombre, $contraseña)
{
    include "db.php";
    $Tabla = "PRUEBA";
    $sentencia = "UPDATE $Tabla SET NOMBRE='$nombre', CONTRASENA='$contraseña' WHERE ID=$id";
    $resultado = oci_parse($conexion, $sentencia);
    oci_execute($resultado);
    if (!$resultado) {
        echo "<script>alert('Fallo al Actualizar Datos');</script>";
    };
}
?>
<script type="text/javascript">
    //alert("Datos Actualizados Exitosamante!");
    window.location.href = 'menu.php';
</script>