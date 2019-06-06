<!-- Inicio del contenedor del titulo -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de Funcionarios
      <a class="btn btn-primary btn-social pull-right" href="?module=form_medicines&form=add" title="Agregar" data-toggle="tooltip">
    <i class="fa fa-plus"></i> Agregar
      </a>
  </h1>

</section>


<!-- Fin del contenedor del titulo -->
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
             Nuevo funcionario almacenado correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del funcionario modificados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Se eliminaron los datos del funcionario
            </div>";
    }
    ?>


<div class="box box-primary">

<!-- Inicio del Formulario -->


<div class="box-body">

<table id="dataTables1" class="table table-bordered table-striped table-hover">
      
  <thead>
    <tr>
      <th class="center">No.</th>
        <th class="center">Cedula</th>
          <th class="center">N° de Credencial</th>         
            <th class="center">Primer Nombre</th>
              <th class="center">Primer Apellido</th>
                <th class="center">Fecha de Nacimiento</th>
                  <th class="center">Edad</th>
                    <th class="center">Telefono Celular</th>
                        <th class="center">Funciones</th>
    </tr>
  </thead>
    
    <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,p_apellido,p_nombre,fec_nac,edad,tel_cel FROM medicamentos ORDER BY codigo DESC")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $cedula = format_rupiah($data['cedula']);
              $credencial = format_rupiah($data['credencial']);

           
            echo "<tr>
                    <td width='20' class='center'>$no</td>
                    <td width='20' align='center'>$cedula</td>
                    <td width='5' align='center'>$credencial</td>
                    <td width='70' align='center'>$data[p_nombre]</td>
                    <td width='70' align='center'>$data[p_apellido]</td>
                    <td width='85' align='center'>$data[fec_nac]</td>
                    <td width='10' align='center'>$data[edad]</td>
                    <td width='90' align='center'>$data[tel_cel]</td>
                     <td class='center' width='80'>
                      <div>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                          <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                      </a>
                      <a data-toggle='tooltip' data-placement='top' title='Ver Perfil' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines_transaction&form=add'>
                          <i style='color:#fff' class='fa fa-plus'></i>
                      </a>

                      "; 
            ?>

                     <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/medicines/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('¿Quieres eliminar a <?php echo $data['p_nombre']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a></td>
     
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
