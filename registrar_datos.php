<?php

    include("conexion.php");

    if(isset($_POST['register'])) {
        if(strlen($_POST['name']) > 1 &&
           strlen($_POST['mail']) > 1 &&
           strlen($_POST['password']) > 1 &&
           strlen($_POST['password2']) > 1) {
            
            if($_POST['password'] === $_POST['password2']) {
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $password = $_POST['password'];
                $registro = "INSERT INTO `inicio_sesión`(`nombre`, `gmail`, `contraseña`) VALUES ('$name','$mail','$password')";
                $resultado = mysqli_query($conex,$registro);
                if($resultado){    
                    echo "Usuario registrado exitosamente";
                }
            } else {
                echo "Las contraseñas no coinciden";
            }
        } else {
            echo "Por favor, complete todos los campos";
        }
    }    

?>