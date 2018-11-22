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


<div class="">
<div class="col-md-12 col-sm-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <ul class="nav navbar-right panel_toolbox"></ul>
<div class="clearfix"></div>
</div>

<div class="x_content">

<div class="" role="tabpanel" data-example-id="togglable-tabs">
  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
           
    <li  role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="fa fa-user"> Datos Basicos</a>
    </li>

      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="fa fa-heart"> Información Médica</a>
      </li>

        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-suitcase"> Datos Laborales</a>
        </li>

          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-users"> Datos Familiares</a>
          </li>

            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-car"> Datos de Vehiculo</a>
            </li> 

              <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-clipboard"> Dotaciones</a>
              </li>

  </ul>

<div id="myTabContent" class="tab-content">

<!-- Aqui empieza el activador 1 -->  

<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

<div class="col-md-12 col-sm-6 col-xs-12">
            
<div class="x_panel">
                 
  <ul class="nav navbar-right panel_toolbox"></ul>

<div class="clearfix"></div>
             
                  <div class="x_content">
                  <div class="col-md-2">
                <label for="exampleInputEmail1">Codigo</label>
                <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>">
              </div>

  <div class="col-md-2">
    <label for="exampleInputEmail1">Cedula</label>
      <input type="number" class="form-control" name="cedula" autocomplete="off" required> 
 </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">N° de Credencial</label>
        <input type="number" class="form-control" name="credencial" autocomplete="off" required> 
    </div>

      <div class="col-md-2">
        <label for="exampleInputEmail1">Rif</label>
          <input type="number" class="form-control" name="rif" autocomplete="off" required> 
      </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1">Primer Nombre</label>
            <input type="text" class="form-control" name="p_nombre" autocomplete="off" required> 
        </div>

          <div class="col-md-2">
            <label for="exampleInputEmail1">Segundo Nombre</label>
              <input type="text" class="form-control" name="s_nombre" autocomplete="off"> 
          </div>

            <div class="col-md-2">
              <label for="exampleInputEmail1">Primer Apellido</label>
                <input type="text" class="form-control" name="p_apellido" autocomplete="off" required> 
            </div>

              <div class="col-md-2">
                <label for="exampleInputEmail1">Segundo Apellido</label>
                  <input type="text" class="form-control" name="s_apellido" autocomplete="off"> 
              </div>

                <div class="col-md-2">
                  <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fec_nac" autocomplete="off" required> 
                </div>

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Edad</label>
                      <input type="number" class="form-control" name="edad" autocomplete="off" required> 
                  </div>

                    <div class="col-md-2">
                      <label for="exampleInputEmail1">Género</label>
                        <select class="form-control" name="genero"  required>
                          <option>Femenino</option>
                          <option>Masculino</option>
                        </select>
                    </div>

                      <!-- <div class="col-md-2">
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
                      </div> -->

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
                                <input type="email" class="form-control" name="correo_e" autocomplete="off" required> 
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



                                    <!-- <div class="col-md-2">
                                      <label for="exampleInputEmail1">Estado</label>
                                        <select type="text" class="form-control" name="estado" autocomplete="off" required> 
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
                                                    <input type="number" class="form-control" name="casa" autocomplete="off" required> 
                                                </div> -->

                                                  <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Codigo del CP</label>
                                                      <input type="number" class="form-control" name="codigo_cp" autocomplete="off"> 
                                                  </div>

                                                    <div class="col-md-2">
                                                      <label for="exampleInputEmail1">Serial del CP</label>
                                                        <input type="number" class="form-control" name="serial_cp" autocomplete="off"> 
                                                    </div>

                                      <div class="col-md-5">
                                    <label for="exampleInputEmail1">Dirección</label>
                                      <textarea rows="2" class="form-control" name="direccion" autocomplete="off" required></textarea> 
                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

<!-- Aqui termina el activador 1 -->  

<!-- Aqui empieza el activador 2 -->  

 <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

  <div class="col-md-2">
    <label for="exampleInputEmail1">Tipo de Sangre</label>
      <input type="text" class="form-control" name="tipo_s" autocomplete="off" required> 
  </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">Medicamentos</label>
        <input type="text" class="form-control" name="medicamen" autocomplete="off" required> 
    </div>

      <div class="col-md-2">
        <label for="exampleInputEmail1">Discapacidad</label>
          <input type="text" class="form-control" name="discapacidad" autocomplete="off" required> 
      </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1">Alergias</label>
            <input type="text" class="form-control" name="alergias" autocomplete="off" required> 
        </div>

          <div class="col-md-2">
            <label for="exampleInputEmail1">Notas</label>
              <input type="text" class="form-control" name="notas" autocomplete="off" required> 
          </div>
</div>

<!-- Aqui termina el activador 2 -->  

<!-- Aqui empieza el activador 3 -->  

<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

  <div class="col-md-2">
    <label for="exampleInputEmail1">Seleccionar División</label>
      <select class="form-control" name="selec_div"  required>
        <option>Base de Datos</option>
        <option>Dirección</option>
        <option>División de Operaciones</option>
        <option>División de Proyectos</option>
        <option>División de Sistemas</option>
        <option>División de Telematica</option>
      </select>
  </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">Fecha de Ingreso</label>
        <input type="date" class="form-control" name="fec_ing" autocomplete="off" required> 
    </div>                  

      <div class="col-md-2">
        <label for="exampleInputEmail1">Tiempo de Servicio</label>
          <input type="number" class="form-control" name="tiempo_s" autocomplete="off" required> 
      </div>     

        <div class="col-md-2">
          <label for="exampleInputEmail1">Cargo</label>
            <select class="form-control" name="cargo"  required>
              <option>Adjunto</option>
              <option>Agente de Seguridad I</option>
              <option>Agente de Seguridad II</option>
              <option>Asesor Juridico General</option>
              <option>Director</option>
              <option>Director de Investigaciones</option>
              <option>Experto Profesional Especialista I</option>
              <option>Experto Profesional Especialista II</option>
              <option>Experto Profesional Especialista III</option>
              <option>Jefe de Área</option>
              <option>Jefe de Bloque</option>
              <option>Jefe de Delegación</option>
              <option>Jefe de Departamento</option>
              <option>Jefe de División</option>
              <option>Jefe de Escolta</option>
              <option>Jefe de Inspectoría</option>
              <option>Jefe de Investigaciones</option>
              <option>Jefe de Sub Delegación</option>                            
              <option>Jefe del Eje</option>
              <option>Miembro Principal  Comisión Permanente Evaluación Y Seguim</option>
              <option>Miembro Principal del Consejo Disciplinario</option>
              <option>No Aplica</option>
              <option>Secretario General</option>
              <option>Secretario General Nacional</option>
              <option>Secretario Principal Consejo Disciplinario</option>
              <option>Sub Director General</option>
              <option>Supervisor</option>
              <option>Supervisor de Investigaciones</option>
              <option>Supervisor de los Servicios</option>
              <option>Supervisor de Región</option>
              <option>Supervisor de Sub Delegaciones</option>
            </select>
        </div>                         

          <div class="col-md-2">
            <label for="exampleInputEmail1">Rango</label>
              <select class="form-control" name="rango"  required>
                <option>Asesor Juridico</option>
                <option>Asist. Administrativo I</option>
                <option>Asist. Administrativo II</option>
                <option>Asist. Administrativo III</option>
                <option>Asist. Administrativo IIIV</option>
                <option>Asist. Administrativo V</option>
                <option>Asist. Administrativo VI</option>
                <option>Asist. Administrativo VII</option>
                <option>Aspirante</option>
                <option>Auxiliar Adm. I</option>
                <option>Auxiliar Adm. II</option>
                <option>Auxiliar Adm. III</option>
                <option>Auxiliar Adm. IV</option>
                <option>Auxiliar Adm. V</option>
                <option>Auxiliar Adm. VI</option>                  
                <option>Auxiliar Adm. VII</option>
                <option>Comisario</option>                        
                <option>Comisario General</option>
                <option>Comisario Jefe</option>
                <option>Detective</option>
                <option>Detective Agregado</option>
                <option>Detective Jefe</option>
                <option>Director General Nacional</option>
                <option>Experto Profesional  I</option>
                <option>Experto Profesional  II</option>
                <option>Experto Profesional  III</option>
                <option>Experto Profesional IV</option>
                <option>Experto Tecnico I</option>
                <option>Experto Tecnico II</option>
                <option>Experto Tecnico III</option>
                <option>Experto Tecnico IV</option>
                <option>Experto Tecnico VI</option>
                <option>Experto Tecnico VII</option>
                <option>Inspector</option>
                <option>Inspector Agregado</option>
                <option>Inspector General</option>
                <option>Inspector Jefe</option>
                <option>Sub-Director</option>
                <option>Pasantes</option>
                <option>No Aplica</option>
              </select>
          </div>  

            <div class="col-md-2">
              <label for="exampleInputEmail1">Ubicación Fisica</label>
                <input type="text" class="form-control" name="ubic_fis" autocomplete="off" required> 
            </div>

              <div class="col-md-2">
                <label for="exampleInputEmail1">Correo Institucional</label>
                  <input type="email" class="form-control" name="correo_i" autocomplete="off" required> 
              </div>  

                <div class="col-md-2">
                  <label for="exampleInputEmail1">Estatus</label>
                    <select type="text" class="form-control" name="estatus" autocomplete="off" required>
                      <option>Activo</option>
                      <option>Reposo</option>
                      <option>Vacaciones</option>
                      <option>Comision</option>
                    </select>
                </div>                        
</div>

<!-- Aqui termina el activador 3 -->  

<!-- Aqui empieza el activador 4 -->  

<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">

  <div class="col-md-2">
    <label for="exampleInputEmail1">Cedula</label>
      <input type="number" class="form-control" name="cedulaf" autocomplete="off" required> 
  </div> 

    <div class="col-md-2">
      <label for="exampleInputEmail1">Primer Nombre</label>
        <input type="text" class="form-control" name="p_nombref" autocomplete="off" required> 
    </div> 

      <div class="col-md-2">
        <label for="exampleInputEmail1">Segundo Nombre</label>
          <input type="text" class="form-control" name="s_nombref" autocomplete="off"> 
      </div> 

        <div class="col-md-2">
          <label for="exampleInputEmail1">Primer Apellido</label>
            <input type="text" class="form-control" name="p_apellidof" autocomplete="off" required> 
        </div> 

          <div class="col-md-2">
            <label for="exampleInputEmail1">Segundo Apellido</label>
              <input type="text" class="form-control" name="s_apellidof" autocomplete="off"> 
          </div> 

            <div class="col-md-2">
              <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fec_nacf" autocomplete="off" required> 
            </div> 

              <div class="col-md-2">
                <label for="exampleInputEmail1">Edad</label>
                  <input type="number" class="form-control" name="edadf" autocomplete="off" required> 
              </div> 

                <div class="col-md-2">
                  <label for="exampleInputEmail1">Genero</label>
                    <select type="text" class="form-control" name="generof" autocomplete="off" required> 
                      <option>Femenina</option>
                      <option>Masculino</option>
                    </select> 
                </div>  

                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Parentesco</label>
                      <select type="text" class="form-control" name="parentesco" autocomplete="off" required> 
                        <option>Hijo/a</option>
                        <option>Padre</option>
                        <option>Madre</option>
                        <option>Hermano/a</option>
                        <option>Otro/a</option>
                      </select>
                  </div>

                    <div class="col-md-1">
                      <label for="exampleInputEmail1">Estudiante</label>
                        <select type="text" class="form-control" name="estudiante" autocomplete="off" required> 
                          <option>Si</option>
                          <option>No</option>
                        </select>
                    </div> 
   
                      <div class="col-md-1">
                        <label for="exampleInputEmail1">Funcionario</label>
                          <select type="text" class="form-control" name="funcionario" autocomplete="off" required> 
                            <option>Si</option>
                            <option>No</option>
                          </select>  
                      </div> 

                      <div class="col-md-2">
                        <label for="exampleInputEmail1">Información Medica</label>
                          <input type="text" class="form-control" name="inf_medf" autocomplete="off" required> 
                      </div>                                
</div>

<!-- Aqui termina el activador 4 -->  

<!-- Aqui empieza el activador 5 -->  

<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">

  <div class="col-md-2">
    <label for="exampleInputEmail1">Tipo de Vehiculo</label>
      <input type="text" class="form-control" name="tipo_v" autocomplete="off"> 
  </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">Placa</label>
        <input type="text" class="form-control" name="placa" autocomplete="off"> 
    </div> 

      <div class="col-md-2">
        <label for="exampleInputEmail1">Combustible</label>
          <select type="text" class="form-control" name="combustible" autocomplete="off"> 
            <option>Gasolina</option>
            <option>Gasoil</option>
          </select>
      </div>  

        <div class="col-md-2">
          <label for="exampleInputEmail1">Serial de la Carroceria</label>
            <input type="text" class="form-control" name="serial_carro" autocomplete="off"> 
        </div>                             

          <div class="col-md-2">
            <label for="exampleInputEmail1">Marca</label>
              <input type="text" class="form-control" name="marca" autocomplete="off"> 
          </div> 

            <div class="col-md-2">
              <label for="exampleInputEmail1">Modelo</label>
                <input type="text" class="form-control" name="modelo" autocomplete="off"> 
            </div> 

              <div class="col-md-2">
                <label for="exampleInputEmail1">Color</label>
                  <input type="text" class="form-control" name="color" autocomplete="off"> 
              </div> 

                <div class="col-md-2">
                  <label for="exampleInputEmail1">Año</label>
                    <select type="number" class="form-control" name="alo" autocomplete="off"> 
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
                <option>1995</option>
                <option>1994</option>
                <option>1993</option>
                <option>1992</option>
                <option>1991</option>
                <option>1990</option>
                <option>1989</option>
                <option>1988</option>
                <option>1987</option>
                <option>1986</option>
                <option>1985</option>
                <option>1984</option>
                <option>1983</option>
                <option>1982</option>
                <option>1981</option>
                <option>1980</option>
                <option>1979</option>
                <option>1978</option>
                <option>1977</option>
                <option>1976</option>
                <option>1975</option>
                <option>1974</option>
                <option>1973</option>
                <option>1972</option>
                <option>1971</option>
                <option>1970</option>
                <option>1969</option>
                <option>1968</option>
                <option>1967</option>
                <option>1966</option>
                <option>1965</option>
                <option>1964</option>
                <option>1963</option>
                <option>1962</option>
                <option>1961</option>
                <option>1960</option>
                </select>
                </div> 

</div>

<!-- Aqui termina el activador 5 -->  

<!-- Aqui empieza el activador 6 -->  

<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">

  <div class="col-md-2">
    <label for="exampleInputEmail1">Tipo</label>
      <input type="text" class="form-control" name="tipo_d" autocomplete="off"> 
  </div> 

    <div class="col-md-2">
      <label for="exampleInputEmail1">N° de Serial</label>
        <input type="text" class="form-control" name="n_serial" autocomplete="off"> 
    </div> 

      <div class="col-md-2">
        <label for="exampleInputEmail1">Marca</label>
          <input type="text" class="form-control" name="marca_d" autocomplete="off"> 
      </div> 

        <div class="col-md-2">
          <label for="exampleInputEmail1">Modelo</label>
            <input type="text" class="form-control" name="modelo_d" autocomplete="off"> 
        </div> 

          <div class="col-md-2">
            <label for="exampleInputEmail1">Calibre</label>
              <input type="text" class="form-control" name="calibre" autocomplete="off"> 
          </div> 

</div>

<!-- Aqui termina el activador 6 -->   
          </div>
        </div>
      </div>
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

<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT codigo,cedula,credencial,rif,p_nombre,s_nombre,p_apellido,s_apellido,fec_nac,edad,lugar_nac,genero,tel_cel,tel_hab,tel_emerg,estado,estado_c,grado_inst,correo_e,municipio,ciudad,parroquia,avenida,calle,casa,codigo_cp,serial_cp,tipo_s,medicamen,discapacidad,alergias,notas,selec_div,cargo,rango,fec_ing,tiempo_s,ubic_fis,correo_i,estatus,cedulaf,p_nombref,s_nombref,p_apellidof,s_apellidof,fec_nacf,edadf,generof,parentesco,estudiante,funcionario,inf_medf,tipo_v,placa,combustible,serial_carro,marca,modelo,color,alo,tipo_d,n_serial,marca_d,modelo_d,calibre,direccion FROM medicamentos WHERE codigo='$_GET[id]'") 

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

<div class="">
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <ul class="nav navbar-right panel_toolbox">
        </ul>
      <div class="clearfix"></div>
    </div>
  <div class="x_content">

<div class="" role="tabpanel" data-example-id="togglable-tabs">
  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

     <li  role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="fa fa-user"> Datos Basicos</a>
    </li>

      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="fa fa-heart"> Información Médica</a>
      </li>

        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-suitcase"> Datos Laborales</a>
        </li>

          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-users"> Datos Familiares</a>
          </li>

            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-car"> Datos de Vehiculo</a>
            </li> 

              <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-clipboard"> Dotaciones</a>
              </li>
  </ul>

<div id="myTabContent" class="tab-content">

<!-- Aqui empieza el activador 1 -->

<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
<div class="col-md-12 col-sm-6 col-xs-12">
<div class="x_panel">               
  <ul class="nav navbar-right panel_toolbox"></ul>


                  <div class="x_content">
                  <div class="col-md-2">
                <label for="exampleInputEmail1">Codigo</label>
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>">
              </div>

             <div class="col-md-2">
              <label for="exampleInputEmail1">Cedula</label>
                  <input type="text" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
              </div>



    <div class="col-md-2">
      <label for="exampleInputEmail1">N° de Credencial</label>
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
                  <input type="text" class="form-control" name="s_nombre" autocomplete="off" value="<?php echo $data['s_nombre']; ?>">
              </div>

            <div class="col-md-2">
              <label for="exampleInputEmail1">Primer Apellido</label>
                <input type="text" class="form-control" name="p_apellido" autocomplete="off" value="<?php echo $data['p_apellido']; ?>" required>
            </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Segundo Apellido</label>
                  <input type="text" class="form-control" name="s_apellido" autocomplete="off" value="<?php echo $data['s_apellido']; ?>">
              </div>

                <div class="col-md-2">
                  <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fec_nac" autocomplete="off" value="<?php echo $data['fec_nac']; ?>" required>
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

                      <!-- <div class="col-md-2">
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
                      </div> -->

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

                                    <!-- <div class="col-md-2">
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
                                                </div> -->

                                                  <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Codigo del CP</label>
                                                      <input type="text" class="form-control" name="codigo_cp" autocomplete="off" value="<?php echo $data['codigo_cp']; ?>">
                                                  </div>

                                                    <div class="col-md-2">
                                                      <label for="exampleInputEmail1">Serial del CP</label>
                                                        <input type="text" class="form-control" name="serial_cp" autocomplete="off" value="<?php echo $data['serial_cp']; ?>">
                                                    </div>


                                                    <div class="col-md-5">
                                                      <label for="exampleInputEmail1">Dirección</label>
                                                        <textarea rows="2" class="form-control" name="direccion" autocomplete="off" value="<?php echo $data['direccion']; ?>"></textarea>
                                                    </div>


</div>
</div>
</div>
</div>

<!-- Aqui termina el activador 1 -->

<!-- Aqui empieza el activador 2 -->

<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

<div class="col-md-2">
  <label for="exampleInputEmail1">Tipo de Sangre</label>
    <input type="text" class="form-control" name="tipo_s" autocomplete="off" value="<?php echo $data['tipo_s']; ?>" required>
</div>

  <div class="col-md-2">
    <label for="exampleInputEmail1">Medicamentos</label>
      <input type="text" class="form-control" name="medicamen" autocomplete="off" value="<?php echo $data['medicamen']; ?>" required>
  </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">Discapacidad</label>
        <input type="text" class="form-control" name="discapacidad" autocomplete="off" value="<?php echo $data['discapacidad']; ?>" required>
    </div>

      <div class="col-md-2">
        <label for="exampleInputEmail1">Alergias</label>
          <input type="text" class="form-control" name="alergias" autocomplete="off" value="<?php echo $data['alergias']; ?>" required>
      </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1">Notas</label>
            <input type="text" class="form-control" name="notas" autocomplete="off" value="<?php echo $data['notas']; ?>" required>
        </div>
</div>

<!-- Aqui termina el activador 2 -->

<!-- Aqui empieza el activador 3 -->

<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

<div class="col-md-2">
  <label for="exampleInputEmail1">Seleccionar Division</label>
    <select type="text" class="form-control" name="selec_div" autocomplete="off" value="<?php echo $data['selec_div']; ?>" required>
      <option>Base de Datos</option>
      <option>Dirección</option>
      <option>División de Operaciones</option>
      <option>División de Proyectos</option>
      <option>División de Sistemas</option>
      <option>División de Telematica</option>
    </select>
</div>

  <div class="col-md-2">
    <label for="exampleInputEmail1">Fecha de Ingreso</label>
      <input type="date" class="form-control" name="fec_ing" autocomplete="off" value="<?php echo $data['fec_ing']; ?>" required>
  </div>

    <div class="col-md-2">
      <label for="exampleInputEmail1">Tiempo de Servicio</label>
        <input type="number" class="form-control" name="tiempo_s" autocomplete="off" value="<?php echo $data['tiempo_s']; ?>" required>
    </div>

      <div class="col-md-2">
        <label for="exampleInputEmail1">Cargo</label>
          <select type="text" class="form-control" name="cargo" autocomplete="off" value="<?php echo $data['cargo']; ?>" required>
          <option>Adjunto</option>                
          <option>Agente de Seguridad I</option>                
          <option>Agente de Seguridad II</option>                
          <option>Asesor Juridico General</option>                
          <option>Director</option>
          <option>Director de Investigaciones</option>
          <option>Experto Profesional Especialista I</option>
          <option>Experto Profesional Especialista II</option>
          <option>Experto Profesional Especialista III</option>
          <option>Jefe de Área</option>
          <option>Jefe de Bloque</option>
          <option>Jefe de Delegación</option>
          <option>Jefe de Departamento</option>
          <option>Jefe de División</option>
          <option>Jefe de Escolta</option>
          <option>Jefe de Inspectoría</option>
          <option>Jefe de Investigaciones</option>
          <option>Jefe de Sub Delegación</option>                            
          <option>Jefe del Eje</option>
          <option>Miembro Principal  Comisión Permanente Evaluación Y Seguim</option>
          <option>Miembro Principal del Consejo Disciplinario</option>
          <option>No Aplica</option>
          <option>Secretario General</option>
          <option>Secretario General Nacional</option>
          <option>Secretario Principal Consejo Disciplinario</option>
          <option>Sub Director General</option>
          <option>Supervisor</option>
          <option>Supervisor de Investigaciones</option>
          <option>Supervisor de los Servicios</option>
          <option>Supervisor de Región</option>
          <option>Supervisor de Sub Delegaciones</option>
        </select>
      </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1">Rango</label>
            <select type="text" class="form-control" name="rango" autocomplete="off" value="<?php echo $data['rango']; ?>" required>
              <option>Asesor Juridico</option>
              <option>Asist. Administrativo I</option>
              <option>Asist. Administrativo II</option>
              <option>Asist. Administrativo III</option>
              <option>Asist. Administrativo IIIV</option>
              <option>Asist. Administrativo V</option>
              <option>Asist. Administrativo VI</option>
              <option>Asist. Administrativo VII</option>
              <option>Aspirante</option>
              <option>Auxiliar Adm. I</option>
              <option>Auxiliar Adm. II</option>
              <option>Auxiliar Adm. III</option>
              <option>Auxiliar Adm. IV</option>
              <option>Auxiliar Adm. V</option>
              <option>Auxiliar Adm. VI</option>                  
              <option>Auxiliar Adm. VII</option>
              <option>Comisario</option>                        
              <option>Comisario General</option>
              <option>Comisario Jefe</option>
              <option>Detective</option>
              <option>Detective Agregado</option>
              <option>Detective Jefe</option>
              <option>Director General Nacional</option>
              <option>Experto Profesional  I</option>
              <option>Experto Profesional  II</option>
              <option>Experto Profesional  III</option>
              <option>Experto Profesional IV</option>
              <option>Experto Tecnico I</option>
              <option>Experto Tecnico II</option>
              <option>Experto Tecnico III</option>
              <option>Experto Tecnico IV</option>
              <option>Experto Tecnico VI</option>
              <option>Experto Tecnico VII</option>
              <option>Inspector</option>
              <option>Inspector Agregado</option>
              <option>Inspector General</option>
              <option>Inspector Jefe</option>
              <option>Sub-Director</option>
              <option>Pasantes</option>
              <option>No Aplica</option>
            </select>
        </div>

          <div class="col-md-2">
            <label for="exampleInputEmail1">Ubicacion Fisica</label>
                <input type="text" class="form-control" name="ubic_fis" autocomplete="off" value="<?php echo $data['ubic_fis']; ?>" required>
          </div>

            <div class="col-md-2">
              <label for="exampleInputEmail1">Correo Institucional</label>
                <input type="email" class="form-control" name="correo_i" autocomplete="off" value="<?php echo $data['correo_i']; ?>" required>
            </div>

              <div class="col-md-2">
                <label for="exampleInputEmail1">Estatus</label>
                  <select type="text" class="form-control" name="estatus" autocomplete="off" value="<?php echo $data['estatus']; ?>" required>
                    <option>Activo</option>
                    <option>Reposo</option>
                    <option>Vacaciones</option>
                    <option>Comision</option>
                  </select>
              </div>
</div>

<!-- Aqui termina el activador 3 -->           

<!-- Aqui empieza el activador 4 -->

<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">

<div class="col-md-2">
  <label for="exampleInputEmail1">Cedula</label>
    <input type="number" class="form-control" name="cedulaf" autocomplete="off" value="<?php echo $data['cedulaf']; ?>" required>
</div>

  <div class="col-md-2">
    <label for="exampleInputEmail1">Primer Nombre</label>
      <input type="text" class="form-control" name="p_nombref" autocomplete="off" value="<?php echo $data['p_nombref']; ?>" required>
  </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Segundo Nombre</label>
                  <input type="text" class="form-control" name="s_nombref" autocomplete="off" value="<?php echo $data['s_nombref']; ?>">
              </div>

      <div class="col-md-2">
        <label for="exampleInputEmail1">Primer Apellido</label>
          <input type="text" class="form-control" name="p_apellidof" autocomplete="off" value="<?php echo $data['p_apellidof']; ?>" required>
      </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Segundo Apellido</label>
                  <input type="text" class="form-control" name="s_apellidof" autocomplete="off" value="<?php echo $data['s_apellidof']; ?>">
              </div>

          <div class="col-md-2">
            <label for="exampleInputEmail1">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="fec_nacf" autocomplete="off" value="<?php echo $data['fec_nacf']; ?>" required>
          </div>

            <div class="col-md-2">
              <label for="exampleInputEmail1">Edad</label>
                <input type="number" class="form-control" name="edadf" autocomplete="off" value="<?php echo $data['edadf']; ?>" required>
            </div>

              <div class="col-md-2">
                <label for="exampleInputEmail1">Genero</label>
                  <select type="text" class="form-control" name="genero" autocomplete="off" value="<?php echo $data['generof']; ?>" required>
                    <option>Femenina</option>
                    <option>Masculino</option>
                  </select>
              </div>

                <div class="col-md-1">
                  <label for="exampleInputEmail1">Parantesco</label>
                    <select type="text" class="form-control" name="parentesco" autocomplete="off" value="<?php echo $data['parentesco']; ?>" required>
                      <option>Hijo/a</option>
                      <option>Padre</option>
                      <option>Madre</option>
                      <option>Hermano/a</option>
                      <option>Otro/a</option>
                    </select>
                </div>

                  <div class="col-md-1">
                    <label for="exampleInputEmail1">Estudiante</label>
                      <select type="text" class="form-control" name="estudiante" autocomplete="off" value="<?php echo $data['estudiante']; ?>" required>
                        <option>Si</option>
                        <option>No</option>
                      </select>
                  </div>

                    <div class="col-md-1">
                      <label for="exampleInputEmail1">Funcionario</label>
                        <select type="text" class="form-control" name="funcionario" autocomplete="off" value="<?php echo $data['funcionario']; ?>" required>
                          <option>Si</option>
                          <option>No</option>
                        </select>  
                    </div>

                      <div class="col-md-2">
                        <label for="exampleInputEmail1">Informacion Medica</label>
                          <input type="text" class="form-control" name="inf_medf" autocomplete="off" value="<?php echo $data['inf_medf']; ?>" required>
                      </div>

</div>

<!-- Aqui termina el activador 4 -->

<!-- Aqui empieza el activador 5 -->

<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">

                    <div class="col-md-2">
              <label for="exampleInputEmail1">Tipo de Vehiculo</label>
                  <input type="text" class="form-control" name="tipo_v" autocomplete="off" value="<?php echo $data['tipo_v']; ?>">
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Placa</label>
                  <input type="text" class="form-control" name="placa" autocomplete="off" value="<?php echo $data['placa']; ?>">
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Combustible</label>
                  <select type="text" class="form-control" name="combustible" autocomplete="off" value="<?php echo $data['combustible']; ?>">
                    <option>Gasolina</option>
                    <option>Gasoil</option>
                    <select>
             </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Serial de la Carroceria</label>
                  <input type="text" class="form-control" name="serial_carro" autocomplete="off" value="<?php echo $data['serial_carro']; ?>">
              </div> 

              <div class="col-md-2">
              <label for="exampleInputEmail1">Marca</label>
                  <input type="text" class="form-control" name="marca" autocomplete="off" value="<?php echo $data['marca']; ?>">
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Modelo</label>
                  <input type="text" class="form-control" name="modelo" autocomplete="off" value="<?php echo $data['modelo']; ?>">
              </div>

            <div class="col-md-2">
              <label for="exampleInputEmail1">Color</label>
                  <input type="text" class="form-control" name="color" autocomplete="off" value="<?php echo $data['color']; ?>">
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">Año</label>
                  <select type="text" class="form-control" name="alo" autocomplete="off" value="<?php echo $data['alo']; ?>">
                  <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
                <option>1995</option>
                <option>1994</option>
                <option>1993</option>
                <option>1992</option>
                <option>1991</option>
                <option>1990</option>
                <option>1989</option>
                <option>1988</option>
                <option>1987</option>
                <option>1986</option>
                <option>1985</option>
                <option>1984</option>
                <option>1983</option>
                <option>1982</option>
                <option>1981</option>
                <option>1980</option>
                <option>1979</option>
                <option>1978</option>
                <option>1977</option>
                <option>1976</option>
                <option>1975</option>
                <option>1974</option>
                <option>1973</option>
                <option>1972</option>
                <option>1971</option>
                <option>1970</option>
                <option>1969</option>
                <option>1968</option>
                <option>1967</option>
                <option>1966</option>
                <option>1965</option>
                <option>1964</option>
                <option>1963</option>
                <option>1962</option>
                <option>1961</option>
                <option>1960</option>
                </select>
              </div>

</div>

<!-- Aqui termina el activador 5 -->

<!-- Aqui empieza el activador 6 -->

<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">

              <div class="col-md-2">
              <label for="exampleInputEmail1">Tipo</label>
                  <input type="text" class="form-control" name="tipo_d" autocomplete="off" value="<?php echo $data['tipo_d']; ?>">
              </div>

              <div class="col-md-2">
              <label for="exampleInputEmail1">N° de Serial</label>
                  <input type="text" class="form-control" name="n_serial" autocomplete="off" value="<?php echo $data['n_serial']; ?>">
              </div>


              <div class="col-md-2">
              <label for="exampleInputEmail1">Marca</label>
                  <input type="text" class="form-control" name="marca_d" autocomplete="off" value="<?php echo $data['marca_d']; ?>">
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Modelo</label>
                  <input type="text" class="form-control" name="modelo_d" autocomplete="off" value="<?php echo $data['modelo_d']; ?>">
              </div>

               <div class="col-md-2">
              <label for="exampleInputEmail1">Calibre</label>
                  <input type="text" class="form-control" name="calibre" autocomplete="off" value="<?php echo $data['calibre']; ?>">
              </div>


</div>

<!-- Aqui termina el activador 6 -->
</div>
</div>
</div>
</div>
</div>
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