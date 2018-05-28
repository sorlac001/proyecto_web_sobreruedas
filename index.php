<?php 
  session_start();
  $tipoUsuario = $_SESSION['tipoUsuario'];
  header('Location:vista/principal.php');
?>
