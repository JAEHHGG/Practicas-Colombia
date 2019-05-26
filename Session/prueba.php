$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$repetir-contraseña = $_POST['repetir-contraseña'];
$documento = $_POST['documento'];

$insertar = "INSERT INTO Usuario(nombres, apellidos, email, contraseña, repetir-contraseña, documento) VALUES ('nombres', 'apellidos', 'email', 'contraseña', 'repetir-contraseña', 'documento')";

$resultado = mysqli_query($conexion, $insertar);
if (!resultado) {
    echo 'Error de registro';
} else {
    echo 'Registro exitoso';
}

mysqli_close($conexion);
