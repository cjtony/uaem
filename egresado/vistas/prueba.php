<?php

include "../conexion.php";

	$idenc = $_POST["idenc"];

	$idper = $_POST["idper"];

	$estudioposterior = $_POST["estudioposterior"];

	$estudiocual = $_POST["estudiocual"];

	$tegustariaestudio = $_POST["tegustariaestudio"];

	$queestudio = $_POST["queestudio"];

	$tematica = $_POST["tematica"];

	$horario = $_POST["horario"];

	$modalidad = $_POST["modalidad"]; 

	$habilidades = $_POST["habilidades"];

	$conocimientos = $_POST["conocimientos"];

	$actitudes = $_POST["actitudes"];

	/*echo $idenc; echo "<br>";
	echo $idper; echo "<br>";
	echo $estudioposterior; echo "<br>";
	echo $estudiocual; echo "<br>";
	echo $tegustariaestudio; echo "<br>";
	echo $queestudio; echo "<br>";
	echo $tematica; echo "<br>";
	echo $horario; echo "<br>";
	echo $modalidad; echo "<br>";
	echo $habilidades; echo "<br>";
	echo $conocimientos; echo "<br>";
	echo $actitudes; echo "<br>";*/

	$guardar = $conexion->prepare("INSERT INTO formacioncapacitacion(idenc,idper,estudioposterior,estudiocual,tegustariaestudio,
		queestudio,tematica,horario,modalidad,habilidades,conocimientos,actitudes)VALUES(:idenc,:idper,:estudioposterior,:estudiocual,:tegustariaestudio,:queestudio,:tematica,:horario,:modalidad,:habilidades,:conocimientos,:actitudes)");

	$guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idper',$idper);

	$guardar->bindParam(':estudioposterior',$estudioposterior);

	$guardar->bindParam(':estudiocual',$estudiocual);

	$guardar->bindParam(':tegustariaestudio',$tegustariaestudio);

	$guardar->bindParam(':queestudio',$queestudio);

	$guardar->bindParam(':tematica',$tematica);

	$guardar->bindParam(':horario',$horario);

	$guardar->bindParam(':modalidad',$modalidad);

	$guardar->bindParam(':habilidades',$habilidades);

	$guardar->bindParam(':conocimientos',$conocimientos);

	$guardar->bindParam(':actitudes',$actitudes);

	$guardar->execute();

	if($guardar = true){

		echo '<script>
	
			window.location = "?ruta=encuesta3";

		</script>';

	}
?>