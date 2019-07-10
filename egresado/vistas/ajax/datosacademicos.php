<?php
require_once '../modelos/DatosA.php';

$datos = new Datosa();

$idegresado = isset($_POST["idegresado"]) ? limpiarCadena($_POST["idegresado"]) :"";

switch ($_GET["dato"]) {
	case 'mostrardatosa':
		
		$rspta = $datos->MostrarDatosE($idegresado);
		echo json_encode($rspta);

	break;
	
	case 'listarLic':

		$rspta = $datos->consultaLic();
		
		while ($reg = $rspta->fetch_object()) {
		
			$r = '<option value='.$reg->idlic.'>'.$reg->nombre.'</option>';

			echo $r;
		
		}

	break;
}

?>