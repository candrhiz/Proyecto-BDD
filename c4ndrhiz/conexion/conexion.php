<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="escuela";

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);

if ($conexion) {
    echo "CONEXION EXISTOSA";
}else {
    echo "ERROR DE CONEXION";
}
    
?>