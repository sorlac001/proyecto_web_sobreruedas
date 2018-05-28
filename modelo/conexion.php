<?php
function ConsultaAdmin($consulta){
    $con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=admintienda password=danngarcam0911") or die("No se puede establecer conexion a la BD");
    $query = pg_query($con,$consulta);
    $resp = pg_fetch_all($query);
    return $resp;
}
function ConsultaVenta($consulta){
    $con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=ventatienda password=12Admin34") or die("No se puede establecer conexion a la BD");
    $query = pg_query($con,$consulta);
    $resp = pg_fetch_all($query);
    return $resp;
}
function ConsultaCliente($consulta){
    $con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=clientetienda password=12Admin34") or die("No se puede establecer conexion a la BD");
    $query = pg_query($con,$consulta);
    $resp = pg_fetch_all($query);
    return $resp;
}

function aConectar(){
	$con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=admintienda password=danngarcam0911");
	return $con;
}
function vConectar(){
	$con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=ventatienda password=12Admin34");
	return $con;
}
function cConectar(){
	$con = pg_connect("host=127.0.0.1 port=5432 dbname=sobreruedas user=clientetienda password=12Admin34");
	return $con;
}
?>
