<?php
session_start();
ConsultarUsuario($_POST['nombre'], $_POST['password']);
function ConsultarUsuario($nombre, $password)
{
    $tabla = "PRUEBA";
    include("db.php");
    //Btn Enviar
    if (isset($_POST["btn-enviar"])) {
        $query = "SELECT * FROM $tabla WHERE NOMBRE='$nombre' AND CONTRASENA='$password'";
        $result = oci_parse($conexion, $query);
        oci_execute($result);
        $fetch = oci_fetch($result); //Uso el fetch ekisd
        if ($fetch == 1) {
            $_SESSION['nombre'] = $nombre;
            echo "<script>";
            echo "alert('Bienvenido $nombre');";
            echo "window.location.href='menu.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Datos de acceso incorrectos');";
            echo "window.location.href='index.php';";
            echo "</script>";
        }
    }
    //Boton Registrar
    if (isset($_POST['btn-register'])) {
        $query = "INSERT INTO $tabla(ID,NOMBRE,CONTRASENA) VALUES ('','$nombre','$password')"; //Es Autoincremental usando un Trigger
        $result = oci_parse($conexion, $query);
        oci_execute($result);
        if ($result) {
            echo "<script>";
            echo "alert('$nombre ha sido Registrado');";
            echo "window.location.href='index.php';";
            echo "</script>";
        } else {
            echo "<script>alert('Fallo al registrar');</script>";
        }
    }
}
