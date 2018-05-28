!DOCTYPE html>
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
          <a href="principal.php">PAGINA PRINCIPAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../registro.php">REGISTRATE</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">
    <!-- FORMULARIO -->
    <div id="FORMULARIO" class="row contenedor-formulario">
      <form class="needs-validation" action="../controlador/autenticar.php" method="post">
        <fieldset>
          <legend class="centro">INICIAR SESI&Oacute;N</legend>
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required/>
          </div>
          <div class="form-group">
            <label for="contrasena">Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contrasenia" required/>
          </div>
          <button type="submit" class="btn btn-carrusel" name="enviar">Enviar</button>
        </fieldset>
      </form>
    </div>    
  </div>
</section>

<footer>
  <div class="footer-superior">
    <div class="container f-superior">
      <div class="row">
        <div class="col-md-6">
          <h3>Contacto</h3>
          <a class="contacto-enlace" href="tel: //55194512" aria-label="contáctenos al teléfono +52 55 19 45 12">(55)55194512</a>
          <br />
          <a class="contacto-enlace" href="tel: //55383010" aria-label="contáctenos al teléfono +52 55 38 30 10">(55)55383010</a>
          <br />
          <br />
          <a class="contacto-enlace" href="mailto:patriciahernandez.discapacitaodvisualesiap@yahoo.com.mx">contacto@sobreruedas.com</a>
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
              <a href=""><i class="fab fa-twitter"></i></a>
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
<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>