<?php

include 'Conexion.php';

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$repetir = $_POST["repetir"];
$documento = $_POST["documento"];

$insertar = "INSERT INTO Usuario(nombres, apellidos, correo, contraseña, repetir, documento) VALUES ("$nombres", "$apellidos", "$correo", "$contraseña", "$repetir", "$documento")";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error de registro';
} else {
    echo 'Registro exitoso';
}

mysqli_close($conexion);
?>


