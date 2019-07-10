<?php 

require 'pdf/fpdf.php';

require '../../config/Conexion.php';

$type = $_GET['type'];

switch ($type) {

	case 'yeslab':

		$consulta = "SELECT * FROM encuesta3 e3 INNER JOIN egresado eg ON eg.idegresado = e3.idegresado WHERE e3.trabajas = 'Si'";
		$executar = $conexion -> query($consulta);

		$pdf = new FPDF();
		$pdf -> AliasNbPages();
		$pdf -> AddPage();
		$pdf -> SetFont('Arial','B',14);

		$pdf -> Image('../../public/img/uaem_logo.png', 5, 5, 22 );
		$pdf -> Cell(200, 10, utf8_decode('Centro Universitario UAEM Temascaltepec'), 0, 0, 'C');
		$pdf -> SetDrawColor(29, 131, 72);
		$pdf -> SetLineWidth(1);
		$pdf -> Line(20,25,190,25);
		$pdf -> Ln(); $pdf -> Ln();
		$pdf -> SetFont('Arial', 'B', 14);
		$pdf -> Cell(200, 4, utf8_decode('Reporte de Egresados Laborando'), 0, 0, 'C');
		$pdf -> Ln(14);
	   	$pdf -> SetFillColor(232,232,232);
	    $pdf -> SetFont('Arial','B',9);
	    $pdf -> SetX(7);
	    $pdf -> Cell(60,8,'Nombre',1,0,'C',1);
	    $pdf -> Cell(60,8,'Apellidos',1,0,'C',1);
	    $pdf -> Cell(38,8,'Edad',1,0,'C',1);
	    $pdf -> Cell(38,8,'Sexo',1,0,'C',1);
	    $pdf -> Ln();

	    while ($data = mysqli_fetch_array($executar)) {
	    	$pdf -> SetX(7);
	    	$pdf -> Cell(60,8,utf8_decode($data["nombre"]),1,0,'C');
        	$pdf -> Cell(60,8,utf8_decode($data["apepat"]." ".utf8_decode($data["apemat"])),1,0,'C');
        	$pdf -> Cell(38,8,utf8_decode($data["edad"]),1,0,'C');
        	$pdf -> Cell(38,8,utf8_decode($data["sexo"]),1,0,'C');
        	$pdf -> Ln();
	    }

		$pdf -> Output('I','EgresadosLaborando',true);

		break;

	case 'notlab':

		$consulta = "SELECT * FROM encuesta3 e3 INNER JOIN egresado eg ON eg.idegresado = e3.idegresado WHERE e3.trabajas = 'No'";
		$executar = $conexion -> query($consulta);

		$pdf = new FPDF();
		$pdf -> AliasNbPages();
		$pdf -> AddPage();
		$pdf -> SetFont('Arial','B',14);

		$pdf -> Image('../../public/img/uaem_logo.png', 5, 5, 22 );
		$pdf -> Cell(200, 10, utf8_decode('Centro Universitario UAEM Temascaltepec'), 0, 0, 'C');
		$pdf -> SetDrawColor(29, 131, 72);
		$pdf -> SetLineWidth(1);
		$pdf -> Line(20,25,190,25);
		$pdf -> Ln(); $pdf -> Ln();
		$pdf -> SetFont('Arial', 'B', 14);
		$pdf -> Cell(200, 4, utf8_decode('Reporte de Egresados Laborando'), 0, 0, 'C');
		$pdf -> Ln(14);
	   	$pdf -> SetFillColor(232,232,232);
	    $pdf -> SetFont('Arial','B',9);
	    $pdf -> SetX(7);
	    $pdf -> Cell(60,8,'Nombre',1,0,'C',1);
	    $pdf -> Cell(60,8,'Apellidos',1,0,'C',1);
	    $pdf -> Cell(38,8,'Edad',1,0,'C',1);
	    $pdf -> Cell(38,8,'Sexo',1,0,'C',1);
	    $pdf -> Ln();

	    while ($data = mysqli_fetch_array($executar)) {
	    	$pdf -> SetX(7);
	    	$pdf -> Cell(60,8,utf8_decode($data["nombre"]),1,0,'C');
        	$pdf -> Cell(60,8,utf8_decode($data["apepat"]." ".utf8_decode($data["apemat"])),1,0,'C');
        	$pdf -> Cell(38,8,utf8_decode($data["edad"]),1,0,'C');
        	$pdf -> Cell(38,8,utf8_decode($data["sexo"]),1,0,'C');
        	$pdf -> Ln();
	    }

		$pdf -> Output('I','EgresadosNoLaborando',true);

		break;

	default:

		$conexion = null;
		die();

		break;
}

?>