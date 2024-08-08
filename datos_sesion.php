<?php
include("conexion.php");

if(isset($_POST['username_or_email']) && isset($_POST['password'])) {
    $nombre_usuario_o_correo = mysqli_real_escape_string($conex, $_POST['username_or_email']); // Escapar el valor del formulario para prevenir inyección SQL
    $password = mysqli_real_escape_string($conex, $_POST['password']); // Escapar el valor del formulario para prevenir inyección SQL
    
    $consulta = "SELECT * FROM `inicio_sesión` WHERE (nombre='$nombre_usuario_o_correo' OR gmail='$nombre_usuario_o_correo') AND contraseña='$password'";
    $resultado = mysqli_query($conex, $consulta);
    
    if(mysqli_num_rows($resultado) == 1) {
        // Usuario autenticado correctamente
        // Redireccionar a la página de inicio de sesión exitosa
        header("Location: inicio_exitoso.php");
        exit();
    } else {
        // Credenciales incorrectas
        // Redireccionar a la página de inicio de sesión con un mensaje de error
        header("Location: inicio_sesion.php?error=1");
        exit();
    }
} else {
    header("Location: inicio_sesion.php");
    exit();
}
?>
