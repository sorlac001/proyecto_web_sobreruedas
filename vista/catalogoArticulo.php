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
    <title>Catalogo de articulos</title>
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
              <li><a href="principal.php">INICIO</a></li>
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

<!-- Begin page content -->
<section class="contenido-principal">
  <div class="container cont-white">
    <main>
      <div class="row">
        <?php
        include '../modelo/conexion.php';
        $con = conectar();
        $query=("SELECT imagen,nombre, descripcion, idarticulo FROM articulo");
        $res=pg_query($con,$query);
        while ($f=pg_fetch_array($res)) {
        ?>
        <div class="productoArticulo col-4">
          <div class="card">
            <img class="card-img-top" src="../img/<?php echo $f['imagen'];?>" alt=""/>
            <div class="card-body">
              <h5 class="card-title"><?php echo $f['nombre']?></h5>
              <p class="card-text"><?php echo $f['descripcion']?></p>
              <a href="articulo.php?articulo=<?php echo $f['idarticulo']?>" class="btn btn-darck">Detalles</a>
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
<?php
  include 'footer.php'
?>
<script src="../common/jquery/jquery-3.3.1.js"></script>
<script src="../common/js/bootstrap.min.js"></script>
<script src="../common/js/main.js"></script>
</body>
</html>






