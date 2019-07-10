<?php 
require '../formularios/phpprincipalusuario.php';

require('fpdf/fpdf.php');
//require('model.php');
//$nw = new Northwind();
$idegresado = $_SESSION['id'];

$nombre = $_SESSION['nombre'];



class pdf extends FPDF
{

	//ENCABEZADO DEL PDF//
	/*public function header()
	{
		$this->Image('../img/en.jpg',1,2,212);
		$this->SetFillColor(63, 135,55);
		$this->Rect(0,0, 220, 0, 'F');
		$this->SetY(25);
		$this->SetFont('Arial', 'B', 20);
		$this->SetTextColor(255,255,25);
	//	$this->cell(120,10, 'UAEM Centro Universitario temascaltepec',0,1);
	//	$this->Cell(120,10,'Comprobante',0,1,'l');

	}*/
//PIE DE PAGINA DEL ECABEZADO//
	public function footer()
	{
		$this->Image('../img/temas.png',160,230,50);
		//$this->SetFillColor(51, 135,39);
		//$this->Rect(0, 250, 220, 50, 'F');
		$this->SetY(-20);
		$this->SetFont('Arial', '', 10);
		$this->SetTextColor(25,25,20);
		$this->SetX(110);
		$this->Write(5, 'Datos para infromacion');
		$this->Ln();
		$this->SetX(110);
		$this->Write(5, 'email,rvmendozam@uaemex.com');
		$this->SetX(120);
		$this->Ln();
		$this->SetX(110);
		$this->Write(5, '+(01726)266-52-09');
	}
}
$fechaActual = date("Y-m-d");
//$nombre = "Luis Angel Gonzalez cruz";
function fechaForm($fecha) {
	$fechaDat = substr($fecha, 0,4);
	$fechaM = substr($fecha, 5,2);
	$fechaD = substr($fecha, 8,2);
	$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
	$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$fechaF = date($fechaD)." de ".$meses[date($fechaM)-1]." del ".date($fechaDat);
	return $fechaF;
}
$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->Image('../img/c2.png',25,10,150 );
//$fpdf->Cell(200,15, utf8_decode("Universidad Autónoma del Estado de México"),0,0,'C');

 $fpdf->SetFont('Arial','',14);
$fpdf->Ln(30);
$fpdf->Cell(200, 15, "Cuestionario Seguimiento de Egresados",0,1,'C');
$fpdf->Ln(1);
 $fpdf->SetFont('Arial','',12);
$fpdf->cell(200,10,"Fecha que concluyo la encuenta: ".fechaForm($fechaActual), 0, 0, 'C');
$fpdf->Ln(10);
//$fpdf->Cell(200, 10, "El alumno: ".$nombre, 0, 0, 'C');
$fpdf->Ln(1);
$fpdf->SetFont('Arial','',12);
$fpdf->Ln(1);
$fpdf->Cell(200, 15, "Numero de cuenta del egresado: ".$cuenta,0,1,'C');

$fpdf->SetFont('Arial','',12);
$fpdf->Ln(1);
$fpdf->Cell(200, 1, "Nombre del egresado: ".$nombre,0,1,'C');

$fpdf->SetFont('Arial','',12);
$fpdf->Ln(8);
$fpdf->Cell(200, 1, "Plan de estudios: Semestral",0,1,'C');
$fpdf->OutPut();



 ?>