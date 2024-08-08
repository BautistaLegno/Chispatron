<?php
// Verificar si hay un error en la URL
if(isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<p style='color:red;'>Credenciales incorrectas. Por favor, intenta de nuevo.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="datos_sesion.php" method="post">
        <input type="text" name="username_or_email" placeholder="Nombre de usuario o correo electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
