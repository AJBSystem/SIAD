<?php
  include('plantilla_vacaciones.php');
  require('conexion.php');

  $query = "SELECT cedula,credencial,p_nombre,p_apellido,tipo_fun,tiempo_s,fec_iniv,fec_regv,dia_v,vac_sol,vac_ven
            FROM medicamentos 
            ORDER BY tipo_d";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(18);
  
   // <!-- Final de titulos -->
$pdf->Cell(40,7,utf8_decode('Cedula'),1,0,'C',1);
$pdf->Cell(40,7,utf8_decode('Credencial'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Primer Nombre'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Primer Apellido'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Tipo de Funcionario'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Tiempo de Servicio'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Fecha de Inicio'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Fecha de Regreso'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Dias de Vacaciones'),1,0,'C',1);
$pdf->Cell(70,7,utf8_decode('N° de Vacaciones Solicitadas'),1,0,'C',1);
$pdf->Cell(70,7,utf8_decode('N° de Vacaciones Vencidas'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(18);
   $pdf->Cell(40,7,utf8_decode($row['cedula']),1,0,'C',0);
   $pdf->Cell(40,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_apellido']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_fun']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['tiempo_s']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['fec_iniv']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['fec_regv']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['dia_v']),1,0,'C',0); 
   $pdf->Cell(70,7,utf8_decode($row['vac_sol']),1,0,'C',0);    
   $pdf->Cell(70,7,utf8_decode($row['vac_ven']),1,1,'C',0);  

  }



  $pdf->Output();
?>