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
                <form class="needs-validation" method="post" action="../control/altaMochilas.php">
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la mochila" required>
                        </div>
                        <div class="form-group">
                            <label for="id_marca">Marca</label>
                            <select class="form-control" id="id_marca" name="id_marca">

                        <?php
                            include '../model/conexion.php';

                            $con = conectar();

                            $marca = ("SELECT id_marca,nombre_marca FROM marcas");

                            $guarda_marca = pg_query($con, $marca);

                            if(!$guarda_marca){
                                echo '<option readonly>No hay marcas registradas</option>';
                            } else {
                                while ($row = pg_fetch_row($guarda_marca)){
                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }
                            }
                        ?>

                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label for="descuento">Descuento</label>
                            <input type="number" class="form-control" id="descuento" name="descuento" max="1" min="0" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="tamano">Tama&ntilde;o</label>
                            <select class="form-control" id="tamano" name="tamano">
                                <option value="G">Grande</option>
                                <option value="M">Mediana</option>
                                <option value="C">Chica</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-10">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="$100.00" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="existencia">Existencia</label>
                            <div class="form-check col-6">
                                <input class="form-check-input" type="radio" name="existencia" id="eSi" value="true" checked>
                                <label class="form-check-label" for="eSi">
                                Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="existencia" id="eNo" value="false">
                                <label class="form-check-label" for="eNo">
                                No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                </form>
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
