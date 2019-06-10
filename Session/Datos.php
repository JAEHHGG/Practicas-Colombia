<?php

// *Con include, se incluye dentro del archivo Datos.php el archivo Conexion.php que es la conexión a la base de datos.
include 'Conexion.php';

/**
 *Se da nombre a todas las variables y por el metodo POST se traen del archivo Registro.php que está referenciado en el form y de acuerdo a cada uno de sus name.
 *Metodo de envío: POST
 *Variables: nombres, apellidos, correo, clave, repetir, documento con el respectivo signo $.
**/

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$repetir = $_POST["repetir"];
$documento = $_POST["documento"];

/**
 *En este apartado se nombra una variable y con INSERT INTO se llaman los nombres dados en la base de datos y de la table Usuario y se le da los valores con VALUES de cada una de las variables previamente hechas.
 *Nombres dado en la tabla Usuario de la base de datos: nombres, apellidos, correo, clave, repetir, documento
 *Variables: nombres, apellidos, correo, clave, repetir, documento con el respectivo signo $.
**/
$insertar = "INSERT INTO Usuario(nombres, apellidos, correo, clave, repetir, documento) VALUES ('$nombres', '$apellidos', '$correo', '$clave', '$repetir', '$documento')";

/**
*La variable $verificar_correo busca mediante mysqli_querry aquellos correos repetidos en la tabla Usuario de la base de datos, con el fin de que no se guarden correos repetidos. mysqli_num_rows, busca si hay filas repetidas.
*Variable: $verificar_correo
**/
$verificar_correo = mysqli_query($conexion, "SELECT * FROM Usuario WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
         alert("El correo ya se encuentra registrado");
         window.history.go(-1);
         </script>';
    exit;
}

/**
*La variable $verificar_documento busca mediante mysqli_querry aquellos documentos repetidos en la tabla Usuario de la base de datos, con el fin de que no se guarden datos repetidos. mysqli_num_rows, busca si hay filas repetidas.
*Variable: $verificar_correo
**/
$verificar_documento = mysqli_query($conexion, "SELECT * FROM Usuario WHERE documento = '$documento'");
if (mysqli_num_rows($verificar_documento) > 0) {
     echo '<script>
         alert("El documento ya se encuentra registrado");
         window.history.go(-1);
         </script>';
    exit;
}

/**
*La variable $resultado, mediante mysqli_query, mira si hay errores en la inserción de los datos en la base de datos.
**/
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

// *Se cierra la conexión
mysqli_close($conexion);

?>
