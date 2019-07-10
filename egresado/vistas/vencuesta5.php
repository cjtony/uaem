<?php

require "../conexion.php";

	$idenc = isset($_POST["idenc"]) ? $_POST["idenc"]: "";

	$idegresado = isset($_POST["idegresado"]) ? $_POST["idegresado"]: "";

	$atraves = isset($_POST["atraves"]) ? $_POST["atraves"]: "";



	/*echo $idenc; echo "<br>";
	echo $idegresado; echo "<br>";
	echo $atraves; echo "<br>";
*/


	$guardar = $conexion->prepare("INSERT INTO  encuesta5 (idenc,idegresado,atraves)VALUES(:idenc,:idegresado,:atraves)");

	$guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idegresado',$idegresado);

	$guardar->bindParam(':atraves',$atraves);

	$guardar->execute();

	if($guardar == true){
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta6"

		</script>';
	}

?>
