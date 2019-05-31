<?php

$conexion = new mysqli("localhost", "server", "server", "Registro");
if (!$conexion) {
    echo 'Error de conexión';
}
else {
    echo 'Exito';
}

?>

