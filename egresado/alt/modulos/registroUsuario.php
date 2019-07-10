<?php include "config/phpregistroUsuario.php";?>

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
	<script src="../dist/js/municipios.js"></script>
	<script src="../dist/js/soloLetras.js"></script>
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

<section style="width: 80%; margin: auto;">

	<div class="alert alert-success alert-dismissable" style="text-align: center;">

		<button type="button" class="close" data-dismiss="alert">&times;</button>

		<strong>¡Bienvenido a nuestro sistema de registro!</strong> Formularios (1 de 2)

	</div>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
		<h3 style="text-align: center; color: #34633D;"><span class="fa fa-location-arrow espacio"></span>Datos de dirección</h3>
	
		<hr>
	
			<input type="hidden" name="iddir" value="<?php echo $nuevaiddir; ?>">
			
			<b style="float: right;">Datos Obligatorios (*)</b>
			
			<br><br>
		  	
		  	<div class="form-row">
		  	
		  		<div class="form-group col-md-6">
		    
		    		<label for="estado">Estado <b>*</b>:</label>
		    
		    		<select id="estado" class="form-control" name="idestado" required>
		    
		    			<option selected></option>
		        					
		        				<?php
		          				
		          					foreach($estados as $est){
		            		
		            					echo "<option value=".$est[0].">".$est[1]."</option>";
		          		
		          					}
		        		
		        				?>
		      			
		      		</select>

		    	</div>
		    	
		    	<div class="form-group col-md-6">
		    
		   			<label for="municipio">Municipio <b>*</b>:</label>
		   
		      		<select id="municipio" name="idmunicipio" class="form-control" required="">
						
						<option>Elige...</option>
						
					</select>
		    		
		    	</div>

		  	</div>

		  		<div class="form-group">

		    		<label for="colonia">Colonia <b>*</b>:</label>

		    		<input type="text" class="form-control" id="colonia" placeholder="Ingrese su colonia" name="colonia" required="" onkeypress="return soloLetras(event)">

		  		</div>

		  		<div class="form-group">

		    		<label for="calle">Calle:</label>

		    		<input type="text" class="form-control" id="calle" placeholder="Calle o referencia de su ubicacion" name="calle">

		  		</div>

		  		<div class="form-row">

		    		<div class="form-group col-md-4">

		      			<label for="ninterior">Numero Interior <b>*</b>:</label>

		      			<input type="text" name="ninterior" maxlength="5" class="form-control" required="">

		    		</div>

		    		<div class="form-group col-md-4">

		      			<label for="nexterior">Numero exterior <b>*</b>:</label>

		      			<input type="text" name="nexterior" maxlength="5" class="form-control" required="">

		    		</div>

		    		<div class="form-group col-md-4">

		      			<label for="cp">Codigo Postal <b>*</b>:</label>

		      			<input type="text" name="cp" minlength="5" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" required="">

		    		</div>

		  		</div>

		  		<input type="submit" class="btn btn-success btn-lg pull-right" value="Guardar" name="direccion">

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