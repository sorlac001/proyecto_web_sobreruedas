<!DOCTYPE html>    <!-- Bootstrap core CSS -->
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
          <a href="index.php">INICIO</a>
        </li>
        <li>
          <a href="registro.php">REGISTRATE</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>




<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">
    <!-- LA ORGANIZACION -->
    <div id="organizacion" class="row contenedor-organizacion">
      <div class="col-md-8 col-md-offset-4">
        <div class="formulario">
          <form action="autenticar.php" method="post">
            <fieldset>
              <legend>Introduzca su información de registro</legend>
              
              <label for="usuario">Usuario: </label>
              <input type="text" name="usuario" autocomplete="off">
              <br />
              <br />
              <label for="contra">Contrase&ntilde;a:</label><input type="password" name="contra" autocomplete="off">
              <br />
              <br />
              <input class="boton" type="submit" value="Ingresar">
            </fieldset>
          </form>
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
                <a href="#face"><i class="fab fa-facebook-f"></i></a>
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


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="common/jquery/jquery-3.3.1.js"></script>
<script src="common/js/bootstrap.min.js"></script>
<script src="common/js/main.js"></script>
</body>
</html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="HearColors - UNAM">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="common/css/main.css"/>

    <title>Inicio Sesion</title>

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
          <a href="index.php">INICIO</a>
        </li>
        <li>
          <a href="registro.php">REGISTRATE</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>




<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">
    <!-- LA ORGANIZACION -->
    <div id="organizacion" class="row contenedor-organizacion">
      <div class="col-md-8 col-md-offset-4">
        <div class="formulario">
          <form action="autenticar.php" method="post">
            <fieldset>
              <legend>Introduzca su información de registro</legend>
              
              <label for="usuario">Usuario: </label>
              <input type="text" name="usuario" autocomplete="off">
              <br />
              <br />
              <label for="contra">Contrase&ntilde;a:</label><input type="password" name="contra" autocomplete="off">
              <br />
              <br />
              <input class="boton" type="submit" value="Ingresar">
            </fieldset>
          </form>
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
                <a href="#face"><i class="fab fa-facebook-f"></i></a>
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


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="common/jquery/jquery-3.3.1.js"></script>
<script src="common/js/bootstrap.min.js"></script>
<script src="common/js/main.js"></script>
</body>
</html>
