<!DOCTYPE html>
<html lang="es">
  <head>
    <?php
    include 'links.php'
    ?>
    <title>INICIO SESIÓN</title>
  </head>

<body>

<?php 
include 'encabezado.php'
?>

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
          <a class="nav-link" href="altaUsuario.php">REGISTRATE</a>
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
      <div class="col-md-offset-3 col-md-6">
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
            <button type="submit" class="btn btn-carrusel col-md-offset-5 col-md-2" name="enviar">Enviar</button>
          </fieldset>
        </form>
      </div>
    </div>    
  </div>
</section>

<?php
include 'footer.php'
?>
  
  
<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>
