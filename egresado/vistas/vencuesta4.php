<?php

require "../conexion.php";

	$idenc = isset($_POST["idenc"]) ? $_POST["idenc"]: "";

	$idegresado = isset($_POST["idegresado"]) ? $_POST["idegresado"]: "";

	$nombre = isset($_POST["nombre"]) ? $_POST["nombre"]: "";

	$correo = isset($_POST["correo"]) ? $_POST["correo"]: "";

	$numtel = isset($_POST["numtel"]) ? $_POST["numtel"]: "";

	$extension = isset($_POST["extension"]) ? $_POST["extension"]: "";

	$numcel = isset($_POST["numcel"]) ? $_POST["numcel"]: "";

	$edad = isset($_POST["edad"]) ? $_POST["edad"]: "";

	$grado = isset($_POST["grado"]) ? $_POST["grado"]: "";

	$puesto = isset($_POST["puesto"]) ? $_POST["puesto"]: "";

	$nivel = isset($_POST["nivel"]) ? $_POST["nivel"]: "";
	
	$puestodos = isset($_POST["puestodos"]) ? $_POST["puestodos"]: "";
	
	$antigueda = isset($_POST["antigueda"]) ? $_POST["antigueda"]: "";
	
	/*echo $idenc; echo "<br>";
	echo $idegresado; echo "<br>";
	echo $nombre; echo "<br>";
	echo $correo; echo "<br>";
	echo $numtel; echo "<br>";
	echo $extension; echo "<br>";
	echo $numcel; echo "<br>";
	echo $edad; echo "<br>";
	echo $grado; echo "<br>";
	echo $puesto; echo "<br>";
	echo $nivel; echo "<br>";
	echo $puestodos; echo "<br>";*/


	$guardar = $conexion->prepare("INSERT INTO encuesta4 (idenc,idegresado,nombre,correo,numtel,extension,numcel,edad, grado, puesto,nivel,puestodos,antigueda)VALUES(:idenc,:idegresado,:nombre,:correo,:numtel,:extension,:numcel,:edad,:grado,:puesto,:nivel,:puestodos,:antigueda)");

	$guardar->bindParam(':idenc',$idenc);

	$guardar->bindParam(':idegresado',$idegresado);

	$guardar->bindParam(':nombre',$nombre);

	$guardar->bindParam(':correo',$correo);

	$guardar->bindParam(':numtel',$numtel);

	$guardar->bindParam(':extension',$extension);

	$guardar->bindParam(':numcel',$numcel);

	$guardar->bindParam(':edad',$edad);

	$guardar->bindParam(':grado',$grado);

	$guardar->bindParam(':puesto',$puesto);

	$guardar->bindParam(':nivel',$nivel);

	$guardar->bindParam(':puestodos',$puestodos);

	$guardar->bindParam(':antigueda',$antigueda);

	$guardar->execute();

	if($guardar == true){
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encuesta5"

		</script>';
	}

?>
