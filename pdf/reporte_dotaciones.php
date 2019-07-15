<?php
  include('plantilla_dotaciones.php');
  require('conexion.php');

  $query = "SELECT tipo_d,n_serial,marca_d,modelo_d,calibre,p_nombre,s_nombre,credencial,estatus,tipo_fun
            FROM medicamentos 
            ORDER BY tipo_d";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(60);
  
   // <!-- Final de titulos -->
$pdf->Cell(55,7,utf8_decode('Primer Nombre'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Primer Apellido'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Crendecial'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Tipo de Dotación'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Tipo de Funcionario'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Numero de Serial'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Marca'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Modelo'),1,0,'C',1);
$pdf->Cell(40,7,utf8_decode('Calibre'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(60);
   $pdf->Cell(55,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['s_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_d']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_fun']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['n_serial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['marca_d']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['modelo_d']),1,0,'C',0);    
   $pdf->Cell(40,7,utf8_decode($row['calibre']),1,1,'C',0);  

  }



  $pdf->Output();
?>