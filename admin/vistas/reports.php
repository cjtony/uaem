<?php

require 'pdf/fpdf.php';
require '../../config/Conexion.php';

$p1 = $_GET['p1'];

$sql = "SELECT CONCAT(eg.nombre,' ',eg.apepat,' ',eg.apemat) as 'Nombre', l.nombre as 'Licenciatura',  
eg.ingreso as 'Ingreso', eg.egreso as 'Egreso' FROM encuesta3 e3 INNER JOIN egresado eg ON eg.idegresado = e3.idegresado INNER JOIN licenciatura l ON l.idlic = eg.idlic WHERE trabajas  = '".$p1."'";
$sql = $conexion->query($sql);

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

if ($p1 == 'si') {
	$pdf -> SetFont('Arial', 'B', 14);
	$pdf -> Cell(200, 4, utf8_decode('Reporte de Egresados Laborando'), 0, 0, 'C');
	$pdf->Ln(20);
   	$pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',9);
    $pdf->SetX(7);
    $pdf->Cell(60,8,'Nombre',1,0,'C',1);
    $pdf->Cell(60,8,'Licenciatura',1,0,'C',1);
    $pdf->Cell(38,8,'Ingreso',1,0,'C',1);
    $pdf->Cell(38,8,'Egreso',1,0,'C',1);
    $pdf->Ln();

	while ($row = mysqli_fetch_array($sql)) {
        $pdf->SetX(7);
        $pdf->Cell(60,8,utf8_decode($row["Nombre"]),1,0,'C');
        $pdf->Cell(60,8,utf8_decode($row["Licenciatura"]),1,0,'C');
        $pdf->Cell(38,8,utf8_decode($row["Ingreso"]),1,0,'C');
        $pdf->Cell(38,8,utf8_decode($row["Egreso"]),1,0,'C');
        $pdf->Ln();
    }
} elseif ($p1 == 'no') {
	$pdf -> SetFont('Arial', 'B', 14);
	$pdf -> Cell(200, 4, utf8_decode('Reporte de Egresados no Laborando'), 0, 0, 'C');
	$pdf->Ln(20);
   	$pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',9);
    $pdf->SetX(7);
    $pdf->Cell(60,8,'Nombre',1,0,'C',1);
    $pdf->Cell(60,8,'Licenciatura',1,0,'C',1);
    $pdf->Cell(38,8,'Ingreso',1,0,'C',1);
    $pdf->Cell(38,8,'Egreso',1,0,'C',1);
    $pdf->Ln();

	while ($row = mysqli_fetch_array($sql)) {
        $pdf->SetX(7);
        $pdf->Cell(60,8,utf8_decode($row["Nombre"]),1,0,'C');
        $pdf->Cell(60,8,utf8_decode($row["Licenciatura"]),1,0,'C');
        $pdf->Cell(38,8,utf8_decode($row["Ingreso"]),1,0,'C');
        $pdf->Cell(38,8,utf8_decode($row["Egreso"]),1,0,'C');
        $pdf->Ln();
    }
}

$pdf -> Output('I','Egresados',true);