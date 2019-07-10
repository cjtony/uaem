<?php

require "../conexion.php";

	$idenc = isset($_POST["idenc"]) ? $_POST["idenc"]: "";

	$idegresado = isset($_POST["idegresado"]) ? $_POST["idegresado"]: "";

	$licenciatura = isset($_POST["licenciatura"]) ? $_POST["licenciatura"]: "";

	$clima = isset($_POST["clima"]) ? $_POST["clima"]: "";

    $cursado = isset($_POST["cursado"]) ? $_POST["cursado"]: "";
	


	/*echo $idenc; echo "<br>";
	echo $idegresado; echo "<br>";
	echo $licenciatura; echo "<br>";
*/


	$guardar = $conexion->prepare("INSERT INTO encuesta7 (idenc,idegresado,licenciatura,clima,cursado)VALUES(:idenc,:idegresado,:licenciatura,:clima,:cursado)");

	$guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idegresado',$idegresado);

	$guardar->bindParam(':licenciatura',$licenciatura);

	$guardar->bindParam(':clima',$clima);

	$guardar->bindParam(':cursado',$cursado);

	$guardar->execute();

	if($guardar == true){
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta8"

		</script>';
	}

?>