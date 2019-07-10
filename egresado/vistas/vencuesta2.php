<?php

require "../conexion.php";

	if($_POST["estudioposterior"] == "si"){
		$estudiocual = $_POST["estudiocual"];

	} else if($_POST["estudioposterior"] == "no"){
		$estudiocual = "";

	}

	$idegresado = isset( $_POST["idegresado"]) ? $_POST["idegresado"]:"";
	 

	$estudioposterior = isset($_POST["estudioposterior"])? $_POST["estudioposterior"]: "";
	

	$tegustariaestudio = isset($_POST["tegustariaestudio"])? $_POST["tegustariaestudio"]: "";
	
	$queestudio = isset($_POST["queestudio"]) ? $_POST["queestudio"]: "";

	$tematica = isset( $_POST["tematica"]) ? $_POST["tematica"]: "";
	
	$horario = isset($_POST["horario"]) ? $_POST["horario"]: "";
	
	$modalidad = isset($_POST["modalidad"]) ? $_POST["modalidad"]: ""; 
	

	$habilidades = isset($_POST["habilidades"]) ? $_POST["habilidades"]: "";

	$conocimientos = isset($_POST["conocimientos"]) ? $_POST["conocimientos"]: "";
	
	$actitudes = isset($_POST["actitudes"]) ? $_POST["actitudes"]: "";
	
	


	/*echo $idenc; echo "<br>";
	echo $$idegresado; echo "<br>";
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


	$guardar = $conexion->prepare("INSERT INTO encuesta2 (idenc,idegresado,estudioposterior,estudiocual,tegustariaestudio,queestudio,tematica,horario, modalidad, habilidades,conocimientos,actitudes)VALUES(:idenc,:idegresado,:estudioposterior,:estudiocual,:tegustariaestudio,:queestudio,:tematica,:horario,:modalidad,:habilidades,:conocimientos,:actitudes)");

     $guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idegresado',$idegresado);

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

	if($guardar == true){
		echo '<script>

         window.location = "plantillaegresado.php?ruta=encuesta3"

		</script>';
	}

?>
 <!--window.location = "plantillaegresado.php?ruta=encuesta3";-
