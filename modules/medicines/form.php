 <?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Funcionario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=medicines"> Funcionario </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Realizando prueba con el repositorio de Vanesa-->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/medicines/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo,6) as codigo FROM medicamentos
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }


              $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo = "B$buat_id";
              ?>

         

              <div class="col-md-2">
                <label for="exampleInputEmail1">Codigo</label>
                <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="text" class="form-control" name="cedula" autocomplete="off" required> 
              </div>

              <div class="col-md-2">
                <label for="exampleInputEmail1">N° de Credencial</label>
                <input type="text" class="form-control" name="credencial" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Rif</label>
                <input type="text" class="form-control" name="rif" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Primer Nombre</label>
                <input type="text" class="form-control" name="p_nombre" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Segundo Nombre</label>
                <input type="text" class="form-control" name="s_nombre" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Primer Apellido</label>
                <input type="text" class="form-control" name="p_apellido" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
                <label for="exampleInputEmail1">Segundo Apellido</label>
                <input type="text" class="form-control" name="s_apellido" autocomplete="off" required> 
              </div>

             <div class="col-md-2">
             <label for="exampleInputEmail1">Fecha de Nacimiento</label>
              <input type="text" class="form-control" name="fec_nac" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Edad</label>
              <input type="text" class="form-control" name="edad" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Telefono Celular</label>
              <input type="text" class="form-control" name="tel_cel" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Telefono Habitacion</label>
              <input type="text" class="form-control" name="tel_hab" autocomplete="off" required> 
            </div>

           <div class="col-md-2">
             <label for="exampleInputEmail1">Telefono Emergencias</label>
              <input type="text" class="form-control" name="tel_emerg" autocomplete="off" required> 
            </div>

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Género</label>
                        <select class="form-control" name="genero"  required>
                          <option>Femenino</option>
                          <option>Masculino</option>
                        </select>
               
                  </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=medicines" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,rif,p_nombre,s_nombre,p_apellido,s_apellido,fec_nac,edad,genero,tel_cel,tel_hab,tel_emerg FROM medicamentos WHERE codigo='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Funcionario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=medicines"> Funcionario </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/medicines/proses.php?act=update" method="POST">
            <div class="box-body">


              <div class="col-md-2">
                <label for="exampleInputEmail1">Codigo</label>
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
              </div>



              <div class="col-md-2">
              <label for="exampleInputEmail1">Cedula</label>
                  <input type="text" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
              </div>

             <div class="col-md-2">
              <label for="exampleInputEmail1">Credencial</label>
                  <input type="text" class="form-control" name="credencial" autocomplete="off" value="<?php echo $data['credencial']; ?>" required>
              </div>

             <div class="col-md-2">
              <label for="exampleInputEmail1">Rif</label>
                  <input type="text" class="form-control" name="rif" autocomplete="off" value="<?php echo $data['rif']; ?>" required>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Primer Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="p_nombre" autocomplete="off" value="<?php echo $data['p_nombre']; ?>" required>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label">Segundo Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="s_nombre" autocomplete="off" value="<?php echo $data['s_nombre']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Primer Apellido</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="p_apellido" autocomplete="off" value="<?php echo $data['p_apellido']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Segundo Apellido</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="s_apellido" autocomplete="off" value="<?php echo $data['s_apellido']; ?>" required>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="fec_nac" autocomplete="off" value="<?php echo $data['fec_nac']; ?>" required>
                </div>
              </div>          

                <div class="form-group">
                <label class="col-sm-2 control-label">Edad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="edad" autocomplete="off" value="<?php echo $data['edad']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Telefono Celular</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tel_cel" autocomplete="off" value="<?php echo $data['tel_cel']; ?>" required>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Telefono Habitacion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tel_hab" autocomplete="off" value="<?php echo $data['tel_hab']; ?>" required>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Telefono Emergencias</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tel_emerg" autocomplete="off" value="<?php echo $data['tel_emerg']; ?>" required>
                </div>
              </div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Género</label>
                  <div class="col-sm-5">
                        <select class="form-control" name="genero" autocomplete="off" value="<?php echo $data['genero']; ?>" required>
                          <option>Femenino</option>
                          <option>Masculino</option>
                        </select>
  </div>
                  </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=medicines" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<?php
}
?>