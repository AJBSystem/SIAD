<?php
  include('plantilla_hijos.php');
  require('conexion.php');
  $query = "SELECT cedulaf,p_nombref,s_nombref,p_apellidof,s_apellidof,fec_nacf,edadf,generof,estudiante,funcionario,inf_medf,p_nombre,s_nombre,credencial
            FROM medicamentos 
            ORDER BY cedulaf";
          
  $resultado = $mysqli->query($query);
  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(8);
  
   // <!-- Final de titulos -->
  $pdf->Cell(68,7,utf8_decode('Primer Nombre del funcionario'),1,0,'C',1);
  $pdf->Cell(72,7,utf8_decode('Segundo Nombre del funcionario'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Credencial'),1,0,'C',1);
  $pdf->Cell(40,7,utf8_decode('Cedula del hijo'),1,0,'C',1);
  //Por ahora se llamara nombre del hijo
  $pdf->Cell(42,7,utf8_decode('Primer Nombre'),1,0,'C',1);
  $pdf->Cell(42,7,utf8_decode('Segundo Nombre'),1,0,'C',1);
  $pdf->Cell(42,7,utf8_decode('Primer Apellido'),1,0,'C',1);
  $pdf->Cell(42,7,utf8_decode('Segundo Apellido'),1,0,'C',1);
  $pdf->Cell(47,7,utf8_decode('Fecha de Nacimiento'),1,0,'C',1);
  $pdf->Cell(25,7,utf8_decode('Edad'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Género'),1,0,'C',1);
  $pdf->Cell(27,7,utf8_decode('Estudiante'),1,0,'C',1);
  $pdf->Cell(27,7,utf8_decode('Funcionario'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Información Médica'),1,1,'C',1);
  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(8);
   $pdf->Cell(68,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(72,7,utf8_decode($row['s_nombre']),1,0,'C',0);
   $pdf->Cell(30,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(40,7,utf8_decode($row['cedulaf']),1,0,'C',0);
   $pdf->Cell(42,7,utf8_decode($row['p_nombref']),1,0,'C',0); 
   $pdf->Cell(42,7,utf8_decode($row['s_nombref']),1,0,'C',0); 
   $pdf->Cell(42,7,utf8_decode($row['p_apellidof']),1,0,'C',0); 
   $pdf->Cell(42,7,utf8_decode($row['s_apellidof']),1,0,'C',0); 
   $pdf->Cell(47,7,utf8_decode($row['fec_nacf']),1,0,'C',0);
   $pdf->Cell(25,7,utf8_decode($row['edadf']),1,0,'C',0); 
   $pdf->Cell(30,7,utf8_decode($row['generof']),1,0,'C',0); 
   $pdf->Cell(27,7,utf8_decode($row['estudiante']),1,0,'C',0); 
   $pdf->Cell(27,7,utf8_decode($row['funcionario']),1,0,'C',0);     
   $pdf->Cell(50,7,utf8_decode($row['inf_medf']),1,1,'C',0);  
  }
  $pdf->Output();
?>