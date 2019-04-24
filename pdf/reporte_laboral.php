<?php
  include('plantilla_laboral.php');
  require('conexion.php');

  $query = "SELECT p_nombre,p_apellido,credencial,selec_div,fec_ing,tiempo_s,cargo,rango,ubic_fis,correo_i,estatus
            FROM medicamentos 
            ORDER BY p_nombre";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(30);
  
   // <!-- Final de titulos -->
  $pdf->Cell(40,7,utf8_decode('Primer Nombre'),1,0,'C',1);
  $pdf->Cell(40,7,utf8_decode('Primer Apellido'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Credencial'),1,0,'C',1);
  $pdf->Cell(60,7,utf8_decode('Nombre de la División'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Fecha de Ingreso'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Tiempo de Servicio'),1,0,'C',1);
  $pdf->Cell(60,7,utf8_decode('Cargo'),1,0,'C',1);
  $pdf->Cell(60,7,utf8_decode('Rango'),1,0,'C',1);
  $pdf->Cell(60,7,utf8_decode('Ubicación Fisica'),1,0,'C',1);
  $pdf->Cell(65,7,utf8_decode('Correo Institucional'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Estatus'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(30);
   $pdf->Cell(40,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(40,7,utf8_decode($row['p_apellido']),1,0,'C',0);
   $pdf->Cell(30,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(60,7,utf8_decode($row['selec_div']),1,0,'C',0);
   $pdf->Cell(50,7,utf8_decode($row['fec_ing']),1,0,'C',0);
   $pdf->Cell(50,7,utf8_decode($row['tiempo_s']),1,0,'C',0);
   $pdf->Cell(60,7,utf8_decode($row['cargo']),1,0,'C',0);
   $pdf->Cell(60,7,utf8_decode($row['rango']),1,0,'C',0);
   $pdf->Cell(60,7,utf8_decode($row['ubic_fis']),1,0,'C',0);
   $pdf->Cell(65,7,utf8_decode($row['correo_i']),1,0,'C',0);
   $pdf->Cell(30,7,utf8_decode($row['estatus']),1,1,'C',0);  

  }



  $pdf->Output();
?>