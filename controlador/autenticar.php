<?php
	
	session_start();

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];

	include '../model/conexion.php';
	$conexion=aConectar();

	$usuarios="SELECT idTipoUsuario FROM usuario WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'";
	$respuesta=pg_query($conexion,$usuarios);
	$usuario=pg_fetch_array($respuesta);
	$id_tipo_usuario=$usuario['id_tipo_usuario'];

	if($usuario>0){
		$tipo_usuario = "SELECT tipo FROM tipo_usuarios WHERE id_tipo_usuario = '$id_tipo_usuario'";
		$_SESSION['tipo_usuario']=$tipo_usuario;
		header('Location:../index.php');
	} else {
		$_SESSION['tipo_usuario']='';
		header('Location:../visual/iniciarSesion.php');
	}
	pg_free_result($respuesta);
	pg_close($conexion);
?>


