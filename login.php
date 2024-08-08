<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chispatron-blog</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="icon" href="./img/icono.png">
</head>
<body>
    <div class="container">
        <form id="loginForm">
          <div class="form-group">
            <h1>¡Bienvenido!</h1>
            <br>
            <input type="text" id="username" name="username" required placeholder="Usuario">
            <input type="password" id="password" name="password" required placeholder="Contrasena">
          <button type="submit" onclick="login()">Iniciar sesión</button>
          <p>¿No tienes cuenta?<a href="registro.html"> Crear cuenta</a></p>
        </div>
        </form>
      </div>
      <script src="Login.js"></script>
      <?php include ('/datos_sesion.php'); ?>
</body>
</html>