<?php
require 'config/conexion.php';

require 'registroPersona.php';

if(isset($_POST['persona'])){

	$idper = $_POST['idper'];

	$iddir = $_POST['iddir'];

	$nombre = $_POST['nombre'];

	$apepat = $_POST['apepat'];

	$apemat = $_POST['apemat'];

	$edad = $_POST['edad'];

	$sexo = $_POST['sexo'];

	$telefono = $_POST['telefono'];

	$correo = $_POST['correo'];

	$password = $_POST['password'];

	$tipousuario = $_POST['tipousuario'];

	$revisarcorreo = $conexion->prepare("SELECT * FROM persona WHERE correo = :correo");
	$revisarcorreo->bindParam(':correo',$correo);
	$revisarcorreo->execute();
	$num_row = $revisarcorreo->fetch();

	if ($num_row == 0){

		$persona = $conexion->prepare("INSERT INTO persona(idper,iddir,nombre,apepat,apemat,edad,sexo,telefono,correo,password,tipousuario) VALUES(:idper,:iddir,:nombre,:apepat,:apemat,:edad,:sexo,:telefono,:correo,:password,:tipousuario)");
		$persona->bindParam(':idper',$idper);
		$persona->bindParam(':iddir',$iddir);
		$persona->bindParam(':nombre',$nombre);
		$persona->bindParam(':apepat',$apepat);
		$persona->bindParam(':apemat',$apemat);
		$persona->bindParam(':edad',$edad);
		$persona->bindParam(':sexo',$sexo);
		$persona->bindParam(':telefono',$telefono);
		$persona->bindParam(':correo',$correo);
		$persona->bindParam(':password',$password);
		$persona->bindParam(':tipousuario',$tipousuario);
		$persona->execute();

		if($persona == true){

			echo '<script type="text/javascript">
						swal({
	    					title: "Excelente!",
	    					text: "Tus datos se han guardado correctamente. Ya puedes iniciar sesión.",
	    					type: "success",
	    					confirmButtonText: "Iniciar"
						}).then(function() {
	    					window.location = "../../index.php";
						});

				  </script>';

		}else{

			echo '<script type="text/javascript">
					swal({
	  					type: "error",
	  					title: "Error al guardar...",
	 					text: "Verifica de nuevo tus datos",
	  					footer: "<a href="../index.php">Salir</a>""
					});
				  </script>';

		}
	}
	if($num_row > 0) {

		echo '<script type="text/javascript">

				swal("Error!", "El correo ya existe, intenta con otro.", "error", {
  					  button: "Intentar de nuevo",
				});

			 </script>';
	}
}

?>