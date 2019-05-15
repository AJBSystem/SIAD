<?php
  extract($_GET);
  include('plantilla_funcionarios.php');
  require('conexion.php');
  

$query = "SELECT cedula,credencial,rif,p_nombre, s_nombre,p_apellido,s_apellido,fec_nac,edad,genero,estado_c,grado_inst,correo_e
          FROM medicamentos 
          ORDER BY p_nombre";

  $resultado = $mysqli->query($query);
  $pdf = new PDF('L', 'mm', array(600,500));
  $pdf->AliasNbPages();
  $pdf->AddPage();


  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  
  $pdf->SetY(70);
  $pdf->SetX(120);
  $pdf->Cell(35,7,utf8_decode('Cedula'),1,0,'C',1);
  $pdf->Cell(35,7,utf8_decode('Credencial'),1,0,'C',1);
  $pdf->Cell(35,7,utf8_decode('Rif'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Primer Nombre'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Segundo Nombre'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Primer Apellido'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Segundo Apellido'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Fecha de Nacimiento'),1,0,'C',1);
  $pdf->Cell(25,7,utf8_decode('Edad'),1,0,'C',1);

 

  $pdf->Ln(7);
  while ( $row = $resultado->fetch_assoc() )
  {
  
  $pdf->SetX(120);
  $pdf->Cell(35,7,utf8_decode($row['cedula']),1,0,'C',0); 
  $pdf->Cell(35,7,utf8_decode($row['credencial']),1,0,'C',0);
  $pdf->Cell(35,7,utf8_decode($row['rif']),1,0,'C',0);
  $pdf->Cell(45,7,utf8_decode($row['p_nombre']),1,0,'C',0);  
  $pdf->Cell(45,7,utf8_decode($row['s_nombre']),1,0,'C',0);
  $pdf->Cell(45,7,utf8_decode($row['p_apellido']),1,0,'C',0);
  $pdf->Cell(45,7,utf8_decode($row['s_apellido']),1,0,'C',0);  
  $pdf->Cell(50,7,utf8_decode($row['fec_nac']),1,0,'C',0); 
  $pdf->Cell(25,7,utf8_decode($row['edad']),1,1,'C',0); 

  
  }

  


  $pdf->SetFont('Arial','',8);


  $pdf->Output();
?>