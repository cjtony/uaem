<?php 


require('fpdf/fpdf.php');
//require('model.php');
//$nw = new Northwind();
//$id = 42;

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
		$this->SetFillColor(51, 135,39);
		$this->Rect(0, 250, 220, 50, 'F');
		$this->SetY(-20);
		$this->SetFont('Arial', '', 12);
		$this->SetTextColor(255,255,255);
		$this->SetX(120);
		$this->Write(5, 'Datos para infromacion');
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, 'email,rvmendozam@uaemex.com');
		$this->SetX(120);
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, '+(01726)266-52-09');
	}
}
$fechaActual = date("Y-m-d");
$nombre = "Luis Angel Gonzalez cruz";
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
$fpdf->Image('../img/en.jpg',1,2,212);
//$fpdf->SetMargins(10,30,20,20);
//$fpdf->SetFont('Arial', '', 9);
//$fpdf->SetTextColor(255,255,255);
 $fpdf->SetFont('Arial','',14);
    //$fpdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
$fpdf->Ln(30);
$fpdf->Cell(200, 25, "Comprobante de encuestas, fecha: ".fechaForm($fechaActual), 0, 0, 'C');
$fpdf->Ln(30);
$fpdf->Cell(200, 10, "El alumno: ".$nombre, 0, 0, 'C');
$fpdf->Ln(20);
$fpdf->MultiCell(200, 5, "Descripcion de contenido de la constancia de la entrevista que comprueba que el alumno contesto satisfactoriamente cada un de ellas", 0, 'L', 0);
$fpdf->OutPut();



 ?>