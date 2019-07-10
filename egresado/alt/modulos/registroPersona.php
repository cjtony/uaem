<?php include "config/phpregistroPersona.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../estilos/tipoRegistro.css">
	<link rel="stylesheet" href="../estilos/primera.css">
	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="../dist/js/soloLetras.js"></script>
	<script src="../dist/js/validarPassword.js"></script>
	<title>Registro de usuarios</title>

</head>
<body>
	<header class="contenedor-header">
	
		<section class="logo">
				
			<p><img src="../img/logotemas.png" width="70" height="70"></p>

			<span>UAEM</span>

		</section>

		<nav class="navegacion-header">

			<a href="../index.php" style="margin-right: 2%;">
				

				<div><i class="fa fa-home espacio"></i>Inicio</div>

			</a>

			<a href="#" data-toggle="modal" data-target="#modalInformacion">
				
				<div><i class="fa fa-question-circle espacio"></i>Ayuda</div>

			</a>
		
		</nav>

</header>

<br>

<!--=====================================
FORMULARIO DE LOS DATOS DEL USUARIO
======================================-->

<section style="width: 80%; margin: auto;">

	<div class="alert alert-success alert-dismissable" style="text-align: center;">
	  	
	  	<button type="button" class="close" data-dismiss="alert">&times;</button>
	  	
	  	<strong>¡Bienvenido a nuestro sistema de registro!</strong> Formularios (2 de 2)

	</div>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	    
	    <h3 style="text-align: center; color: #34633D;"><span class="fa fa-address-book espacio"></span>Datos personales</h3>
	    
	    <hr>
	    
	    <b style="float: right;">Datos Obligatorios (*)</b>

	    <br><br>
	    
	    <input type="hidden" name="iddir" value="<?php echo $iddireccion[0]; ?>">
	    
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
			    
			    <input type="text" name="edad" value="" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control">
			 
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

	    <br><br><br>
	   
	    <h5 style="font-size: 14pt; color: #34633D; text-align: center;">Datos de cuenta</h5>
	    
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
	    	
	  	<br><br><br><br><br><br>

		<input type="submit" class="btn btn-success btn-lg pull-right persona" value="Guardar" name="persona" disabled="">

		<br><br><br><br>
	  		
		
	</form>
	
</section>

</body>
<!--MODAL DE INFORMACION DEL SISTEMA--->

<div id="modalInformacion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Contenido de la Modal-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" style="font-size: 14pt; color: #34633D;">

        	<i class="fa fa-question-circle espacio"></i>

        	Bienvenido a nuestro modulo de Ayuda.

        </h4>

      </div>

      <div class="modal-body" style="text-align: justify; font-size: 12pt;">

        <p>El sistema seguimiento y control de egresados es el punto de enlace y comunicación entre el Centro Universitario UAEM Temascatepec y sus egresados, a través de este podemos evaluar continuamente el desempeño e impacto profesional de nuestros egresados en el sector productivo, además permite recabar información para la actualización y mejora continua de nuestros planes de estudio, así como para conocer sus necesidades de formación y capacitación que les permita tener un mejor desarrollo profesional.</p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>
</div>


</html>