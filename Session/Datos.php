<?php

include 'Conexion.php';

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$repetir = $_POST["repetir"];
$documento = $_POST["documento"];

$insertar = "INSERT INTO Usuario(nombres, apellidos, correo, clave, repetir, documento) VALUES ('$nombres', '$apellidos', '$correo', '$clave', '$repetir', '$documento')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM Usuario WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo 'El correo ya se encuentra registrado';
    exit;
}

$verificar_documento = mysqli_query($conexion, "SELECT * FROM Usuario WHERE documento = '$documento'");
if (mysqli_num_rows($verificar_documento) > 0) {
    echo 'El documento ya se encuentra registrado';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error de registro';
} else {
    echo 'Registro exitoso';
}

mysqli_close($conexion);

?>


