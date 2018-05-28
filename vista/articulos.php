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
 
            <main>
                <div class="row">
                <?php
                    include '../model/conexion.php';
                    $con = conectar();
                    $query=("SELECT imagen,nombre,idarticulo FROM mochilas");
                    $res=pg_query($con,$query);
                    while ($f=pg_fetch_array($res)) {
                    ?>
                        <div class="productoArticulo col-4">
                            <div class="card">
                              <img class="card-img-top" src="../img/<?php echo $f['imagen'];?>" alt=""/>
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $f['nombre']?></h5>
                                <p class="card-text"></p>
                                <a href="articulo.php?articulo=<?php echo $f['idarticulo']?>" class="btn btn-primary">Detalles</a>
                              </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
                </div>
            </main>


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
          <a class="contacto-enlace" href="mailto:contacto@sobreruedas.com">contacto@sobreruedas.com</a>
        </div>
        <div class="col-md-6 text-right">
          <img src="../img/japdf.png" class="img-footer" alt="Junta de Asistencia Privada del Distrito Federal">
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
              <a href="https://www.facebook.com/Sobre-Ruedas-172691316705792/?modal=admin_todo_tour"><i class="fab fa-facebook-f"></i></a>
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






