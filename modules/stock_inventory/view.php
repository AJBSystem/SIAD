

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Datos de Funcionarios 

    <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Cedula</th>
                <th class="center">Credencial</th>
                <th class="center">Primer Nombre</th>
                <th class="center">Primer Apellido</th>
                <th class="center">Fecha de Nacimiento</th>
                <th class="center">Edad</th>
                <th class="center">Correo Institucional</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,p_nombre,p_apellido,fec_nac,edad,correo_i FROM medicamentos ORDER BY nombre ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
         
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[cedula]</td>
                      <td width='80' class='center'>$data[credencial]</td>
                      <td width='140'>$data[p_nombre]</td>
                       <td width='140'>$data[p_apellido]</td>
                       <td width='160'>$data[fec_nac]</td>
                       <td width='60' class='center'>$data[edad]</td>
                       <td width='120'>$data[correo_i]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content