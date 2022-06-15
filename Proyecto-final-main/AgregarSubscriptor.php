<?php 
	include 'conexion.php';

	$correo = $_POST['correo'];
	

	$sql = "INSERT INTO `subscriptor`( correo) VALUES ('$correo')";
	$result = $conexion->query($sql);
	header('Location: '.$_SERVER['HTTP_REFERER']);




 ?>

