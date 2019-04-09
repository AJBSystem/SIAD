<?php
  include('plantilla_padres.php');
  require('conexion.php');

  $query = "SELECT cedulaf,p_nombref,s_nombref,p_apellidof,s_apellidof,fec_nacf,edadf,generof,parentesco,estudiante,funcionario,inf_medf,p_nombre,p_apellido,credencial
            FROM medicamentos 
            ORDER BY cedulaf";
          

  $resultado = $mysqli->query($query);

  $pdf = new PDF('L', 'mm', array(500,600));
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->SetY(75);
  $pdf->SetX(10);
  
   // <!-- Inicio de titulos -->

   $pdf->Cell(40,7,utf8_decode('Primer Nombre'),1,0,'C',1);
   $pdf->Cell(40,7,utf8_decode('Segundo Nombre'),1,0,'C',1);
   $pdf->Cell(30,7,utf8_decode('Credencial'),1,0,'C',1);
   //Por ahora se llamara nombre del padre
  $pdf->Cell(30,7,utf8_decode('Cedula'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Primer Nombre del Padre'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Segundo Nombre'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Primer Apellido del Padre'),1,0,'C',1);
  $pdf->Cell(55,7,utf8_decode('Segundo Apellido'),1,0,'C',1);
  $pdf->Cell(47,7,utf8_decode('Fecha de Nacimiento'),1,0,'C',1);
  $pdf->Cell(25,7,utf8_decode('Edad'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Género'),1,0,'C',1);
  $pdf->Cell(40,7,utf8_decode('Parentesco'),1,0,'C',1);
  $pdf->Cell(30,7,utf8_decode('Funcionario'),1,0,'C',1);
  $pdf->Cell(50,7,utf8_decode('Información Médica'),1,1,'C',1);

  // <!-- Final de titulos -->
  
  while ( $row = $resultado->fetch_assoc() )
  {
   $pdf->SetX(10);
   $pdf->Cell(40,7,utf8_decode($row['p_nombre']),1,0,'C',0);
   $pdf->Cell(40,7,utf8_decode($row['p_apellido']),1,0,'C',0); 
   $pdf->Cell(30,7,utf8_decode($row['credencial']),1,0,'C',0); 
   $pdf->Cell(30,7,utf8_decode($row['cedulaf']),1,0,'C',0);
   $pdf->Cell(55,7,utf8_decode($row['p_nombref']),1,0,'C',0); 
   $pdf->Cell(55,7,utf8_decode($row['s_nombref']),1,0,'C',0); 
   $pdf->Cell(55,7,utf8_decode($row['p_apellidof']),1,0,'C',0); 
   $pdf->Cell(55,7,utf8_decode($row['s_apellidof']),1,0,'C',0); 
   $pdf->Cell(47,7,utf8_decode($row['fec_nacf']),1,0,'C',0);
   $pdf->Cell(25,7,utf8_decode($row['edadf']),1,0,'C',0); 
   $pdf->Cell(30,7,utf8_decode($row['generof']),1,0,'C',0); 
   $pdf->Cell(40,7,utf8_decode($row['parentesco']),1,0,'C',0);
   $pdf->Cell(30,7,utf8_decode($row['funcionario']),1,0,'C',0);     
   $pdf->Cell(50,7,utf8_decode($row['inf_medf']),1,1,'C',0);  


  }

  $pdf->Output();
?>
