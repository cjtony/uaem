<?php
include_once '../modelos/Escritorio.php';

$escritorio = new Escritorio();

switch ($_GET["op"]) {

	case 'num_egresados':
		
		$r = $escritorio->num_egresados();

		while ($reg = mysqli_fetch_array($r)) {
	
			$g = $reg[0];

			echo $g;
		
		}

	break;

	case 'num_empresas':

		$r = $escritorio->num_empresas();

		while ($reg = mysqli_fetch_array($r)) {
	
			$g = $reg[0];

			echo $g;
		
		}

	break;

	case 'num_admins':

		$r = $escritorio->num_admins();

		while ($reg = mysqli_fetch_array($r)) {
	
			$g = $reg[0];

			echo $g;
		
		}
		
	break;

	case 'totalregistros':
	
		$r = $escritorio->num_egresados();
		while ($reg = mysqli_fetch_array($r)) {
			$r2 = $reg[0];
		}

		$s = $escritorio->num_empresas();
		while ($reg = mysqli_fetch_array($s)) {
			$s2 = $reg[0];
		}

		$t = $escritorio->num_admins();
		while ($reg = mysqli_fetch_array($t)) {
			$t2 = $reg[0];
		}

		$g = $r2 + $s2 + $t2;

		echo $g;	
	break;

	case 'listarEgresados':

		$rspta = $escritorio->listarEgresados();
		
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			
			$data[] = array(
				"0"=>'<button class="btn btn-default" verEstado="('.$reg->idegresado.')">
					  	<i class="fa fa-check-circle"></i>
					  </button>'.
					 ' <button class="btn btn-default" imprimirEstado="('.$reg->idegresado.')">
					  	<i class="fa fa-file"></i>
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

	case 'listarEmpresas':

		$num = 0;

		$rspta = $escritorio->listarEmpresas();
		
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$num++;
			$data[] = array(
				"0"=>$num,
				"1"=>$reg->nombreemp,
				"2"=>$reg->telefonoemp,
				"3"=>$reg->pagemp,
				"4"=>$reg->direccion,
				"5"=>$reg->correo,
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
	
	case 'listarAdmins':

		$num = 0;

		$rspta = $escritorio->listarAdmins();
		
		$data = Array();

		while ($reg = $rspta->fetch_object()) {
			$num++;
			$data[] = array(
				"0"=>$num,
				"1"=>$reg->nombre,
				"2"=>$reg->telefono,
				"3"=>$reg->correo
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

	case 'egresadoinfo':
		
		$rspta = $escritorio->egresadoDerecho();

		$rspta2 = $escritorio->egresadoInformatica();

		$rspta3 = $escritorio->egresadoContaduria();

		$rspta4 = $escritorio->egresadoAgronomia();

		$rspta5 = $escritorio->egresadoTurismo();

		echo json_encode($rspta).
			 json_encode($rspta2).
			 json_encode($rspta3).
			 json_encode($rspta4).
			 json_encode($rspta5);

	break;

	case 'egresadosincontestar':

		$dere = $escritorio->egresadoDerecho();
		$dere2 = $escritorio->totalEgresadoDerecho();

		$info = $escritorio->egresadoInformatica();
		$info2 = $escritorio->totalEgresadoInformatica();

		$conta = $escritorio->egresadoContaduria();
		$conta2 = $escritorio->totalEgresadoContaduria();

		$agro = $escritorio->egresadoAgronomia();
		$agro2 = $escritorio->totalEgresadoAgronomia();

		$turi = $escritorio->egresadoTurismo();
		$turi2 = $escritorio->totalEgresadoTurismo();

		echo json_encode($dere).
			 json_encode($dere2).
			 json_encode($info).
			 json_encode($info2).
			 json_encode($conta).
			 json_encode($conta2).
			 json_encode($agro).
			 json_encode($agro2).
			 json_encode($turi).
			 json_encode($turi2);

		
	break;
}




?>