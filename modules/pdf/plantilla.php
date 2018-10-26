<?php
require ('fpdf/fpdf.php');

class PDF extends FPDF
{

	function Header()
	{
		$this->Image('../img/logo-Ministerio.jpg', 35,15,30);
		$this->Image('../img/cicpc_logo_trns.png', 580,5,30);

		$this->SetFont('Arial','B',10);

		$this->Cell(30);
		$this->SetX(147);
		$this->Cell(290,10, 'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(198);
		$this->Cell(190,10, 'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(145);
		$this->Cell(290,10, utf8_decode('CUERPO DE INVESTIGACIONES CIENTÍFICA, PENALES Y CRIMINALÍSTICAS'),2,0,'C');
		$this->Ln(5);

		$this->Cell(30);
		$this->SetX(149);
		$this->Cell(290,10, utf8_decode('DIRECCIÓN DE TECNOLOGÍA - DIVISIÓN DE SISTEMAS'),2,0,'C');
		$this->Ln(5);


		$this->Ln(10);
		$this->Cell(30);
		$this->SetX(150);
		$this->Cell(290,10, 'Reporte General',2,1,'C');

				$this->SetX(10);
				$this->Cell(540,10, 'FORMATO DE INVENTARIO DE BIENES NACIONALES',1,0,'C');
				$this->Cell(40,10, utf8_decode('N° 01/08'),1,0,'C');
				$this->Cell(40,10, 'FECHA: 21/04/2018',1,1,'C');


				$this->Cell(620,10,'',1,1,'C');


				$this->Cell(620,10,'ORGANISMO',1,1,'C');
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'15',1,0,'C');
				//$this->SetX(10);
				$this->Cell(540,10,utf8_decode('DENOMINACIÓN: MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES JUSTICIA Y PAZ'),1,1,'I');


				$this->Cell(620,10,'UNIDAD ADMINISTRADORA',1,1,'C');
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'9700',1,0,'C');
				//$this->SetX(10);
				$this->Cell(540,10,utf8_decode('DENOMINACIÓN: CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICAS'),1,1,'I');



				$this->Cell(620,10,'DEPENDENCIA USUARIA',1,1,'C');
				$this->Cell(40,10,utf8_decode('CÓDIGO'),1,0,'C');
				$this->Cell(40,10,'206',1,0,'C');
				//$this->SetX(10);
				$this->Cell(540,10,utf8_decode('DENOMINACIÓN: DIRECCION DE TECNOLOGIA (DIVISION DE SISTEMAS)'),1,1,'I');



				$this->Cell(620,10,utf8_decode('DIRECCIÓN DEL DESPACHO'),1,1,'C');
				$this->Cell(40,10,'',1,0,'C');
				$this->Cell(40,10,'',1,0,'C');
				//$this->SetX(10);
				$this->Cell(540,10,utf8_decode('UBICACIÓN: SEDE SAN AGUSTIN PISO 8'),1,1,'I');


				$this->Cell(620,10,'RESPONSABLE DEL USO',1,1,'C');
				$this->Cell(55,10,'NOMBRE Y APELLIDO',1,0,'C');
				$this->Cell(200,10,utf8_decode('KATIRIA ELENA PÉREZ SÁNCHEZ'),1,0,'C');
				$this->Cell(110,10,'C.I. 15.573.151',1,0,'C');
				$this->Cell(255,10,utf8_decode('CARGO: JEFA DE LA DIVISION'),1,1,'C');
				$this->SetX(190);
				$this->Cell(260,10,'INVENTARIO',1,0,'C');
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