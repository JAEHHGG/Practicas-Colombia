<?php

include 'Conexion.php';

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$repetir = $_POST["repetir"];
$documento = $_POST["documento"];

$insertar = "INSERT INTO Usuario(nombres, apellidos, correo, contraseña, repetir, documento) VALUES ('$nombres', '$apellidos', '$correo', '$clave', '$repetir', '$documento')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error de registro';
} else {
    echo 'Registro exitoso';
}

mysqli_close($conexion);
?>


