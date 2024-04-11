<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "contacto_sitio";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if($conexion->connect_error){
    echo("Error al conectar a la bd".$conexion->connect_error);
}else{
    echo "";
}

?>