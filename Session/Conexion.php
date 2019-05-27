<?php

$host = 'localhost';
$user = 'server';
$password = 'server';
$db = 'Registro';

$conexion = new mysqli($host, $user, $password, $db);
if ($conexion -> connect_errno){
    echo 'Error de conexión con la base de datos';
}else{
    echo 'Conexión exitosa';
}

?>
