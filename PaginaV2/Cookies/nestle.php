<!DOCTYPE html>
<html lang="en">

<head>

    <!--
    * En head encontramos todos los cdn y demás librerias que incluyen varias funcionalidades:
    * Jquery version 3.3.1
    * Bootstrap 4.3.1 & 4.3.1
    * Fontawesome 5.7.2
    * Materialize 1.0.0
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

     <!-- Barra de Navegación que nos proporciona varias obciones de modificación con bootstrap y permite una gran variedad de clases que se adecuan a las preferencias de las personas -->

    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="#">PC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#licencia_">Inicio</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#readme_">Acerca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#acercade_">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#equipo_">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#contacto_">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>

    <!--
    * Imagen que representa el logo de cada una de las empresas disponibles por prácticas colombia.
    * Clase referenciada en estilos: 'imagenes'.
    * Alt: depende de la empresa: Logo de
    -->
    <div>
        <img class="imagenes" src="img/nestle.png" alt="Logo de Nestle">
    </div>

    <br>
    <br>

    <!--
    * En este link, se direcciona al archivo: 'eliminar_cookie.php' donde se eliminará la cookie almacenada.
    * Archivo Referenciado: 'eliminar_cookie.php'.
    -->
    <center>
        <p>
            <a href="eliminar_cookie.php">Eliminar Cookie</a>
        </p>
    </center>

</body>

</html>
