<?php
$User = "TRABAJO";
$Password = "123456789";
$conexion = oci_connect("$User", "$Password");
if (!$conexion) {
$m = oci_error();
echo $m['message'], "n";
exit;
} else {
//echo "Conexión con éxito a Oracle!"; 
}
