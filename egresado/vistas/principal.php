<?php
require '../formularios/phpprincipalusuario.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Principal Usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../estilos/headerusuario.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../librerias/jquery/municipios.js"></script>
	<script type="text/javascript" src="../librerias/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../librerias/jquery/habilitarcampos.js"></script>
	<link rel="stylesheet" type="text/css" href="../estilos/menuusuario.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../librerias/swal/sweetalert2.min.css">
	<script src="../librerias/swal/sweetalert2.min.js"></script>
</head>
<body>
	<header>
		<div>
			<div class="logo">
				<img src="../img/logotemas.png" width="100" height="100">
      			<p>Sistema de Seguimiento y Control de Egresados de la UAEM</p>
			</div>
			<nav>
				<div>
					<img src="../img/user.png" width="40" id="img" height="40" data-toggle="modal" data-target="#exampleModal">
				</div>
				<div>
					<b><?php echo $nombre;?></b>
				</div>
				<div>
					<a href="cerrarSesion.php" class="ingresar"><div class="link">Cerrar Sesion</div></a>
				</div>	
			</nav>
		</div>
	</header>
	<div class="row">
	  <div class="col-2 panel">

	    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	    <p><b>Panel de Informacion</b></p>  
	      <a class="nav-link active" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true" style="background: none;"><div class="link2"><span class="fa fa-home margen"></span>Inicio</div></a>
	      <a class="nav-link" id="v-pills-op1-tab" data-toggle="pill" href="#v-pills-op1" role="tab" aria-controls="v-pills-op1" aria-selected="false" style="background: none;"><div class="link2"><span class="fa fa-location-arrow margen"></span>Mi Direccion</div></a>
	      <a class="nav-link" id="v-pills-op2-tab" data-toggle="pill" href="#v-pills-op2" role="tab" aria-controls="v-pills-op2" aria-selected="false" style="background: none;"><div class="link2"><span class=" fa fa-address-book margen"></span>D.Personales</div></a>
	      <a class="nav-link" id="v-pills-op3-tab" data-toggle="pill" href="#v-pills-op3" role="tab" aria-controls="v-pills-op3" aria-selected="false" style="background: none;"><div class="link2"><span class="fa fa-institution margen"></span>D.Academicos</div></a>
	      <a class="nav-link" id="v-pills-op4-tab" data-toggle="pill" href="#v-pills-op4" role="tab" aria-controls="v-pills-op4" aria-selected="false" style="background: none;"><div class="link2"><span class="fa fa-contao margen"></span></span>Encuestas</div></a>
	      <a class="nav-link" id="v-pills-op4-tab" data-toggle="pill" href="#v-pills-op4" role="tab" aria-controls="v-pills-op4" aria-selected="false" style="background: none;"><div class="link2"><span class="fa fa-life-bouy margen"></span>Propuestas</div></a>
	    </div>
		
	  </div>
	  <div class="col-9 saludo">
	    <div class="tab-content" id="v-pills-tabContent">
	      <div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
	      	<div class="card mb-3">
			  <img class="card-img-top" src="../img/saludo2.jpg" alt="Card image cap" height="350">
			  <div class="card-body">
			    <h5 class="card-title">¡Hola <?php echo $nombre?>!</h5>
			    <p class="card-text">
			    	Bienvenido al sistema de seguimiento y control de egresados. 
			    	Ya estás en tu perfil.
			    	Para continuar con el proceso y poder vincularte con alguna empresa de acuerdo a tu especialidad es necesario que respondas las encuestas que se encuentran en el panel de información, esto con el fin de determinar tus habilidades, conocimientos y actitudes, de esta manera enlistarte con nuestros empleadores.
			    	<br><br>
			    	¡Éxito!

			    </p>
			    <p class="card-text"><small class="text-muted">Universidad Autonoma del Estado de Mexico</small></p>
			  </div>
			</div>
	      </div>
	      <div class="tab-pane fade" id="v-pills-op1" role="tabpanel" aria-labelledby="v-pills-op1-tab">

	      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width: 90%; margin-left: 6%;" >
		  	<div class="alert alert-success alert-dismissable" style="text-align: center;">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>¡<?php echo $nombre?>!</strong>
  				Los siguientes datos son los que nos proporcionaste en tu registro al sistema, ¿Deseas cambiarlos? 
			</div>
			<a href="#" class="modificar">Modificar</a>
			<h3 class="h3"><span class="fa fa-location-arrow"></span>Datos de dirección</h3>
			<hr>
			<input type="hidden" name="iddir" value="<?php echo $iddir; ?>">
	  		<div class="form-row">
	  			<div class="form-group col-md-6">
	      			<label for="estado">Estado</label>
	      				<select id="estado" class="form-control" name="idestado" disabled="">
	        				<option selected><?php echo $estado;?></option>
	        					<?php
	          						foreach($estados as $est){
	            						echo "<option value=".$est[0].">".$est[1]."</option>";
	          						}
	        					?>
	      				</select>
	    		</div>
	    		<div class="form-group col-md-6">
	      			<label for="municipio">Municipio</label>
	      				<select id="municipio" name="idmunicipio" class="form-control" disabled="">
								<option><?php echo $municipio;?></option>
						</select>
	    		</div>
	  		</div>
	  		<div class="form-group">
	    		<label for="colonia">Colonia</label>
	    		<input type="text" class="form-control" id="colonia" placeholder="Ingrese su colonia" name="colonia" onkeypress="return soloLetras(event)" disabled="" value="<?php echo $colonia;?>">
	  		</div>
	  		<div class="form-group">
	    		<label for="calle">Calle:</label>
	    		<input type="text" class="form-control" id="calle" placeholder="Calle o referencia de su ubicacion" name="calle" disabled="" value="<?php echo $calle;?>">
	  		</div>
	  		<div class="form-row">
	    		<div class="form-group col-md-4">
	      			<label for="ninterior">Numero Interior</label>
	      			<input type="text" name="ninterior" maxlength="5" class="form-control" disabled="" value="<?php echo $ninterior;?>" id="ninterior">
	    		</div>
	    		<div class="form-group col-md-4">
	      			<label for="nexterior">Numero exterior</label>
	      			<input type="text" name="nexterior" maxlength="5" class="form-control" disabled="" value="<?php echo $nexterior;?>" id="nexterior">
	    		</div>
	    		<div class="form-group col-md-4">
	      			<label for="cp">Codigo Postal</label>
	      			<input type="text" name="cp" minlength="5" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" disabled="" value="<?php echo $cp;?>" id="cp">
	    		</div>
	  		</div>
	  		<input type="submit" class="btn btn-success btn-lg posicion" value="Guardar" name="direccion" disabled="" id="direccion">
	  		<br><br><br><br>
		</form>
	      </div>
	      <div class="tab-pane fade" id="v-pills-op2" role="tabpanel" aria-labelledby="v-pills-op2-tab">

	      	
	      </div>
	      <div class="tab-pane fade" id="v-pills-op3" role="tabpanel" aria-labelledby="v-pills-op3-tab">...</div>
	      <div class="tab-pane fade" id="v-pills-op4" role="tabpanel" aria-labelledby="v-pills-op4-tab">...</div>
	   </div>
	  </div>
	</div>
	<!--<footer class="piepag" style="background: #D2F0D2; padding: 20px; text-align: center;">
			<p><span class="fa fa-university"></span>Universidad Autónoma de Estado de México</p>	
	</footer>-->
</body>
</html>
