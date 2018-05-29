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
	
		<!-- Encabezado -->
		<header>	
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
		</header>
		<!-- Fin encabezado -->			
	
		<!-- Barra de navegación -->
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
							<li><a href="#organizacion">LA ORGANIZACIÓN</a></li>
							<li><a href="#deportes">DEPORTES</a></li>
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
									<a class="nav-link" href="gestionararticulos.php">GESTIONAR ARTICULOS</a>
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
					</div>
				</div>
			</nav>
		<!-- Fin barra de navegación -->



	<!-- Contenido principal -->
	<section class="contenido-principal">
		<div class="container cont-white">
			<div class = "row">
				<div class = "col">
                    <h2 id="titulo">
						<?php 
							if(!$_GET["articulo"]){
								echo 'Nuevo articulo';
								$metodo='post';
								$ruta='altaarticulo.php';
							}else{
								echo 'Modificar articulo';
								$metodo='get';
								$ruta='modificararticulo.php';
							}
                        ?>
                    </h2>
                    <form class="needs-validation" method="<?php echo $metodo; ?>" action="../control/<?php echo $ruta;?>">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Casco"  value="" required>
                            </div>
                            <div class="form-group">
                                    <label for="idmarca">Marca</label>
                                    <select class="form-control" id="idmarca" name="idmarca" placeholder="Benoto"  value="">
                                <?php
                                    include '../model/conexion.php';

                                    $con = vConectar();

                                    $marca = ("SELECT idmarca,nombremarca FROM marcas");

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
                                <input type="number" class="form-control" id="descuento" name="descuento" max="1" min="0" step="0.01" placeholder=""  value=""required>
                            </div>
                            <div class="form-group">
                                <label for="iddeporte">Deporte</label>
                                <select class="form-control" id="iddeporte" name="iddeporte" placeholder="" value="">
                                    <option value="1">Ciclismo</option>
                                    <option value="2">Skateboard</option>
                                    <option value="3">Patinaje</option>
									<option value="4">Motociclismo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-10">
                                <label for="precio">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="" value="" required>
                            </div>
                            <div class="form-group col">
                                <label for="existencia">Existencia</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" max="10000" min="0" step="1" placeholder="" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    </form>
				</div>
			</div>
			<div class = "row">
				<div class = "col">
					<h2>articulos Registradas</h2>
					<table class="table table-striped">
						<thead>
						    <tr>
                              <th scope="col">Imagen</th>
						      <th scope="col">Nombre</th>
                              <th scope="col">Descuento</th>
                              <th scope="col">Deporte</th>
                              <th scope="col">Precio</th>
                              <th scope="col">Cantidad</th>
						      <th scope="col">Modificar</th>
						      <th scope="col">Eliminar</th>
						    </tr>
						</thead>
					<tbody>
						  	<?php
						  		include_once('../model/conexion.php');

						  		$con = vConectar();
	                    		$query=("SELECT id_articulo,imagen,nombre,descuento,iddeporte,precio,existencia,idmarca FROM articulos");
	                    		$res=pg_query($con,$query);

	                    		while ($f=pg_fetch_array($res)) {
						  	?>
						  		<tr>
                                    <td><img src="../img/<?php echo $f['imagen']?>"</td>
                                    <td><?php echo $f['nombre']?></td>
                                    <td>%<?php echo $f['descuento'] * 100;?></td>
                                    <td><?php switch($f['iddeporte']){ 
                                                    case '1':   echo 'ciclismo'; 
                                                                break;
                                                    case '2':   echo 'skateboard'; 
                                                                break;
                                                    case '3':   echo 'patinaje'; 
                                                                break;
                                                    case '4':   echo 'motociclismo'; 
                                                                break;																
                                                }?></td>
                                    <td>$<?php echo $f['precio']?></td>
                                    <td><?php echo $f['existencia']?></td>
                                    <td><a href="#titulo?nombre=<?php echo $f['nombre']?>?idmarca=<?php echo $f['idmarca']?>?descuento=<?php echo $f['descuento']?>?precio=<?php echo $f['precio']?>?iddeporte=<?php echo $f['iddeporte']?>?cantidad=<?php echo $f['cantidad']?>"><i class="fas fa-edit"></i></a></td>
							        <td><a href="../control/bajaarticulo.php?articulo=<?php echo $f['id_articulo']?>"><i class="fas fa-trash-alt"></i></a></td>
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
	<!-- FinContenido principal -->	
	
	<!-- Pie -->
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
<!-- Fin Pie -->
		<script src="../common/jquery/jquery-3.3.1.js"></script>
		<script src="../common/js/bootstrap.min.js"></script>
		<script src="../common/js/main.js"></script>
	</body>
</html>