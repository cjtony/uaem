<?php
	require_once 'pdf/fpdf.php';
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../public/img/uaem_logo.png', 5, 5, 50 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(160,30, 'Reporte de asistentes al congreso',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>