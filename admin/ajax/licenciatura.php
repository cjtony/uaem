<?php
require_once '../modelos/Licenciatura.php';

$lic = new Licenciatura();


$idlic = isset($_POST["idlic"]) ?limpiarCadena($_POST["idlic"]):"";

$nombre = isset($_POST["nombre"]) ?limpiarCadena($_POST["nombre"]):"";

$descripcion = isset($_POST["descripcion"]) ?limpiarCadena($_POST["descripcion"]):"";


switch ($_GET["op"]) {

	case 'guardaryeditar':

		if (empty($idlic)) {
			$rspta = $lic->insertar($nombre,$descripcion);
			echo $rspta ? "Licenciatura agregada correctamente" : "La licenciatura no se pudo agregar";
		}else{
			$rspta = $lic->editar($idlic,$nombre,$descripcion);
			echo $rspta ? "Licenciatura actualizada" : "La licenciatura no se pudo actualizar";
		}

	break;

	case 'eliminar':
		
		$rspta = $lic->eliminar($idlic);
		echo $rspta ? "La licenciatura se eliminó con exito" : "La licenciatura no se pudo eliminar";

	break;
	
	case 'desactivar':
		
		$rspta = $categoria->desactivar($idcategoria);
		echo $rspta ? "Categoria desactivada" : "Categoria no se pudo desactivada";

	break;

	case 'activar':
		
		$rspta = $categoria->activar($idcategoria);
		echo $rspta ? "Categoria activada" : "Categoria no se pudo activada";

	break;

	case 'mostrar':

		$rspta = $lic->mostrar($idlic);
		//CODIFICAR EL RESULTADO UTILIZANDO JSON
		echo json_encode($rspta);
		
	break;

	case 'listar':

		$rspta = $lic->listar();
		//VAMOS A DECLARAR UN ARRAY
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			
			$data[] = array(
				"0"=>
					 '<button class="btn btn-default	" onclick="mostrar('.$reg->idlic.')">
					 	<i class="fa fa-pencil"></i>
					  </button>'.
					 ' <button class="btn btn-danger" onclick="eliminar('.$reg->idlic.')">
					 	<i class="fa fa-trash"></i>
					  </button>',
				"1"=>$reg->nombre,
				"2"=>$reg->descripcion
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
	
}
?>