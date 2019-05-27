<?php

$conexion mysqli_connect("localhost", "server", "server", "Registro");
if (!$conexion) {
    echo 'Error de conexión';
}
else {
    echo 'Exito';
}

?>

