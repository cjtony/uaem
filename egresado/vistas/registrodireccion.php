<?php
require '../conexion.php';
require 'direccion.php';



if(isset($_POST['direccion'])){
	$iddir = $_POST['iddir'];
	$idestado = $_POST['idestado'];
	$idmunicipio = $_POST['idmunicipio'];
	$colonia = $_POST['colonia'];
	$calle = $_POST['calle'];
	$ninterior = $_POST['ninterior'];
	$nexterior = $_POST['nexterior'];
	$cp = $_POST['cp'];

	$direccion = $conexion->prepare("INSERT INTO direccion(iddir,idestado,idmunicipio,colonia,calle,ninterior,nexterior,cp) VALUES(:iddir,:idestado,:idmunicipio,:colonia,:calle,:ninterior,:nexterior,:cp)");
	$direccion->bindParam(':iddir',$iddir);
	$direccion->bindParam(':idestado',$idestado);
	$direccion->bindParam(':idmunicipio',$idmunicipio);
	$direccion->bindParam(':colonia',$colonia);
	$direccion->bindParam(':calle',$calle);
	$direccion->bindParam(':ninterior',$ninterior);
	$direccion->bindParam(':nexterior',$nexterior);
	$direccion->bindParam(':cp',$cp);
	$direccion->execute();

	if($direccion == true){
		echo '<script type="text/javascript">
					swal({
    					title: "Excelente!",
    					text: "Tus datos se han guardado correctamente!",
    					type: "success",
    					confirmButtonText: "Siguiente"
					}).then(function() {
    					window.location = "registropersona.php";
					});ss
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
?>