<?php
require '../formularios/ids.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Persona</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../librerias/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script src="../librerias/swal/sweetalert2.min.js"></script>
	<script type="text/javascript" src="../librerias/jquery/soloLetras.js"></script>
	<script type="text/javascript" src="../librerias/jquery/validarPass.js"></script>

	<link rel="stylesheet" href="../librerias/swal/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="../estilos/headerregistro.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulariodireccion.css">
</head>
<body>
	<header>
		<div>
			<div class="logo">
				<img src="../img/logotemas.png" width="100" height="100">
      			<p>Sistema de Seguimiento y Control de Egresados de la UAEM</p>
			</div>
			<nav>	
				<a href="index.php"><div class="linkn">Inicio</div></a>
				<a href="#" data-toggle="modal" data-target="#exampleModal"><div class="linkn">Ayuda</div></a>
			</nav>
		</div>
	</header>
	<section class="form">
		<div class="alert alert-success alert-dismissable" style="text-align: center;">
	  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	  		<strong>¡Bienvenido a nuestro sistema de registro!</strong>
	  		Formularios (2 de 2)
		</div>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	    	<h3 class="h3"><span class="fa fa-address-book"></span>Datos personales</h3>
	    	<hr>
	    	<b style="float: right;">Datos Obligatorios (*)</b>
	    	<br><br>
	    	<input type="hidden" name="iddir" value="<?php echo $idd[0]; ?>">
	    	<input type="hidden" name="idper" value="<?php echo $nuevaidper; ?>">
		    <div class="form-group">
		    	<label for="nombre">Nombre(s):</label>
		      	<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required="" onkeypress="return soloLetras(event)">
		    </div>
		    <div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="apepat">Apellido Paterno:</label>
		      		<input type="text" class="form-control" id="apepat" placeholder="Ingrse su apellido paterno" name="apepat" required="" onkeypress="return soloLetras(event)">
		    	</div>
			    <div class="form-group col-md-6">
			    	<label for="apemat">Apellido Materno:</label>
			    	<input type="text" class="form-control" id="apemat" placeholder="Ingrese su apellido materno" name="apemat" required="" onkeypress="return soloLetras(event)">
			  	</div>
		  	</div>
			<div class="form-row">
				<div class="form-group col-md-3">
			    	<label for="edad">Edad:</label>
			    	<input type="text" name="edad"  maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control">
			 	</div>
			  	<div class="form-group col-md-3">
			     	<label for="sexo">Sexo:</label>
			      	<select id="sexo" class="form-control" name="sexo" required="">
			        	<option selected>Elige...</option>
			        	<option value="hombre">Hombre</option>
			        	<option value="mujer">Mujer</option>
			      	</select>
			    </div>
			    <div class="form-group col-md-6">
			    	<label for="telefono">Telefono:</label>
			      	<input type="text" name="telefono" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control">
			    </div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
			    	<label>Matricula:</label>
			    	<input type="text" name="matricula" maxlength="10" minlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" required placeholder="Matricula con la que te identificas en la institucion">
			 	</div>
			  	<div class="form-group col-md-3">
			     	<label>Año de ingreso:</label>
			      	<input type="text" name="aingreso"  maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" required>
			    </div>
			    <div class="form-group col-md-3">
			    	<label for="telefono">Año de egreso:</label>
			      	<input type="text" name="aegreso" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" required>
			    </div>
			</div>
	    	<br>
	    	<h3 class="h3"><span class="fa fa-users"></span>Datos de cuenta</h3>
	    	<hr>
			<div class="form-group">
	      		<label for="correo">Correo:</label>
	      		<input type="email" class="form-control" id="correo" placeholder="Ingrese su correo" name="correo">
	    	</div>
	    	<div class="form-row">
	    		<div class="form-group col-md-6">
	      			<label for="password">Contraseña:</label>
	      			<input type="password" class="form-control" id="password" placeholder="Por ejemplo: Minombre123" name="password" required="" minlength="6" onkeyup="verificarPass()">
	    		</div>
	    		<div class="form-group col-md-6">
	      			<label for="password2">Confirmar contraseña:</label>
	      			<input type="password" onkeyup="verificarPass()" class="form-control" id="password2" placeholder="Confirma tu contraseña" name="password2" required=""  minlength="6">
	    		</div>
	    		<div name="mensaje" id="mensaje"></div>
	    		<br><br>
	    	</div>
	    	<div class="form-group col-md-4">
	      		<label for="tipousuario">Tipo de usuario:</label>
	      		<select required id="tipousuario" class="form-control" name="tipousuario">
	        		<option></option>
	        			<?php
	          				foreach($tipousuario as $r){
	            				echo "<option value=".$r[0].">".$r[1]."</option>";
	          				}
	        			?>
	      		</select>
	    	</div>
	    	
	  		<input type="submit" class="btn btn-success btn-lg posicion" value="Guardar" name="persona" disabled="">
	  		<br><br><br><br>
		</form>
	</section>
</body>
</html>