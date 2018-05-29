<?php
	session_start();
	$tipoUsuario = $_SESSION['tipoUsuario'];
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
		include 'links.php'
		?>
		<title>Inicio | SobreRuedas</title>
	</head>
	<body>
	
	<!-- Encabezado -->
		<?php
		include 'encabezado.php'
		?>
	<!-- Fin encabezado -->			
	
			<!-- Barra de navegación -->
			<nav class="navbar ">
				<div class="container navbar-iap">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right navbar-menu-iap">
							<li><a href="#organizacion">LA ORGANIZACIÓN</a></li>
							<?php 
							  switch($tipoUsuario){
							  	/*ADMINISTRADOR*/
								case 1: echo '
								  <li class="nav-item">
									<a class="nav-link" href="gestionarArticulo.php">GESTIONAR ARTICULOS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="gestionarUsuario.php">GESTIONAR USUARIOS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="gestionarMarca.php">GESTIONAR MARCAS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="../controlador/logout.php">CERRAR SESI&Oacute;N</a>
								  </li>';
								  break;
								/*VENTA*/  
								case 2: echo '
								  <li class="nav-item">
									<a class="nav-link" href="gestionarArticulo.php">GESTIONAR ARTICULOS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="gestionarMarca.php">GESTIONAR MARCAS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="../controlador/logout.php">CERRAR SESI&Oacute;N</a>
								  </li>';
								  break;
								/*CLIENTE*/
								case 3: echo '
								  <li class="nav-item">
									<a class="nav-link" href="catalogoArticulo.php">VER ARTICULOS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">CARRITO</a>
								  </li>
								  <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									  <a class="dropdown-item" href="#">MIS DATOS</a>
									  <a class="dropdown-item" href="compras.php">MIS COMPRAS</a>
									  <a class="dropdown-item" href="../controlador/logout.php">CERRAR SESI&Oacute;N</a>
									</div>
								  </li>';
									break;
								/*SIN REGISTRO*/
								default: echo '
								  <li class="nav-item">
									<a class="nav-link" href="catalogoArticulo.php">VER ARTICULOS</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="login.php">INICIAR SESIÓN</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="altaUsuario.php">REGISTRATE</a>
								  </li>';
								  break;
							  }
							?>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Fin barra de navegación -->
	<!-- Contenido principal -->
	<section class="contenido-principal">
		<div class="container cont-white">
		
		<!-- Carrusel -->		
			<div class="row slider">
			  <div class="contenedor-carrusel">
				<img src="../img/1.jpg" class="img-carrusel element_carrusel_1 carrusel-active" alt="img 1">
				<img src="../img/3.jpg" class="img-carrusel element_carrusel_2" alt="img 2">
				<img src="../img/4.jpg" class="img-carrusel element_carrusel_3" alt="img 3">
				<img src="../img/2.jpg" class="img-carrusel element_carrusel_4" alt="img 4">
			  </div>

			  <div class="col-md-12 text-center contenedor-btn-carrusel">

				<div class="btn-group" role="group" aria-label="Controles del carrusel de imagenes">
				  <button type="button" class="btn btn-carrusel control_carrusel" data-target="pausa">Pausar</button>
				  <button type="button" class="btn btn-carrusel control_carrusel_1 active" data-target="1">1</button>
				  <button type="button" class="btn btn-carrusel control_carrusel_2" data-target="2">2</button>
				  <button type="button" class="btn btn-carrusel control_carrusel_3" data-target="3">3</button>
				  <button type="button" class="btn btn-carrusel control_carrusel_4" data-target="4">4</button>
				</div>
			  </div>
			</div>
		<!-- Fin Carrusel -->			
		
		<!-- La organización -->
			<div id="organizacion" class="row contenedor-organizacion">
			  <div class="col-md-7 col-md-offset-4">
				<div class="page-header">
				  <h1>Sobre Ruedas</h1>
				</div>
			  </div>
			  <div class="col-md-4 text-center">
				<img src="./img/logo_min.png" class="img-lateral" alt="">
			  </div>
			  <div class="col-md-7">
				<h2>¿Quienes somos?</h2>
				<p>
				  “Sobre ruedas” es una empresa mexicana de nueva creación dedicada a comercializar productos diseñados para asistir a deportistas apasionados que necesitan accesorios que los acompañen en sus aventuras del día a día
				  <br>
				  <br>
				  Esta empresa es amante de los deportes extremos y está comprometida con traer a sus clientes productos de la más alta calidad, por que sabemos que sobre ruedas no hay límites.
				  <br>
				  <br>
				</p>
			  </div>
			</div>
		<!-- Fin La organización -->
		</div>
	</section>
	<!-- FinContenido principal -->	
	
<!-- Pie -->
	<?php
	include './footer.php'
	?>
<!-- Fin Pie -->
<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>
