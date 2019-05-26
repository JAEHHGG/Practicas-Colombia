<?php
$conexion = mysqli_connect("192.168.0.9", "server", "server", "Registro");
if (!$conexion) {
    echo 'Error de conexión en la base de datos'
}
else {
    echo 'Conexión exitosa a la base de datos'
}
