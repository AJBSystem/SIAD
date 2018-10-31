
<script type="text/javascript">
  function tampil_obat(input){
    var num = input.value;

    $.post("modules/medicines_transaction/medicines.php", {
      dataidobat: num,
    }, function(response) {      
      $('#stok').html(response)

      document.getElementById('jumlah_masuk').focus();
    });
  }

  function cek_jumlah_masuk(input) {
    jml = document.formObatMasuk.jumlah_masuk.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }

  function hitung_total_stok() {
    bil1 = document.formObatMasuk.stok.value;
    bil2 = document.formObatMasuk.jumlah_masuk.value;
	tt = document.formObatMasuk.transaccion.value;
	
    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var salida = eval(bil1) - eval(bil2);
	  var hasil = eval(bil1) + eval(bil2);
    }

	if (tt=="Salida"){
		document.formObatMasuk.total_stok.value = (salida);
	}	else {
		document.formObatMasuk.total_stok.value = (hasil);
	} 
    
  }
</script>

<?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Datos entradas / salidas de Medicamentos
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=medicines_transaction"> Entrada </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/medicines_transaction/proses.php?act=insert" method="POST" name="formObatMasuk">
            <div class="box-body">
              <?php  
            
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_transaccion,7) as codigo FROM transaccion_medicamentos
                                                ORDER BY codigo_transaccion DESC LIMIT 1")
                                                or die('Error : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                 
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }

             
              $tahun          = date("Y");
              $buat_id        = str_pad($codigo, 7, "0", STR_PAD_LEFT);
              $codigo_transaccion = "TM-$tahun-$buat_id";
              ?>

<div class="clearfix"></div>

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

            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-automobile"> Datos de Vehiculos</a>
            </li>

            <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-clipboard"> Dotaciones</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                 
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
             
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th width='80'>Cedula</th>
                            <th width='140'> N° de Credencial</th>
                            <th width='80'>Rif</th>
                            <th width='130'>Primer Nombre</th>
                            <th width='150'>Segundo Nombre</th>
                            <th width='130'>Primer Apellido</th>
                            <th width='130'>Segundo Apellido</th>
                            <th width='150'>Fecha de Nacimiento</th>
                            <th width='70'>Edad</th>
                          
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td>26435880</td>
                            <td>Darly</td>
                            <td>Naiduth</td>
                            <td>Martinez</td>
                            <td>Barreto</td>
                            <td>29/10/1998</td>
                            <td>19 años</td>
                            <td>Hija</td>
                    
                          </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk aliquip</p>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
              <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk </p>
            </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
              <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk </p>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
              <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk </p>
            </div>     

            <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
              <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk </p>
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
                  <a href="?module=medicines_transaction" class="btn btn-default btn-reset">Cancelar</a>
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
?>