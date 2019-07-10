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
	<script src="vistas/plugins/sweetalert2/sweetalert.all.js"></script>
	<title>Tipo registro</title>
</head>
<body>
	<header class="contenedor-header">
	
		<section class="logo">
				
			<p><img src="../img/logotemas.png" width="70" height="70"></p>

			<span>UAEM</span>

		</section>

		<nav class="navegacion-header">

			<a href="" style="margin-right: 2%;">
				

				<div><i class="fa fa-home espacio"></i>Inicio</div>

			</a>

			<a href="#" data-toggle="modal" data-target="#modalInformacion">
				
				<div><i class="fa fa-question-circle espacio"></i>Ayuda</div>

			</a>
		
		</nav>

</header>

<br><br><br>

<div class="alert alert-success alert-dismissable" style="text-align: center; width:450px;margin: auto;">

	<button type="button" class="close" data-dismiss="alert">&times;</button>
	
	<strong>¡Bienvenido a nuestro sistema de registro!</strong>

</div>

<div class="tipo-registro alert-success">
	
	<p>Para continuar con el registro elige una de las dos opciones</p>

	<br>

	<h1>

		<span class="fa fa-user" style="font-size: 25pt;"></span>
		
		<br>

		¿Quién eres?

	</h1>

	<br>

	<div class="op-elegir">

		<a href="#" style="margin-left: 5%;"><div>Empresa</div></a>

		<a href="vregistroUsuario.php" style="margin-left: 1%;"><div>Usuario</div></a>

	</div>
	
</div>
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