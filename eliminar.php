<?php
Eliminar($_GET['ID']);
function Eliminar($ID)
{
    $Tabla = "PRUEBA";
    include("db.php");
    $sentencia = "DELETE FROM $Tabla WHERE ID = $ID";
    $resultado = oci_parse($conexion, $sentencia);
    oci_execute($resultado);
    if (!$resultado) {
        echo "<script>alert('Fallo al Eliminar');</script>";
    };
}
?>
<script type="text/javascript">
    //alert("Registro Eliminado");
    window.location.href = 'menu.php';
</script>