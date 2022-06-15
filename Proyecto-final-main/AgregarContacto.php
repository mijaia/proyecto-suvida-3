<?php 
	include 'conexion.php';

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];



	$sql = "INSERT INTO `contacto`(nombre,telefono,mensaje) VALUES ('$nombre','$telefono','$mensaje')";
	$result = $conexion->query($sql);
	header('Location: '.$_SERVER['HTTP_REFERER']);




 ?>
