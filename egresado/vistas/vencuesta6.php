<?php

require "../conexion.php";

	$idenc = isset($_POST["idenc"]) ? $_POST["idenc"]: "";

	$idegresado = isset($_POST["idegresado"]) ? $_POST["idegresado"]: "";

	$fortaleza = isset($_POST["fortaleza"]) ? $_POST["fortaleza"]: "";
	
	$debilidad = isset($_POST["debilidad"]) ? $_POST["debilidad"]: "";




	/*echo $idenc; echo "<br>";
	echo $idegresado; echo "<br>";
	echo $fortaleza; echo "<br>";
*/


	$guardar = $conexion->prepare("INSERT INTO  encuesta6 (idenc,idegresado,fortaleza,debilidad)VALUES(:idenc,:idegresado,:fortaleza,:debilidad)");

	$guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idegresado',$idegresado);

	$guardar->bindParam(':fortaleza',$fortaleza);

	$guardar->bindParam(':debilidad',$debilidad);

	$guardar->execute();

	if($guardar == true){
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta7"

		</script>';
	}

?>