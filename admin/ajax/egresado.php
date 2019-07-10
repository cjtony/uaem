<?php
require_once '../modelos/Egresado.php';

$egresado = new Egresado();


$idegresado = isset($_POST["idegresado"]) ?limpiarCadena($_POST["idegresado"]):"";

$licenciatura = isset($_POST["licenciatura"]) ?limpiarCadena($_POST["licenciatura"]):"";

$cuenta = isset($_POST["cuenta"]) ?limpiarCadena($_POST["cuenta"]):"";

$nombre = isset($_POST["nombre"]) ?limpiarCadena($_POST["nombre"]):"";

$apepat = isset($_POST["apepat"]) ?limpiarCadena($_POST["apepat"]):"";

$apemat = isset($_POST["apemat"]) ?limpiarCadena($_POST["apemat"]):"";

$ingreso = isset($_POST["ingreso"]) ?limpiarCadena($_POST["ingreso"]):"";

$egreso = isset($_POST["egreso"]) ?limpiarCadena($_POST["egreso"]):"";


switch ($_GET["op"]) {

	case 'guardaryeditar':

		if (empty($idegresado)) {
			$rspta = $egresado->insertar($licenciatura,$cuenta,$nombre,$apepat,$apemat,$ingreso,$egreso);
			echo $rspta ? "Egresado agregado correctamente" : "El egresado no se pudo agregar";
		}else{
			$rspta = $egresado->editar($idegresado,$licenciatura,$cuenta,$nombre,$apepat,$apemat,$ingreso,$egreso);
			echo $rspta ? "Egresado actualizado correctamente" : "El egresado no se pudo actualizar";
		}

	break;

	case 'eliminar':
		
		$rspta = $egresado->eliminar($idegresado);
		echo $rspta ? "El egresado se eliminó con exito" : "El egresado no se pudo eliminar";

	break;

	case 'mostrar':

		$rspta = $egresado->mostrar($idegresado);
		//CODIFICAR EL RESULTADO UTILIZANDO JSON
		echo json_encode($rspta);
		
	break;

	case 'listar':

		$rspta = $egresado->listar();
		//VAMOS A DECLARAR UN ARRAY
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			
			$data[] = array(
				"0"=>'<button class="btn btn-default" onclick="mostrar('.$reg->idegresado.')">
					 	<i class="fa fa-pencil"></i>
					  </button>'.
					  ' <button class="btn btn-danger" onclick="eliminar('.$reg->idegresado.')">
					 	<i class="fa fa-trash"></i>
					  </button>',
				"1"=>$reg->licenciatura,
				"2"=>$reg->cuenta,
				"3"=>$reg->nombre,
				"4"=>$reg->apepat,
				"5"=>$reg->apemat,
				"6"=>$reg->ingreso,
				"7"=>$reg->egreso
				
			);

		}
		
		$r = array(

			"sEcho"=>1, //INFORMACION PARA EL DATATABLES
			"iTotalRecords"=>count($data), //ENVIAMOS EL TOTAL DE REGISTROS AL DATATABLE
			"iTotalDisplayRecords"=>count($data), //ENVIAMOS EL TOTAL DE REGISTROS A VISUALIZAR
			"aaData"=>$data
		);

		echo json_encode($r);

	break;

	case 'listarLic':

		require_once "../modelos/Licenciatura.php";

		$licenciatura = new Licenciatura();

		$rspta = $licenciatura->consultaLic();
		
		while ($reg = $rspta->fetch_object()) {
		
			$r = '<option value='.$reg->idlic.'>'.$reg->nombre.'</option>';

			echo $r;
		
		}

	break;
	
}
?>