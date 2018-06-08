<?php 
	
function conectar(){

	$user = "root";
	$pass = "";
	$server = "localhost";
	$db = "db";
	
	$conexion = new mysqli($server,$user,$pass,$db) or die('error'.mysqli_connect_errno());

	return $conexion;
}

?>