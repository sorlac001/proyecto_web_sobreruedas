<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="HearColors - UNAM">
    <link rel="icon" href="../../../favicon.ico">
    <link rel="stylesheet" href="../common/css/main.css"/>
    <link href="../common/css/bootstrap.min.css" rel="stylesheet">
    <link href="../common/css/fa-svg-with-js.css" rel="stylesheet">
    <link href="../common/css/main.css" rel="stylesheet">
    <script src="../common/js/fontawesome-all.min.js"></script>
    <title>Inicio | SobreRuedas</title>
  </head>

<body>

<div class="container cont-white">
  <div class="row contenedor-superior">
    <div class="col-md-6">
      <a href="index.php" aria-label="ir a la pagina de inicio"><img class="img-responsive img-logo" src="../img/logo.png"></a>
    </div>
    <div class="col-md-6 text-right contenedor-letras">
      
      <div class="btn-group" role="group" aria-label="...">
        <button class="btn btn-letra btn_aumento_letra" type="button" aria-live="assertive" aria-describedby="desc_letra" role="alert" aria-label="Aumento de letra">A+</button>
        <button class="btn btn-letra btn_decremento_letra" type="button" aria-live="assertive" aria-describedby="desc_letra" role="alert" aria-label="Decremento de letra">A-</button>
      </div>

    </div>
  </div>
</div>

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
        <li>
          <a href="#organizacion">LA ORGANIZACIÓN</a>
        </li>
        <li>
          <a href="#deportes">DEPORTES</a>
          </li>
        <?php 
          switch($tipo_usuario){
            case 1: echo '
              <li class="nav-item">
                <a class="nav-link" href="#">CARRITO</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">MIS DATOS</a>
                  <a class="dropdown-item" href="compras.php">MIS COMPRAS</a>
                  <a class="dropdown-item" href="../control/cerrarSesion.php">CERRAR SESI&Oacute;N</a>
                </div>
              </li>';
              break;
              
            case 2: echo '
              <li class="nav-item">
                <a class="nav-link" href="administracion.php">USUARIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionarMarcas.php">MARCAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../control/cerrarSesion.php">CERRAR SESI&Oacute;N</a>
              </li>';
              break;
            case 3: echo '
              <li class="nav-item">
                <a class="nav-link" href="gestionarMochilas.php">GESTIONAR ARTICULOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../control/cerrarSesion.php">CERRAR SESI&Oacute;N</a>
              </li>';
                break;
            default: echo '
              <li class="nav-item">
                <a class="nav-link" href="login.php">INICIAR SESIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.php">REGISTRATE</a>
              </li>';
              break;
          }
        ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>




<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">

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
    <!-- LA ORGANIZACION -->
    <div id="organizacion" class="row contenedor-organizacion">
      <div class="col-md-7 col-md-offset-4">
        <div class="page-header">
          <h1>¿Quienes somos?</h1>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <img src="../img/logo_min.png" class="img-lateral" alt="">
      </div>
      <div class="col-md-7">
        <p>
          “Sobre ruedas” es una empresa mexicana de nueva creación amante de los deportes extremos, comprometida y dedicada a comercializar productos de la más alta calidad diseñados para deportistas apasionados, que necesitan productos que los acompañen en sus aventuras día con día, por que sabemos que sobre ruedas no hay límites.
        </p>
      </div>
    </div>
    <!-- Clasificación/deportes -->
    <div id="deportes" class="row contenedor-deportes">
      <div class="col-md-12 text-center">
        <h1 class="title_white">DEPORTES</h1>
      </div>
      <div class="col-md-12">
          <div class="row ">
              <div class="col-md-6 ">
                <a href=".././accesibilidad.html" class="img-servicio-access text-center">
                  <h2>PATINAJE</h2>
                </a>
              </div>

              <div class="col-md-6">
                <a href=".././capacitacion.html" class="img-servicio-access text-center">
                  <h2>SKATEBOARD</h2>
                </a>
              </div>
          </div>
          <div class="row separador">
              <div class="col-md-6">
                <a href=".././imprenta.html" class="img-servicio-access text-center">
                  <h2>MOTOCICLISMO</h2>
                </a>
              </div>
              <div class="col-md-6">
                <a href=".././libro.html" class="img-servicio-access text-center">
                  <h2>CICLISMO</h2>
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
          <h3>CONTACTO</h3>
          <a class="contacto-enlace" href="tel: //55194512">(55)55194512</a>
          <br />
          <a class="contacto-enlace" href="tel: //55383010">(55)55383010</a>
          <br />
          <br />
          <a class="contacto-enlace" href="mailto:contacto@sobreruedas.com">contacto@sobreruedas.com</a>
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
              <a href="https://www.facebook.com/S0breRuedas/"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="btn-group btn-social" role="group" aria-label="Twitter">
              <a href="https://twitter.com/submaro_77"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="btn-group btn-social" role="group" aria-label="Instagram">
              <a href="https://www.instagram.com/carlos_garcia_up/"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>