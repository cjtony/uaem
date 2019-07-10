<?php
require_once "../modelos/Direccion.php";

$direccion = new Direccion();

$iddir = isset($_POST["iddir"]) ? limpiarCadena($_POST["iddir"]): "";
$idegresado = isset($_POST["idegresado"]) ? limpiarCadena($_POST["idegresado"]): "";
$idestado = isset($_POST["idestado"]) ? limpiarCadena($_POST["idestado"]): "";
$idmunicipio = isset($_POST["idmunicipio"]) ? limpiarCadena($_POST["idmunicipio"]): "";
$colonia = isset($_POST["colonia"]) ? limpiarCadena($_POST["colonia"]): "";
$calle= isset($_POST["calle"]) ? limpiarCadena($_POST["calle"]): "";
$ninterior = isset($_POST["ninterior"]) ? limpiarCadena($_POST["ninterior"]): "";
$nexterior = isset($_POST["nexterior"]) ? limpiarCadena($_POST["nexterior"]): "";
$cp = isset($_POST["cp"]) ? limpiarCadena($_POST["cp"]): "";


switch ($_GET["dato"]) {
	case 'guardar':
	

		if (empty($iddir)) {
			$rspta = $direccion->insertar($idegresado,$idestado,$idmunicipio,$colonia,$calle,$ninterior,$nexterior,$cp);
			echo $rspta ? "Tu direccion se guardo correcamente" : "Error al guardar la direccion";
		}else{
			$rspta = $direccion->editar($iddir,$idegresado,$idestado,$idmunicipio,$colonia,$calle,$ninterior,$nexterior,$cp);
			echo $rspta ? "Tu direccion se actualizo correctamente" : "Error al actualizar";
		}

	break;

	case 'listarestados':
		$rspta = $direccion->ListarEstados();
		while ($reg = $rspta->fetch_object()) {
			$r = '<option value='.$reg->id.'>'.$reg->nombre.'</option>';
			echo $r;
		}	
	
	break;

	case 'mostrarMunicipios':

		$rspta = $direccion->mostrarMunicipios($idestado);

		while($reg = $rspta->fetch_object())
		{
			$r = '<option value='.$reg->id.'>'.$reg->nombre.'</option>';
		
			echo $r;
 		}

	break;

	case 'datosdireccion':
		
		$rspta = $direccion->DatosDireccion($idegresado);

		echo json_encode($rspta);

	break;

	case 'mostrardireccion':
		
		$rspta = $direccion->MostrarDireccion($idegresado);

		echo json_encode($rspta);

	break;
	
}

?>