<?php
	Registrar($_POST['nombre'], $_POST['contraseña']);
	function Registrar($nombre, $contraseña)
	{
		include 'db.php';
        $Tabla="PRUEBA";
    $sentencia= "INSERT INTO $Tabla (ID, NOMBRE, CONTRASENA) VALUES ('','$nombre','$contraseña')";
        $resultado= oci_parse($conexion, $sentencia);
		oci_execute($resultado);
        if (!$resultado) {
            echo "<script>alert('Fallo al Registrar Datos');</script>";
        };
	}
?>
<script type="text/javascript">
	//alert("Dato Ingresado Exitosamante!");
	window.location.href='menu.php';
</script>