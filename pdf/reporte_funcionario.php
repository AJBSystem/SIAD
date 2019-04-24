<?php
  include('plantilla_funcionario.php');
  require('conexion.php');

  $query = "SELECT p_nombre,p_apellido,s_nombre
            FROM medicamentos 
            ORDER BY p_nombre";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(20);
  
   // <!-- Final de titulos -->
  

$pdf->Cell(490,10,utf8_decode('Datos Basicos'),1,1,'C',1);


  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {

   $pdf->SetX(20);
   $pdf->Cell(50,10,'Primer Nombre:', 1,0,'C',0);
   $pdf->SetX(70);
   $pdf->Cell(40,10,utf8_decode($row['p_nombre']),1,0,'C',0); 
   $pdf->SetX(110);
   $pdf->Cell(50,10,'Segundo Nombre:', 1,0,'C',0);
   $pdf->SetX(160);
   $pdf->Cell(40,10,utf8_decode($row['s_nombre']),1,0,'C',0); 
   $pdf->SetX(200);
   $pdf->Cell(50,10,'Primer Apellido:', 1,0,'C',0);
   $pdf->SetX(250);
   $pdf->Cell(40,10,utf8_decode($row['s_nombre']),1,0,'C',0); 
   $pdf->SetX(290);
   $pdf->Cell(50,10,'Segundo Apellido:', 1,0,'C',0);
   $pdf->SetX(340);
   $pdf->Cell(50,10,'Credencial:', 1,0,'C',0);
   $pdf->SetX(390);
   $pdf->Cell(40,10,utf8_decode($row['s_nombre']),1,0,'C',0); 

   $pdf->Cell(40,10,utf8_decode($row['p_apellido']),1,1,'C',0);  

  }

//LICENCIATURA  //CARGO   //CÓDIGO POSTAL
$pdf->SetXY(25, 140);
$pdf->Cell(10, 8, 'LINCECIATURA EN:', 0, 'L');
$pdf->Line(27, 154, 65, 154);
//*****
$pdf->SetXY(80, 140);
$pdf->Cell(10, 8, 'CARGO:', 0, 'L');
$pdf->Line(75, 154, 105, 154);
//*****
$pdf->SetXY(125, 140);
$pdf->Cell(10, 8, utf8_decode('CÓDIGO POSTAL:'), 0, 'L');
$pdf->Line(120, 154, 170, 154);

  $pdf->Output();
?>