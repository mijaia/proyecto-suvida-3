<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<title>Contacto</title>
</head>
<body class="cuerpo">


<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">FLORERIA MARTINEZ</h4>
    </a>
    <nav>
      <ul>
        <li><a href="index.php">INICIO&nbsp;</a></li>
        <li><a href="ubicacion.php">UBICACIÓN</a></li>
        <li> <a href="contacto.php">CONTACTO</a></li>
        <li> <a href="informacion.php">INFORMACION</a></li>
        <li> <a href="cerrarSesion.php">Cerrar Sesion</a></li>
      </ul>
    </nav>
  </header>



<div>
	
<form class="form" action="AgregarContacto.php" method="post" accept-charset="utf-8" id="subscribe-blog">

  <h2>CONTACTO</h2>
  <p class="letra" type="Nombre"><input class="text" name="nombre" placeholder="Ejemplo: Maria Cardenaz"></input></p>
  <p class="letra" type="Numero Telefonico:"><input name="telefono" class="text" type="text" placeholder="Ejemplo: 989-123-2123"></input></p>
  <p class="letra"  type="Mensaje:"><input type="text" name="mensaje" class="text" placeholder=""></input></p>
  <button  class="boton">ENVIAR</button>
  <div class="info">
    <span class="fa fa-phone"></span>996-144-4049
    <span class="fa fa-envelope-o"></span> floreria_martinez@gmail.com
  </div>
</form>




</div>




</body>
</html>