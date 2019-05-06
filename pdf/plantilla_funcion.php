<?php
require ('fpdf/fpdf.php');

class PDF extends FPDF
{

	function Header()
	{
		$this->Image('../img/logo-Ministerio.jpg', 35,15,30);
		$this->Image('../img/cicpc_logo_trns.png', 760,5,30);

		$this->SetFont('Arial','B',10);

		$this->Cell(30);
		$this->SetX(350);
		$this->Cell(150,10, 'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(350);
		$this->Cell(150,10, 'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(350);
		$this->Cell(150,10, utf8_decode('CUERPO DE INVESTIGACIONES CIENTÍFICA, PENALES Y CRIMINALÍSTICAS'),2,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(350);
		$this->Cell(150,10, utf8_decode('DIRECCIÓN DE TECNOLOGÍA'),2,0,'C');
		$this->Ln(5);


		$this->Ln(10);
		$this->Cell(30);
		$this->SetX(350);
		$this->Cell(150,10, 'Reporte General',2,1,'C');

		
		$this->SetX(350);
		$this->Cell(150,10, utf8_decode('FORMATO DE DIRECCION DE TECNOLOGIA'),2,0,'C');
		

				$this->SetX(10);
				$this->Cell(765,10, '',1,0,'C');
				$this->Cell(40,10, 'FECHA: 2019',1,1,'C');


				$this->Cell(805,10,'',1,1,'C');

				
				$this->SetX(350);
				$this->Cell(150,10, utf8_decode('ORGANISMO'),2,0,'C');
				$this->SetX(10);
				$this->Cell(805,10, utf8_decode(''),1,1,'C');
				

			
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'15',1,0,'C');
				//$this->SetX(10);
				$this->Cell(725,10,utf8_decode('DENOMINACIÓN: MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES JUSTICIA Y PAZ'),1,1,'I');

				$this->SetX(350);
				$this->Cell(150,10, utf8_decode('UNIDAD ADMINISTRADORA'),2,0,'C');
				$this->SetX(10);
				


				$this->Cell(805,10,'',1,1,'C');
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'9700',1,0,'C');
				//$this->SetX(10);
				$this->Cell(725,10,utf8_decode('DENOMINACIÓN: CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICAS'),1,1,'I');

				$this->SetX(350);
				$this->Cell(150,10, utf8_decode('DEPENDENCIA USUARIA'),2,0,'C');
				$this->SetX(10);
				$this->Cell(805,10, utf8_decode(''),1,1,'C');
				
				
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'206',1,0,'C');
				//$this->SetX(10);
				$this->Cell(725,10,utf8_decode('DENOMINACIÓN: DIRECCION DE TECNOLOGIA'),1,1,'I');

				$this->SetX(350);
				$this->Cell(150,10, utf8_decode('DIRECCIÓN DEL DESPACHO'),2,0,'C');
				$this->SetX(10);

				$this->Cell(805,10,utf8_decode(''),1,1,'C');
				$this->Cell(40,10,'',1,0,'C');
				$this->Cell(40,10,'',1,0,'C');
				//$this->SetX(10);
				$this->Cell(725,10,utf8_decode('UBICACIÓN: SEDE SAN AGUSTIN PISO 8'),1,1,'I');


				$this->Cell(805,10,'RESPONSABLE DEL USO',1,1,'C');
				$this->Cell(75,10,'NOMBRE Y APELLIDO',1,0,'C');
				$this->Cell(410,10,utf8_decode('ISIDRO'),1,0,'C');
				$this->Cell(220,10,'C.I. ',1,0,'C');
				$this->Cell(100,10,utf8_decode('CARGO: DIRECTOR DE LA DIRECCION DE TECNOLOGIA'),1,1,'C');
		$this->Ln(10);


	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}

}
?>