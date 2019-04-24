<section class="content-header">
  <h1>
    <i class="fa fa-sign-in icon-title"></i> Funcionarios
      <a class="btn btn-primary btn-social pull-right" href="?module=form_medicines_transaction&form=add" title="Agregar" data-toggle="tooltip">
    <i class="fa fa-plus"></i> VER PERFIL 
      </a>
  </h1>
</section>

<section class="content">
  <div class="row">
  <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 

    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos de funcionarios han sido registrado correctamente.
            </div>";
    }
    ?>

<div class="box box-primary">
<div class="box-body">
         
  <table id="dataTables1" class="table table-bordered table-striped table-hover">
           
    <thead>
      <tr>
        <th class="center">No.</th>
        <th class="center">Codigo de Transación</th>
        <th class="center">Fecha</th>
        <th class="center">Codigo</th>
        <th class="center">Medicamento</th>
				<th class="center">Tipo</th>
        <th class="center">Cant.</th>
        <th class="center">Unidad</th>
      </tr>
    </thead>

          <tbody>

            <?php  
            $no = 1;
           
            $query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.fecha,a.codigo,a.numero,b.codigo,b.nombre,b.unidad
                                            FROM transaccion_medicamentos as a INNER JOIN medicamentos as b ON a.codigo=b.codigo ORDER BY codigo_transaccion DESC")
                                            or die('error '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
              $fecha         = $data['fecha'];
              $exp             = explode('-',$fecha);
              $fecha2   = $exp[2]."-".$exp[1]."-".$exp[0];

             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='100' class='center'>$data[codigo_transaccion]</td>
                      <td width='80' class='center'>$fecha</td>
                      <td width='80' class='center'>$data[codigo]</td>
                      <td width='200'>$data[nombre]</td>
					  <td width='80' class='center'>$data[tipo_transaccion]</td>
                      <td width='100' align='right'>$data[numero]</td>
                      <td width='80' class='center'>$data[unidad]</td>
                    </tr>
                    <div>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                          <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                      </a>
                      <a data-toggle='tooltip' data-placement='top' title='Ver Perfil' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines_transaction&form=add'>
                          <i style='color:#fff' class='fa fa-plus'></i>
                      </a>";
              $no++;
            }
            ?>
          </tbody>
  </table>
          

<!-- Revisar para poner los botones de siguiente luego -->

<ul class="pagination pagination-split">
  <li><a href="#">A</a></li>
  <li><a href="#">B</a></li>
  <li><a href="#">Y</a></li>
  <li><a href="#">Z</a></li>
</ul>

</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!--/.col -->
</div>   <!-- /.row -->
</section><!-- /.content