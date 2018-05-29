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
    <title>Registro usuario</title>
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
          <a class="nav-link" href="login.php">INICIAR SESIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../registro.php"></a>
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
            <legend class="text-center">REGISTRO USUARIO</legend>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required/>
            </div>
            <div class="form-group">
              <label for="aPaterno">Apellido Paterno</label>
              <input type="text" class="form-control" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno" required/>
            </div>
            <div class="form-group">
              <label for="aMaterno">Apellido Materno</label>
              <input type="text" class="form-control" id="aMaterno" name="aMaterno" placeholder="Apellido Materno"/>
            </div>
            <div class="form-group">
              <label for="usuario">Correo</label>
              <input type="mail" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com" required/>
            </div>
            <div class="form-group">
              <label for="usuario">Telefono</label>
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" required/>
            </div>
            <div class="form-group">
              <label for="usuario">Nombre de usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required/>
            </div>
            <div class="form-group">
              <label for="contrasena">Contrase&ntilde;a</label>
              <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contrasenia" required/>
            </div>
            <?php
            switch($tipoUsuario){
              case 1:
                /*administrador*/
                echo '
                <div class="form-group">
                <label for="idTipoUsuario">Tipo de usuario</label>
                <select name="idTipoUsuario">
                <option value="1">Administrador</option>
                <option value="2">Venta</option>
                <option value="3">Cliente</option>
                </select>
                </div>';
                break;
              case 2:
                /*venta*/
                echo'<script type="text/javascript"> window.location.href = "../index.php"; </script>';
                break;
              case 3:
                /*cliente*/
                echo'
                <div style="display:none;" class="form-group">
                <label for="idTipoUsuario">Tipo de usuario</label>
                <input type="id" name="idTipoUsuario" value="3" placeholder="cliente" readonly required />
                </div>';
                break;
            }
            ?>
            <button type="submit" class="btn btn-carrusel col-md-offset-5 col-md-2" name="enviar">Enviar</button>
          </fieldset>
        </form>
      </div>
    </div>    
  </div>
</section>

<?php
include'footer.php'
?>  
  
<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>
