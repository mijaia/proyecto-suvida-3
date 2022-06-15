<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Inicio Sesion</title>
</head>
<body>


<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Nombre" />
      <input type="password" placeholder="Contraseña" />
      <input type="text" placeholder="Correo" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>


    <form class="login-form" action="usuario_sesion.php" method="POST">
      <input type="text" placeholder="Usuario" />
      <input type="password" placeholder="Contraseña" />

      <button>Entrar</button>
      <p class="message">No estas registrado? <a href="CrearCuenta.php">Crear cuenta</a></p>
    </form>
  </div>
</div>




<script type="text/javascript">
	

$(".message a").click(function () {
  $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
});






</script>






</body>
</html>