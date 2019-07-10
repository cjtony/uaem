<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>SSELogin</title>

	<link rel="stylesheet" href="../css/index.css">

	<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.css">

	<link rel="stylesheet" href="../../public/js/jquery-3.1.1.min.js">

	<link rel="stylesheet" href="../../public/bootstrap/js/bootstrap.js">

	<link rel="stylesheet" href="../../public/css/font-awesome.css">

</head>

<body>

	<!--=====================================
	FORMULARIO DE LOGIN
	======================================-->

	<div class="contenedor-form">

	<form name="formLogin" name="formLogin" method="POST">

	  <h1 class="text-center" style="color: #8a8a8a; margin-bottom: 5%;">

	  	<i class="fa fa-user-secret" style="margin-right:5px;"></i>Login SSE

	  </h1>

	  <div class="form-group">

	    <label for="email">Correo electronico:</label>

	    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo.2019@gmail.com">

	  </div>

	  <div class="form-group">

	    <label for="pwd">Contraseña:</label>

	    <input type="password" class="form-control" name="password" id="password">

	  </div>

	  <div class="checkbox">

	    <label><input type="checkbox"> Recordar</label>

	    <p style="color:blue;"><a href="#">He olvidado mi contraseña</a></p>

	  </div>

	  <div id="mensaje"></div>

  	  <button type="submit" class="btn btn-default pull-right" id="btnIngresar" onclick="ValidarLogin()">Ingresar</button>

  	  <a href="../../index.php" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>Regresar</a>

	</form>

	</div>

</body>

</html>

<script src="../../scripts/login.js"></script>