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

  <!-- Main content -->
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
                <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>"  required>
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
                    <label for="exampleInputEmail1">Género</label>
                        <select class="form-control" name="genero"  required>
                          <option>Femenino</option>
                          <option>Masculino</option>
                        </select>
                  </div>

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Lugar de Nacimiento</label>
                        <select class="form-control" name="lugar_nac"  required>
                          <option>Amazonas</option>
                          <option>Anzoategui</option>
                          <option>Apure</option>
                          <option>Aragua</option>
                          <option>Barinas</option>
                          <option>Bolívar</option>
                          <option>Carabobo</option>
                          <option>Cojedes</option>
                          <option>Delta Amacuro</option>
                          <option>Distrito Capital</option>
                          <option>Falcón</option>
                          <option>Guárico</option>
                          <option>Lara</option>
                          <option>Mérida</option>
                          <option>Miranda</option>
                          <option>Monagas</option>
                          <option>Nueva Esparta</option>
                          <option>Portuguesa</option>
                          <option>Sucre</option>
                          <option>Táchira</option>
                          <option>Trujillo</option>
                          <option>Vargas</option>
                          <option>Yaracuy</option>
                          <option>Zulia</option>
                        </select>
                  </div>

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Estado Civil</label>
                        <select class="form-control" name="estado_c"  required>
                          <option>Soltero/a </option>
                          <option>Casado/a</option>
                          <option>Divorciado/a</option>
                          <option>Viudo/a</option>
                          <option>Concubinato/a</option>
                        </select>
                  </div>                  

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Grado de Instrucción</label>
                        <select class="form-control" name="grado_inst"  required>
                          <option>Primaria</option>
                          <option>Secundaria</option>
                          <option>Tecnico Superior</option>
                          <option>Universitario</option>
                          <option>Grado</option>
                          <option>Magister</option>
                          <option>Doctorado</option>
                        </select>
                  </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Correo Electronico</label>
              <input type="text" class="form-control" name="correo_e" autocomplete="off" required> 
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
             <label for="exampleInputEmail1">Estado</label>
              <input type="text" class="form-control" name="estado" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Municipio</label>
              <input type="text" class="form-control" name="municipio" autocomplete="off" required> 
            </div>

           <div class="col-md-2">
             <label for="exampleInputEmail1">Ciudad</label>
              <input type="text" class="form-control" name="ciudad" autocomplete="off" required> 
            </div>

           <div class="col-md-2">
             <label for="exampleInputEmail1">Parroquia</label>
              <input type="text" class="form-control" name="parroquia" autocomplete="off" required> 
            </div>

           <div class="col-md-2">
             <label for="exampleInputEmail1">Avenida</label>
              <input type="text" class="form-control" name="avenida" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Calle</label>
              <input type="text" class="form-control" name="calle" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Casa N°</label>
              <input type="text" class="form-control" name="casa" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Codigo del CP</label>
              <input type="text" class="form-control" name="codigo_cp" autocomplete="off" required> 
            </div>

            <div class="col-md-2">
             <label for="exampleInputEmail1">Serial del CP</label>
              <input type="text" class="form-control" name="serial_cp" autocomplete="off" required> 
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


      $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,rif,p_nombre,s_nombre,p_apellido,s_apellido,fec_nac,edad,lugar_nac,genero,tel_cel,tel_hab,tel_emerg,estado,estado_c,grado_inst,correo_e,municipio,ciudad,parroquia,avenida,calle,casa,codigo_cp,serial_cp FROM medicamentos WHERE codigo='$_GET[id]'") 

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

<div class="form-group">

              <div class="col-md-2">
                <label for="exampleInputEmail1">Codigo</label>
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" required>
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

               <div class="col-md-2">
              <label for="exampleInputEmail1">Primer Nombre</label>
                  <input type="text" class="form-control" name="p_nombre" autocomplete="off" value="<?php echo $data['p_nombre']; ?>" required>
              </div>


             <div class="col-md-2">
              <label for="exampleInputEmail1">Segundo Nombre</label>
                  <input type="text" class="form-control" name="s_nombre" autocomplete="off" value="<?php echo $data['s_nombre']; ?>" required>
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Primer Apellido</label>
                  <input type="text" class="form-control" name="p_apellido" autocomplete="off" value="<?php echo $data['p_apellido']; ?>" required>
              </div>

           <div class="col-md-2">
              <label for="exampleInputEmail1">Segundo Apellido</label>
                  <input type="text" class="form-control" name="s_apellido" autocomplete="off" value="<?php echo $data['s_apellido']; ?>" required>
              </div>

                <div class="col-md-2">
              <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                  <input type="text" class="form-control" name="fec_nac" autocomplete="off" value="<?php echo $data['fec_nac']; ?>" required>
              </div>

                 <div class="col-md-2">
              <label for="exampleInputEmail1">Edad</label>
                  <input type="text" class="form-control" name="edad" autocomplete="off" value="<?php echo $data['edad']; ?>" required>
              </div> 

              <div class="col-md-2">
              <label for="exampleInputEmail1">Genero</label>
                  <select type="text" class="form-control" name="genero" autocomplete="off" value="<?php echo $data['genero']; ?>" required>
                          <option>Femenino</option>
                          <option>Masculino</option>
                        </select>
                  </div>
          


              <div class="col-md-2">
              <label for="exampleInputEmail1">Lugar de Nacimiento</label>
                  <select type="text" class="form-control" name="lugar_nac" autocomplete="off" value="<?php echo $data['lugar_nac']; ?>" required>
                          <option>Amazonas</option>
                          <option>Anzoategui</option>
                          <option>Apure</option>
                          <option>Aragua</option>
                          <option>Barinas</option>
                          <option>Bolívar</option>
                          <option>Carabobo</option>
                          <option>Cojedes</option>
                          <option>Delta Amacuro</option>
                          <option>Distrito Capital</option>
                          <option>Falcón</option>
                          <option>Guárico</option>
                          <option>Lara</option>
                          <option>Mérida</option>
                          <option>Miranda</option>
                          <option>Monagas</option>
                          <option>Nueva Esparta</option>
                          <option>Portuguesa</option>
                          <option>Sucre</option>
                          <option>Táchira</option>
                          <option>Trujillo</option>
                          <option>Vargas</option>
                          <option>Yaracuy</option>
                          <option>Zulia</option>
                        </select>
              </div>



              <div class="col-md-2">
              <label for="exampleInputEmail1">Estado Civil</label>
                  <select type="text" class="form-control" name="estado_c" autocomplete="off" value="<?php echo $data['estado_c']; ?>" required>
                  <option>Soltero/a </option>
                  <option>Casado/a</option>
                  <option>Divorciado/a</option>
                  <option>Viudo/a</option>
                  <option>Concubinato/a</option>
                 </select>
              </div>


              <div class="col-md-2">
              <label for="exampleInputEmail1">Grado de Instruccion</label>
                  <select type="text" class="form-control" name="grado_inst" autocomplete="off" value="<?php echo $data['grado_inst']; ?>" required>
                         <option>Primaria</option>
                          <option>Secundaria</option>
                          <option>Tecnico Superior</option>
                          <option>Universitario</option>
                          <option>Grado</option>
                          <option>Magister</option>
                          <option>Doctorado</option>
                        </select>
              </div>



              <div class="col-md-2">
              <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="text" class="form-control" name="correo_e" autocomplete="off" value="<?php echo $data['correo_e']; ?>" required>
              </div>


              <div class="col-md-2">
              <label for="exampleInputEmail1">Teléfono Celular</label>
                  <input type="text" class="form-control" name="tel_cel" autocomplete="off" value="<?php echo $data['tel_cel']; ?>" required>
              </div>

                 <div class="col-md-2">
              <label for="exampleInputEmail1">Teléfono de Habitacion</label>
                  <input type="text" class="form-control" name="tel_hab" autocomplete="off" value="<?php echo $data['tel_hab']; ?>" required>
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Teléfono de Emergencia</label>
                  <input type="text" class="form-control" name="tel_emerg" autocomplete="off" value="<?php echo $data['tel_emerg']; ?>" required>
              </div>

                <div class="col-md-2">
              <label for="exampleInputEmail1">Estado</label>
                  <select type="text" class="form-control" name="estado" autocomplete="off" value="<?php echo $data['estado']; ?>" required>
                                            <option>Amazonas</option>
                          <option>Anzoategui</option>
                          <option>Apure</option>
                          <option>Aragua</option>
                          <option>Barinas</option>
                          <option>Bolívar</option>
                          <option>Carabobo</option>
                          <option>Cojedes</option>
                          <option>Delta Amacuro</option>
                          <option>Distrito Capital</option>
                          <option>Falcón</option>
                          <option>Guárico</option>
                          <option>Lara</option>
                          <option>Mérida</option>
                          <option>Miranda</option>
                          <option>Monagas</option>
                          <option>Nueva Esparta</option>
                          <option>Portuguesa</option>
                          <option>Sucre</option>
                          <option>Táchira</option>
                          <option>Trujillo</option>
                          <option>Vargas</option>
                          <option>Yaracuy</option>
                          <option>Zulia</option>
                        </select>
              </div> 


              <div class="col-md-2">
              <label for="exampleInputEmail1">Municipio</label>
                  <input type="text" class="form-control" name="municipio" autocomplete="off" value="<?php echo $data['municipio']; ?>" required>
              </div> 

               <div class="col-md-2">
              <label for="exampleInputEmail1">Ciudad</label>
                  <input type="text" class="form-control" name="ciudad" autocomplete="off" value="<?php echo $data['ciudad']; ?>" required>
              </div>


               <div class="col-md-2">
              <label for="exampleInputEmail1">Parroquia</label>
                  <input type="text" class="form-control" name="parroquia" autocomplete="off" value="<?php echo $data['parroquia']; ?>" required>
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Avenida</label>
                  <input type="text" class="form-control" name="avenida" autocomplete="off" value="<?php echo $data['avenida']; ?>" required>
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Calle</label>
                  <input type="text" class="form-control" name="calle" autocomplete="off" value="<?php echo $data['calle']; ?>" required>
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Casa N°</label>
                  <input type="text" class="form-control" name="casa" autocomplete="off" value="<?php echo $data['casa']; ?>" required>
              </div>

            

        <div class="col-md-2">
              <label for="exampleInputEmail1">Serial del CP</label>
                  <input type="text" class="form-control" name="serial_cp" autocomplete="off" value="<?php echo $data['serial_cp']; ?>" required>
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Serial del CP</label>
                  <input type="text" class="form-control" name="serial_cp" autocomplete="off" value="<?php echo $data['serial_cp']; ?>" required>
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