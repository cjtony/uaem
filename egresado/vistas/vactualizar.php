<?php
session_start();

require "../conexion.php";

$idu = $_SESSION['id'];


if(isset($_POST["actualizardatos"])){

	$titulado = $_POST["titulado"];
	$modalidad = $_POST["modalidad"];
	$tiempo = $_POST["tiempo"];
	$guardar = $conexion->prepare("UPDATE academico SET titulado = '".$titulado."', modalidad = '".$modalidad."', tiempo = '".$tiempo."' WHERE idper=".$idu."");
	$guardar->execute();

	if($guardar == true){
	    echo '<script>
			
			window.location = "/proyectog/usuarios/plantilla.php?ruta=actualizacion";

			alert("Tus datos personales se han actualizado correctamente");

		</script>';

	}else{
		echo '<script>
		
			alert("Error al actuliazar los datos");

		</script>';
	}

}

?>