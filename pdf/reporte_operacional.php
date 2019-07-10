<?php
  include('plantilla_operacional.php');
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
  $pdf->SetX(10);
  
   // <!-- Final de titulos -->
$pdf->Cell(45,7,utf8_decode('Policiales Activos'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Policiales De Vacaciones'),1,0,'C',1);
$pdf->Cell(50,7,utf8_decode('Policiales De Reposo'),1,0,'C',1);
$pdf->Cell(55,7,utf8_decode('Administrativos Activos'),1,0,'C',1);
$pdf->Cell(60,7,utf8_decode('Administrativos De Reposo'),1,0,'C',1);
$pdf->Cell(70,7,utf8_decode('Administrativos De Vacaciones'),1,0,'C',1);
$pdf->Cell(65,7,utf8_decode('Armas asignadas a Policiales'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Chalecos asignados'),1,0,'C',1);
$pdf->Cell(35,7,utf8_decode('Armas largas'),1,0,'C',1);
$pdf->Cell(30,7,utf8_decode('Vehículos'),1,0,'C',1);
$pdf->Cell(30,7,utf8_decode('Motos'),1,0,'C',1);
$pdf->Cell(40,7,utf8_decode('Radios portátiles'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(9);
   $pdf->Cell(70,7,utf8_decode($row['cedula']),1,0,'C',0);
   $pdf->Cell(70,7,utf8_decode($row['credencial']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_apellido']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['tipo_fun']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['tiempo_s']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['fec_iniv']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['fec_regv']),1,0,'C',0);
   $pdf->Cell(45,7,utf8_decode($row['dia_v']),1,0,'C',0); 
   $pdf->Cell(70,7,utf8_decode($row['vac_sol']),1,0,'C',0); 
    $pdf->Cell(70,7,utf8_decode($row['vac_sol']),1,0,'C',0);    
   $pdf->Cell(70,7,utf8_decode($row['vac_ven']),1,1,'C',0);  

  }



  $pdf->Output();
?>