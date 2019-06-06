<!-- Inicio del contenedor del titulo -->

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i>Informe de funcionarios de la dirección de tecnologia
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Informe</li>
  </ol>
</section>

<!-- Fin del contenedor del titulo -->

<section class="content">

<div class="box box-primary">

<!-- Inicio del Formulario -->

<div class="btn-group pull-right"><a href="pdf/reportegeneral.php">
  <button type='button'class="btn btn-primary" data-toggle="modal">
    <span class="glyphicon glyphicon-print" ></span> Imprimir</button></a>
</div>


<div class="box-body">

<table id="dataTables1" class="table table-bordered table-striped table-hover">
      
  <thead>
    <tr>
      <th class="center">No.</th>
        <th class="center">Nombre de la División</th>
          <th class="center">Cedula</th>         
            <th class="center">Credencial</th>
              <th class="center">Primer Nombre</th>
                <th class="center">Primer Apellido</th>
                  <th class="center">Fecha de Nacimiento</th>
                    <th class="center">Edad</th>
                      <th class="center">Fecha de Ingreso</th>
                        <th class="center">Telefono Celular</th>
    </tr>
  </thead>
    
    <tbody>
      <?php  
        $no = 1;
          $query = mysqli_query($mysqli, "SELECT cedula,credencial,selec_div,p_nombre,p_apellido,fec_nac,edad,fec_ing,tel_cel FROM medicamentos ORDER BY cedula DESC")
                                            or die('error: '.mysqli_error($mysqli));

          while ($data = mysqli_fetch_assoc($query)) { 
          $cedula = format_rupiah($data['cedula']);
          $credencial = format_rupiah($data['credencial']);
           
            echo "<tr>
                    <td width='20' class='center'>$no</td>
                      <td width='90' align='left'>$data[selec_div]</td>
                        <td width='20' align='center'>$cedula</td>
                          <td width='5' align='center'>$credencial</td>
                            <td width='70' align='left'>$data[p_nombre]</td>
                              <td width='70' align='left'>$data[p_apellido]</td>
                                <td width='85' align='center'>$data[fec_nac]</td>
                                  <td width='10' align='center'>$data[edad]</td>
                                    <td width='80' align='center'>$data[fec_ing]</td>
                                      <td width='70' align='center'>$data[tel_cel]</td>
<div>
                     
";
      ?>
                          
      <?php
        echo "    </div>
                  </td>
                  </tr>";
              $no++;
            }
            ?>
</tbody>
</table>

            
</div>
</form>
</section><!-- /.content -->