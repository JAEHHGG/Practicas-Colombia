<?php

session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
// *Con include, se incluye dentro del archivo Datos.php el archivo Conexion.php que es la conexión a la base de datos.
include 'Conexion.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		 <!-- +++++++++++ -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Colocamos la etiqueta title para dar titulo a la pagina -->
		<title>Login</title>
		<!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="../Img/LogotipoPracticasColombia.ico" >
		<!--Bootstrap nav-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/LoginCss.css">
		<link rel="stylesheet" href="../css/Styles2.css">
	</head>

	<body>
		<!-- Barra de Navegación -->
		<nav class="navbar navbar-expand-lg fixed-top ">
			<a class="navbar-brand" href="#"> <img src="../Img/LogotipoPracticasColombia.ico" width="50px" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav mr-4">
					<li class="nav-item">
						<a class="nav-link" data-value="about" href="../Index.php">Inicio</a> </li>
					<li class="nav-item">
						<a class="nav-link " data-value="portfolio" href="../Readme.php">Acerca de</a>
						</li>
					<li class="nav-item">
						<a class="nav-link " data-value="team" href="../EquipoDeTrabajo.php">Equipo</a>
						</li>
					 <li class="nav-item">
						<a class="nav-link " data-value="blog" href="../License.php">Licencia</a>
						</li>
					<li class="nav-item">
						<a class="nav-link " href="mailto:atencionalusuario@practicascolombia.com">Contacto</a>
						</li>
				</ul>
			</div>
		</nav>

    	<div class="modal-dialog text-center">
			<div class="col-sm-8 main-section">
				<div class="modal-content">
					<div class="col-12 user-img">
						<img src="../Img/LogotipoPracticasColombia.ico" alt="Logo Prácticas Colombia">
							<form action="Datos_Login.php" class="col-12" method="post" onsubmit="return validar();">
							<div class="form-group">
								<input id="correo" type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
							</div>
							<div class="form-group">
								<input id="clave" type="password" name="clave" class="form-control" placeholder="Contraseña" required>
							</div>
							<button type="submit" name="submit" class="btn"><i class="fas"></i>ENVIAR</button>
							</form>
						<div class="col-12 forgot">
							<h10>¿Aún no estas registrado?</h10>
							<a href="Registro_Empresa.php">Registrate</a>
						</div>
					</div>
				</div> <!--Final del Modal Content-->
			</div>
    	</div>
		<script src="js/login.js" type="text/javascript"></script>

			<!-- Footer -->
		<footer>
			<div class="container-fluid padding">
				<div class="row text-center">
					<div class="col-md-4">
						<hr class="light">
						<h5>PERSONAS</h5>
						<hr class="light">
						<p>Registro</p>
						<p>Hoja de Vida</p>
						<p>Salario</p>
						<p>Ofertas</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>EMPRESAS</h5>
						<hr class="light">
						<p>Registro</p>
						<p>Publicar oferta</p>
						<p>Temporales de empleo</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>NOTICAS</h5>
						<hr class="light">
						<p>Empleos</p>
						<p>Mundo actual</p>
						<p>Tendencias laborales</p>
						<p>Otras noticias</p>
					</div>
					<div class="col-12">
						<hr class="light">
						 <h10> COPYRIGHT © 2019 Practicas Colombia S.A.S Prohibida su reproducción total o parcial, así como su traducción a cualquier idioma sin autorización escrita de su titular. PracticasColombia es un producto de Practicas Colombia S.A.S. Nit. 830456789. Aviso de privacidad</h10>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>
