<?php
	session_start();
	$tipoUsuario = $_SESSION['tipoUsuario'];

	if($tipo_usuario != 1){
		header('Location:../index.php');
	}
?>
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
    <title>Gestion de marcas</title>
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
          <a href="principal.php">INICIO</a>
        </li>
        <?php 
          switch($tipoUsuario){
            /*Administrador*/
            case 1: echo '
              <li class="nav-item">
                <a class="nav-link" href="gestionarUsuario.php">USUARIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionarVenta.php">VENTAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionarArticulo.php">ARTICULOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../control/cerrarSesion.php">CERRAR SESI&Oacute;N</a>
              </li>';
              break;
              
            case 2: echo '
              <li class="nav-item">
                <a class="nav-link" href="gestionarVenta.php">VENTAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gestionarArticulo.php">ARTICULOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../control/cerrarSesion.php">CERRAR SESI&Oacute;N</a>
              </li>';
              break;
            default: 
            	header('Location:../index.php');
            break;
          }
        ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<section class="contenido-principal">
  <div class="container cont-white">
    <!-- FORMULARIO -->
    <div id="formulario" class="row contenedor-formulario">
      <form class="needs-validation" action="../controlador/altaMarca.php" method="post">
        <fieldset>
          <legend class="centro">INGRESAR NUEVA MARCA</legend>
          <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="marca" required/>
          </div>
          <button type="submit" class="btn btn-carrusel" name="enviar">Enviar</button>
        </fieldset>
      </form>
    </div>
    <div id="marcasRegistradas" class="row contenedor-marcasRegistradas">
      <div class = "col">
      	<h2>Marcas Registradas</h2>
      	<table class="table table-striped">
      	  <thead>
      	  	<tr>
      	  	  <th scope="col">Nombre</th>
      	  	  <th scope="col">Modificar</th>
      	  	  <th scope="col">Eliminar</th>
      	  	</tr>
      	  </thead>
      	  <tbody>
  	      <?php
  	      include_once('../modelo/conexion.php');
  	      $con = aConectar();
  	      $query=("SELECT idMarca,nombre FROM marca");
  	      $res=pg_query($con,$query);
  	      while ($a=pg_fetch_array($res)) {
  	      ?>
      	    <tr>
      	      <form action="../controlador/modificarMarca.php" method="post">
      	      	<td>
      	      	  <input type = "text" placeholder="<?php echo $a['nombre']?>" name="nombre"/>
      	      	  <input name="idMarca" value="<?php echo $a['idMarca']?>" style="display:none;"/>
      	      	</td>
      	      	<td>
      	      	  <button type="submit" class="btn btn-carrusel" name="enviar">ENVIAR</button>
      	      	</td>
      	      </form>
      	      <td>
      	      	<a href="../control/bajaMarca.php?marca=<?php echo $a['idMarca']?>">ELIMINAR</a>
      	      </td>
      	    </tr>
		  <?php
		  }
		  ?>
		  </tbody>
		</table>
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
         <a class="contacto-enlace" href="tel: //5540318268">Carlos:(+52)5540318268</a>
         <br />
         <a class="contacto-enlace" href="tel: //5518377330">Daniela:(+52)5518377330</a>
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