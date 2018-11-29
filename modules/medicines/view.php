<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de Funcionarios
      <a class="btn btn-primary btn-social pull-right" href="?module=form_medicines&form=add" title="agregar" data-toggle="tooltip">
    <i class="fa fa-plus"></i> Agregar
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
             Nuevos datos de funcionario ha sido  almacenado correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del Funcionario modificados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Se eliminaron los datos del Funcionario
            </div>";
    }
    ?>

<div class="box box-primary">
<div class="box-body">
    
  <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
    <thead>
      <tr>
        <th class="center">No.</th>
        <th class="center">Codigo</th>         
        <th class="center">Cedula</th>
        <th class="center">N° de Credencial</th>
        <th class="center">Primer Nombre</th>
        <th class="center">Primer Apellido</th>
        <th class="center">Fecha de Nacimiento</th>
        <th class="center">Edad</th>
      </tr>
    </thead>
          <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,p_apellido,p_nombre,fec_nac,edad FROM medicamentos ORDER BY codigo DESC")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $cedula = format_rupiah($data['cedula']);
              $credencial = format_rupiah($data['credencial']);
           
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo]</td>
                      <td width='70' align='center'>$cedula</td>
                      <td width='100' align='center'>$credencial</td>
                      <td width='80' align='left'>$data[p_nombre]</td>
                      <td width='80' align='left'>$data[p_apellido]</td>
                      <td width='100' align='center'>$data[fec_nac]</td>
                      <td width='20' align='center'>$data[edad]</td>
                      <td class='center' width='80'>
                      <div>
                      <a data-toggle='tooltip' data-placement='top' title='modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                          <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                      </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/medicines/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('estas seguro de eliminar <?php echo $data['p_nombre']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
              echo "    </div>
                      </td>
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