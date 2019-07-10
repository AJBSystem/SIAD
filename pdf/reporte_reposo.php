<?php
  include('plantilla_reposo.php');
  require('conexion.php');

  $query = "SELECT cedula,credencial,p_nombre,p_apellido,tipo_fun,fec_inir,fec_regr,dia_r,motivo_r
            FROM medicamentos 
            ORDER BY tipo_d";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(32);
  
   // <!-- Final de titulos -->
$pdf->Cell(45,7,utf8_decode('Cedula'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Credencial'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Primer Nombre'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Primer Apellido'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Tipo de Funcionario'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Fecha de Inicio'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Fecha de Regreso'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Dias de Reposo'),1,0,'C',1);
$pdf->Cell(120,7,utf8_decode('Motivo'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(32);
   $pdf->Cell(45,7,utf8_decode($row['cedula']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_apellido']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_fun']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['fec_inir']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['fec_regr']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['dia_r']),1,0,'C',0);    
   $pdf->Cell(120,7,utf8_decode($row['motivo_r']),1,1,'C',0);  

  }



  $pdf->Output();
?>