<?php
require ('fpdf/fpdf.php');

class PDF extends FPDF
{

	function Header()
	{
		$this->Image('../img/logo-Ministerio.jpg', 100,13,30);
		$this->Image('../img/cicpc_logo_trns.png', 470,5,30);

		$this->SetFont('Arial','B');
		
		$this->Cell(30);
		$this->SetX(190);
		$this->Cell(180,30,utf8_decode ('Dirección De Tecnología'),0,0,'C');
		$this->SetX(203);
		// $this->Cell(40,105,date('d/m/Y'),0,0,'L');
		$this->Ln(5);

		$this->Ln(10);
		$this->Cell(30);
		$this->SetX(268);
		$this->Cell(25,60,utf8_decode ('Reporte de Vehiculos'),2,1,'C');
		$this->Ln(20);

				// $this->SetX(150);
				// $this->Cell(800,-85,utf8_decode('En la división de sistema,                      hasta la fecha tiene la siguiente cantidad de personal a continuación'),0,0,'L');
				// $this->Ln(10);
	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}

}
?>