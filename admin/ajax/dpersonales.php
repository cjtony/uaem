<?php
require_once "../modelos/Dpersonales.php";

$dato = new Dpersonales();

$idadmin = isset($_POST["id"]) ? limpiarCadena($_POST["id"]) : "";
$password = isset($_POST["npassword"]) ? limpiarCadena($_POST["npassword"]) : "";
//$password = sha1($password);
$idestado = isset($_POST["idestado"]) ? limpiarCadena($_POST["idestado"]) : "";

switch ($_GET["dato"]) {

	case 'MostrarDatosPersonales':
		$rspta = $dato->MostrarDatosPersonales($idadmin);
		echo json_encode($rspta);
	break;

	case 'ActualizarPass':
		$rspta = $dato->ActualizarPass($idadmin,$password);
		echo $rspta	? "La contraseña se actualizo correctamente! Inicie sesion de nuevo" : "La contraseña no se pudo actualizar";
	break;
	
	case 'ListarEstados':
		$rspta = $dato->ListarEstados();
		while ($dat = $rspta->fetch_object()) {
			$r = '<option value='.$dat->id.'>'.$dat->nombre.'</option>';
			echo $r;
		}
	break;

	case 'mostrarMunicipios':
		$rspta = $dato->mostrarMunicipios($idestado);
		while($reg = $rspta->fetch_object())
		{
			$r = '<option value='.$reg->id.'>'.$reg->nombre.'</option>';
			echo $r;
 		}
	break;
	
}

?>