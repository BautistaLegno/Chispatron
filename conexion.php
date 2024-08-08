<?php

$conex = mysqli_connect ("127.0.0.1:3307","root","Promo24","pagina brazo");


if($conex){
    ?><script>console.log("conexion exitosa")</script>
    <?php
}else{

    ?><script>console.log("conexion fallida")</script>
    <?php
}

?>
