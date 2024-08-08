<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chispatron-blog</title>
    <link rel="stylesheet" type="text/css" href="./css/registro.css">
    <link rel="icon" href="./img/icono.png">
</head>
<body>
    <section class="form-register">
        <form id="loginForm" method="POST">
            <h4>Crear cuenta</h4>
            <input class="controls" type="text" name="name" id="nombres" placeholder="Ingrese su nombre de usuario">
            <input class="controls" type="email" name="mail" id="correo" placeholder="Ingrese su Correo">
            <input class="controls" type="password" name="password" id="contraseña1" placeholder="Ingrese una contraseña">
            <input class="controls" type="password" name="password2" id="contraseña2" placeholder="Ingrese nuevamente la contraseña">
            <p>Estoy de acuerdo con <a href="tym.html">Terminos y Condiciones</a></p>
            <button type="submit" name="register" id="button">Registrarse</button>
        </form>
      </section>
        <?php
        include("registrar_datos.php");
        ?>
</body>
</html>