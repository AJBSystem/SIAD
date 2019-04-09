<?php
  include('plantilla_vehiculo.php');
  require('conexion.php');

  $query = "SELECT tipo_v,placa,combustible,serial_carro,marca,modelo,color,alo,p_nombre,p_apellido,credencial
            FROM medicamentos 
            ORDER BY tipo_v";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(20);
  
   // <!-- Final de titulos -->
  $pdf->Cell(55,7,utf8_decode('Primer Nombre'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Primer Apellido'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Credencial'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Tipo de Vehiculo'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Placa'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Combustible'),1,0,'C',1);
  $pdf->Cell(70,7,utf8_decode('Serial de Carroceria'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Marca'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Modelo'),1,0,'C',1);
  $pdf->Cell(45,7,utf8_decode('Color'),1,0,'C',1);
  $pdf->Cell(40,7,utf8_decode('Año'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(20);
   $pdf->Cell(55,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_apellido']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_v']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['placa']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['combustible']),1,0,'C',0);
   $pdf->Cell(70,7,utf8_decode($row['serial_carro']),1,0,'C',0); 
   $pdf->Cell(50,7,utf8_decode($row['marca']),1,0,'C',0); 
   $pdf->Cell(50,7,utf8_decode($row['modelo']),1,0,'C',0); 
   $pdf->Cell(45,7,utf8_decode($row['color']),1,0,'C',0);  
   $pdf->Cell(40,7,utf8_decode($row['alo']),1,1,'C',0);  

  }



  $pdf->Output();
?>