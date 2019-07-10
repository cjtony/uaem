require('fpdf/fpdf.php');
//require('model.php');
//$nw = new Northwind();
//$id = 42;

class pdf extends FPDF
{

	//ENCABEZADO DEL PDF//
	public function header()
	{
		$this->Image('../img/logotemas.png',30,5,30);
		$this->SetFillColor(63, 135,55);
		$this->Rect(0,0, 220, 50, 'F');
		$this->SetY(25);
		$this->SetFont('Arial', 'B', 20);
		$this->SetTextColor(255,255,255);
		$this->Write(5, 'UAEM Centro Universitario temascaltepec');

	}
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
$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10,30,20,20);
$fpdf->SetFont('Arial', '', 9);
$fpdf->SetTextColor(255,255,255);

 $fpdf->SetFont('Arial','',12);
    $fpdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
	$fpdf->Ln(20);



$fpdf->OutPut();