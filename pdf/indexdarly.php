<?php
	include('plantilla.php');
	//require('conexion.php');

	//$query = "SELECT e.estado, m.id_municipio, m.municipio FROM t_municipio AS m INNER JOIN t_estado AS e ON m.id_estado=e.id_estado";
	//$resultado = $mysqli->query($query);

	$pdf = new PDF('L', 'mm', array(612,792));
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);

	$pdf->Ln(3);
	$pdf->Cell(30);
	$pdf->SetY(63);
	$pdf->SetX(190);
	$pdf->Cell(450,15, "Datos Personales",1,0,'C',1);

	$pdf->Ln();
	

	//caja en la que vas a colocar la foto								**
	$pdf->SetFillColor(80,120,200);								//		**
	$pdf->Rect(105,63,85,88,'F');								   	  //**			
// para mostrar la foto en forma dinamica								**
// $query4 = pg_query("SELECT foto FROM persona WHERE cedula='$ced'");	**
// $directorio = '<img src="../img/sin-foto.png"';						**
// $res = pg_fetch_array($query4);										**
															//			**
// if (file_exists($res['foto'])){										**			
// $pdf->Image($res['foto'],40,73,50,48);//aqui va la imagen			**
// }else{																**
	// $res = '';														**	
// $pdf->Cell($res);//aqui va la imagen									**
//}																		**		
//----***************************----------------------------------------*
$pdf->SetFillColor(80,150,200);
$pdf->Cell(40);
$pdf->Cell(5,5);
$pdf->Cell(135);
$pdf->Cell(112.5,10,'Primer Nombre',1,0,'C',1);
$pdf->Cell(112.5,10,'Segundo Nombre',1,0,'C',1);
$pdf->Cell(112.5,10,'Primer Apellido',1,0,'C',1);
$pdf->Cell(112.5,10,'Segundo Apellido',1,0,'C',1);

$pdf->Ln();

$pdf->Cell(180);

$pdf->Cell(112.5,6,1,1,'C');
$pdf->Cell(112.5,6,1,1,'C');
$pdf->Cell(112.5,6,1,1,'C');
$pdf->Cell(112.5,6,1,1,'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(180);
$pdf->SetFillColor(80,150,200);
$pdf->Cell(90,10,'Fec Nac',1,0,'C',1);
$pdf->Cell(90,10,'Cedula',1,0,'C',1);
$pdf->Cell(90,10,'Genero',1,0,'C',1);
$pdf->Cell(90,10,'Email',1,0,'C',1);
$pdf->Cell(90,10,'Telefono',1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180);
$pdf->Cell(90,6,1,1,'C',0);
$pdf->Cell(90,6,1,1,'C',0);
$pdf->Cell(90,6,1,1,'C',0);
$pdf->Cell(90,6,1,1,'C',0);
$pdf->Cell(90,6,1,1,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(180);
$pdf->SetFillColor(80,150,200);

$pdf->Cell(32,10,'Direccion',1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180);

$pdf->Cell(450,6,1,1,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
	$pdf->SetFont('Arial','',8);

	// while ($row = $resultado->fetch_assoc())
	// {
	// 	$pdf->Cell(70,6,utf8_decode($row['estado']),1,0,'C');
	// 	$pdf->Cell(20,6,($row['id_municipio']),1,0,'C');
	// 	$pdf->Cell(70,6,utf8_decode($row['municipio']),1,0,'C');			
	// }
	$pdf->Output();
?>