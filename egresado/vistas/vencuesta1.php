<?php

require "../conexion.php";
	
	if (isset($_POST["modalidad"]) && isset($_POST["tiempo"])) {
		$modalidad = $_POST["modalidad"];

		$tiempo = $_POST["tiempo"];
	}else{
	    $modalidad = "";

		$tiempo = "";
	}
	
	$idegresado = $_POST["idegresado"];
    if($idegresado == "")
	{
		$idegresado = "";
	}

	$titulado = $_POST["titulado"];
	if($titulado == "")
	{
		$titulado = "";
	}
	

	$updateegresado = $conexion->prepare("UPDATE egresado SET titulado = :titulado,modalidad = :modalidad,tiempo = :tiempo WHERE idegresado = :idegresado");

	$updateegresado->bindParam(':titulado',$titulado);

	$updateegresado->bindParam(':modalidad',$modalidad);

	$updateegresado->bindParam(':tiempo',$tiempo);

	$updateegresado->bindParam(':idegresado',$idegresado);

	$updateegresado->execute();

	if($updateegresado == true){

		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta2";

		</script>';

	}else{
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta1";

		</script>';
	}

	



?>