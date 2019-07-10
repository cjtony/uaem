<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="estilos/formularioIngreso.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	
	<script type="text/javascript" src="librerias/jquery/index.js"></script>
	<script type="text/javascript" src="librerias/jquery/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="boxlogin" class="modal_wrap" style="display: none;">
		<section class="form_wrap"  >
			<section class="contact_info">
				<section class="info_title">
					<span class="fa fa-users"></span>
						<h2>Autentificacion de usuarios <br>UAEM</h2>
				</section>
				<section class="info_items">
					<p><span class="fa fa-envelope"></span>uaemtemascatepec@gmail.com</p>
					<p><span class="fa fa-mobile"></span>(+52) 7223234321</p>
				</section>
			</section>
			<form class="form_contact" action="validarlogin.php" method="post">
				<h2>Datos de cuenta</h2>
				<div class="user_info">
					<label>Correo</label>
					<input type="email" name="correo" id="correo" placeholder="Ingrese su correo" required="">

					<label>Contraseña</label>
					<input type="password" name="password" id="password" placeholder="Contraseña">
					<a href="" class="olvide">¿Olvidaste tu contraseña?</a>
					<input type="submit" value="Ingresar" id="btn-ingresar" name="ingreso">
				</div>
				<span id="cerrarF">X</span>
			</form>
		</section>
	</div>
</body>
</html>