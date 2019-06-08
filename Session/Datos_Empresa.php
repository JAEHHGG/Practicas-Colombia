<?php

include 'Conexion_Empresa.php';

$empresa = $_POST["empresa"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$direccion = $_POST["direccion"];

$insertar = "INSERT INTO Empresa(empresa, telefono, correo, clave, direccion) VALUES ('$empresa', '$telefono', '$correo', '$clave', '$direccion')";

$verificar_empresa = mysqli_query($conexion, "SELECT * FROM Empresas WHERE empresa = '$empresa'");
if (mysqli_num_rows($verificar_empresa) > 0) {
    echo '<script>
         alert("La Empresa ya se encuentra registrada");
         window.history.go(-1);
         </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM Empresas WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
         alert("El correo ya se encuentra registrado");
         window.history.go(-1);
         </script>';
    exit;
}

$verificar_direccion = mysqli_query($conexion, "SELECT * FROM Empresas WHERE direccion = '$direccion'");
if (mysqli_num_rows($verificar_direccion) > 0) {
     echo '<script>
         alert("Esta dirección ya se encuentra registrada");
         window.history.go(-1);
         </script>';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>
         alert("Error de registro");
         window.history.go(-1);
         </script>';
} else {
    echo '<script>
         alert("Registro exitoso");
         window.history.go(-1);
         </script>';
}

mysqli_close($conexion);

?>
