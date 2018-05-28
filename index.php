<<<<<<< HEAD
<?php 
  session_start();
  $tipoUsuario = $_SESSION['tipoUsuario'];
  header('Location:vista/principal.php');
?>
=======
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="HearColors - UNAM">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="common/css/main.css"/>

    <title>Inicio | SobreRuedas</title>

    <!-- Bootstrap core CSS -->
    <link href="common/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <link href="common/css/fa-svg-with-js.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="common/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Script de FontAwesome -->
    <script src="common/js/fontawesome-all.min.js"></script>
  </head>

<body>

<div class="container cont-white">
  <div class="row contenedor-superior">
    <div class="col-md-6">
      <img class="img-responsive img-logo" src="img/logo.png">
    </div>
    <div class="col-md-6 text-right contenedor-letras">
      
      <div class="btn-group" role="group" aria-label="...">
        <button class="btn btn-letra btn_aumento_letra" type="button" aria-live="assertive" aria-describedby="desc_letra" role="alert" aria-label="Aumento de letra">A+</button>
        <button class="btn btn-letra btn_decremento_letra" type="button" aria-live="assertive" aria-describedby="desc_letra" role="alert" aria-label="Decremento de letra">A-</button>
      </div>

    </div>
  </div>
</div>
<!-- Barra de navegación -->
<nav class="navbar container navbar-iap">

    <div id="navbar" class="collapse navbar-collapse">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="col-7"></div>
					<div class="collapse navbar-collapse justify-content-end" id="navbar">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Carrito</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Artículos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="autenticar.php">Ingresar</a>
							</li>
						</ul>
					</div>
    </div><!--/.nav-collapse -->

</nav>
<!-- Barra de navegación -->




<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">

    <div class="row slider">
      <div class="contenedor-carrusel">
        <img src="img/1.jpg" class="img-carrusel element_carrusel_1 carrusel-active" alt="img 1">
        <img src="img/3.jpg" class="img-carrusel element_carrusel_2" alt="img 2">
        <img src="img/4.jpg" class="img-carrusel element_carrusel_3" alt="img 3">
        <img src="img/2.jpg" class="img-carrusel element_carrusel_4" alt=" img 4">
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
    <!-- LA ORGANIZACION -->
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

    <!-- Clasificación/deportes -->
    <div id="deportes" class="row contenedor-deportes">

      <div class="col-md-12 text-center">
        <h1 class="title_white">Deportes</h1>
      </div>

      <div class="col-md-12">
          <div class="row ">
              <div class="col-md-6 ">
                <a href="./accesibilidad.html" class="img-servicio-access patinaje text-center">
                  <h2>Patinaje</h2>
                </a>
              </div>

              <div class="col-md-6">
                <a href="./capacitacion.html" class="img-servicio-access skate text-center">
                  <h2>Skateboard</h2>
                </a>
              </div>
          </div>
          <div class="row separador">
              <div class="col-md-6">
                <a href="./imprenta.html" class="img-servicio-access moto text-center">
                  <h2>Motociclismo</h2>
                </a>
              </div>

              <div class="col-md-6">
                <a href="./libro.html" class="img-servicio-access bici text-center">
                  <h2>Ciclismo</h2>
                </a>
              </div>
            </div>
      </div>
    </div>






  </div>
</section>


<footer>

  <div class="footer-superior">
    <div class="container f-superior">
      
      <div class="row">
        <div class="col-md-6">
			<h3>Créditos</h3>
				<p>Daniela Camacho Garduño</p>
				<p>García Martínez Carlos Armando</p>  
		</div>
        <div class="col-md-6 text-right">
          <img src="./img/japdf.png" class="img-footer" alt="Junta de Asistencia Privada del Distrito Federal">
        </div>
      </div>

    </div>
  </div>

  <div class="footer-inferior">
    <div class="container f-inferior">
      <div class="row">
        <div class="col-md-2 col-md-offset-10 text-right">

          <div class="btn-toolbar " role="toolbar" aria-label="Redes sociales">
            <div class="btn-group btn-social" role="group" aria-label="Facebook">
              <a href="https://www.facebook.com/Sobre-Ruedas-172691316705792/"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="btn-group btn-social" role="group" aria-label="Twitter">
              <a href="#face"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="btn-group btn-social" role="group" aria-label="Whatsapp">
              <a href="#face"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="btn-group btn-social" role="group" aria-label="Instagram">
              <a href="#face"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="common/jquery/jquery-3.3.1.js"></script>
<script src="common/js/bootstrap.min.js"></script>
<script src="common/js/main.js"></script>
</body>
</html>
>>>>>>> 58703a271408499a1c251f6a6f0a32f05faf68a3
