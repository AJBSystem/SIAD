<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i>Datos Hijos De Funcionarios
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Reporte</li>
    <li class="active"> Registro hijos de funcionarios</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="GET" action="modules/stock_report/print.php" target="_blank">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-1">Fecha</label>
              <div class="col-sm-2">
                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal" autocomplete="off" required>
              </div>

              <label class="col-sm-1">Hasta</label>
              <div class="col-sm-2">
                <input style="margin-left:-35px" type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_akhir" autocomplete="off" required>
              </div>
            </div>
          </div>

       

        
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Cedula</th>
                <th class="center">Primer Nombre</th>
                <th class="center">Segundo Nombre</th>
                <th class="center">Primer Apellido</th>
                <th class="center">Segundo Apellido</th>
                <th class="center">Fecha de Nacimiento</th>
                <th class="center">Edad</th>
                <th class="center">Parentesco</th>
                <th class="center">Estudiante</th>
                <th class="center">Funcionario</th>
                <th class="center">Información Médica</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT cedula,p_nombre,s_nombre,p_apellido,s_apellido,fec_nac,edad,parentesco,estudiante,funcionario,inf_med FROM familiares ORDER BY cedula ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
             
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[cedula]</td>
                      <td width='80'>$data[p_nombre]</td>
                      <td width='80'>$data[s_nombre]</td>
                      <td width='80'>$data[p_apellido]</td>
                      <td width='80'>$data[s_apellido]</td>
                      <td width='80'>$data[fec_nac]</td>
                      <td width='80'>$data[edad]</td>
                      <td width='80'>$data[parentesco]</td>
                      <td width='80'>$data[estudiante]</td>
                      <td width='80'>$data[funcionario]</td>
                      <td width='80'>$data[inf_med]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>

</section><!-- /.content

          
          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>
        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->