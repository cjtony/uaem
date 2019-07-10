<?php
require_once '../modelos/Index.php';

$index = new Index();


//Obtnemos los valores de las variables para registrar a un nuevo egresado
$idegresado = isset($_POST["idegresado"]) ?limpiarCadena($_POST["idegresado"]):"";

$correo = isset($_POST["correo"]) ? limpiarCadena($_POST["correo"]): "";

$password = isset($_POST["password"]) ? limpiarCadena($_POST["password"]):"";

//Obtenemos los valores de las varibles para registrar a una nueva empresa

$nombreemp = isset($_POST["nombreemp"]) ? limpiarCadena($_POST["nombreemp"]):"";

$telefonoemp = isset($_POST["telefonoemp"]) ? limpiarCadena($_POST["telefonoemp"]):"";

$pagemp = isset($_POST["pagemp"]) ? limpiarCadena($_POST["pagemp"]):"";

$idestado = isset($_POST["idestado"]) ?limpiarCadena($_POST["idestado"]):"";

$idmunicipio = isset($_POST["idmunicipio"]) ?limpiarCadena($_POST["idmunicipio"]):"";

$coloniaemp = isset($_POST["coloniaemp"]) ?limpiarCadena($_POST["coloniaemp"]): "";

$calleemp = isset($_POST["calleemp"]) ?limpiarCadena($_POST["calleemp"]): "";

$numintemp = isset($_POST["numintemp"]) ?limpiarCadena($_POST["numintemp"]): "";

$numextemp = isset($_POST["numextemp"]) ?limpiarCadena($_POST["numextemp"]): "";

$cpemp = isset($_POST["cpemp"]) ?limpiarCadena($_POST["cpemp"]): "";

$acreacionemp = isset($_POST["acreacionemp"]) ?limpiarCadena($_POST["acreacionemp"]): "";

$numempemp = isset($_POST["numempemp"]) ?limpiarCadena($_POST["numempemp"]): "";

$correoemp = isset($_POST["correoemp"]) ?limpiarCadena($_POST["correoemp"]): "";

$passwordemp = isset($_POST["passwordemp"]) ?limpiarCadena($_POST["passwordemp"]): "";


switch ($_GET["dato"]) {

	case 'listar':
	
		$rspta = $index->ListarEgresados();
		while ($reg = $rspta->fetch_object()) {
			$r = '<option value='.$reg->idegresado.'>'.$reg->cuenta.'</option>';
			echo $r;
		}	
	
	break;

	case 'registrar':
		
		$rspta = $index->RegistrarEgresado($idegresado,$correo,$password);
		echo $rspta ? "Tu registro fue exitoso." : "Error al registrar";

	break;

	case 'mostrarNombre':

		$rspta = $index->mostrarNombre($idegresado);

		while($reg = $rspta->fetch_object())
		{
			$r = '<input value="'.$reg->nombre.' '.$reg->apepat.' '.$reg->apemat.'" class="form-control" readonly>';
		
			echo $r;
 		}

	break;

	case 'listarestados':
	
		$rspta = $index->ListarEstados();
		while ($reg = $rspta->fetch_object()) {
			$r = '<option value='.$reg->id.'>'.$reg->nombre.'</option>';
			echo $r;
		}	
	
	break;

	case 'mostrarMunicipios':

		$rspta = $index->mostrarMunicipios($idestado);

		while($reg = $rspta->fetch_object())
		{
			$r = '<option value='.$reg->id.'>'.$reg->nombre.'</option>';
		
			echo $r;
 		}

	break;

	case 'registrarempresas':

		$rspta = $index->RegistrarEmpresas($nombreemp,$telefonoemp,$pagemp,$idestado,$idmunicipio,$coloniaemp,$calleemp,$numintemp,$numextemp,$cpemp,$acreacionemp,$numempemp,$correoemp,$passwordemp);
		echo $rspta ? "Registro se realiazo correctamente": "Error al guardar";
		
	break;

	case 'consultarcorreo':
		
		$rspta = $index->ConsultarCorreo($correoemp);
		echo json_encode($rspta);

	break;
}

?>