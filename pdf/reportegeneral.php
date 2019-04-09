<?php
	include('plantilla.php');
	require('conexion.php');

	$query = "SELECT * FROM medicamentos";
					

	$resultado = $mysqli->query($query);

	$pdf = new PDF('L', 'mm', array(825,500));
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(200,200,200);
	$pdf->SetFont('Arial','B',12);

	$pdf->SetX(20);

	$pdf->Cell(50,10,utf8_decode('Nombre de División'),1,0,'C',1);
	$pdf->Cell(30,10,'Cedula',1,0,'C',1);
	$pdf->Cell(30,10,utf8_decode('Credencial'),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode('Primer Nombre'),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode('Segundo Nombre'),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode('Primer Apellido'),1,0,'C',1);
	$pdf->Cell(40,10,'Segundo Apellido',1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode('Fecha de Nacimiento'),1,0,'C',1);
	$pdf->Cell(20,10,utf8_decode('Edad'),1,0,'C',1);
	$pdf->Cell(30,10,utf8_decode('Género'),1,0,'C',1);
	$pdf->Cell(45,10,utf8_decode('Fecha de Ingreso'),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode('Tiempo de Servicio'),1,0,'C',1);
	$pdf->Cell(60,10,utf8_decode('Cargo'),1,0,'C',1);
	$pdf->Cell(85,10,utf8_decode('Rango'),1,0,'C',1);
	$pdf->Cell(95,10,utf8_decode('Correo Institucional'),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode('Telefono Celular'),1,0,'C',1);
	$pdf->Cell(30,10,'Estatus',1,1,'C',1);

	
	while ( $row = $resultado->fetch_assoc() )
	{
	
	$pdf->SetX(20);

	$pdf->Cell(50,10,utf8_decode($row['selec_div']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['cedula']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['credencial']),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode($row['p_nombre']),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode($row['s_nombre']),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode($row['p_apellido']),1,0,'C',0);
	$pdf->Cell(40,10,utf8_decode($row['s_apellido']),1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['fec_nac']),1,0,'C',0);
	$pdf->Cell(20,10,utf8_decode($row['edad']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['genero']),1,0,'C',0);
	$pdf->Cell(45,10,utf8_decode($row['fec_ing']),1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['tiempo_s']),1,0,'C',0);
	$pdf->Cell(60,10,utf8_decode($row['cargo']),1,0,'C',0);
	$pdf->Cell(85,10,utf8_decode($row['rango']),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode($row['correo_i']),1,0,'C',0);
	$pdf->Cell(50,10,utf8_decode($row['tel_cel']),1,0,'C',0);
	$pdf->Cell(30,10,utf8_decode($row['estatus']),1,1,'C',0);	

	}
	
	$pdf->Output();
?>