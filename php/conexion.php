<?php
$server ="localhost";
$nameDB="carrito";
$user="root";
$passwd="";
$conexion = new mysqli($server,$user,$passwd,$nameDB);
if($conexion -> connect_error){
    die("No se pudo conectar");
}
?>