
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
    <i class="fa fa-edit icon-title"></i> Datos del Funcionario
  </h1>
      <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
    <li><a href="?module=form_medicines_transaction&form=add"> Funcionario </a></li>
      </ol>     
</section>

<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
    <form role="form" class="form-horizontal" action="modules/medicines/proses.php?act=update" method="POST" name="formObatMasuk">
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

<div class="">

<div class="col-md-12 col-sm-6 col-xs-12">

<div class="x_panel">

<div class="x_content">

 <!-- Inicio de las imagenes de muestra -->

<div class="col-md-2 profile_left">
  <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
    <li>Titulo de prueba</li>
      <a class="btn btn-primary" ><i class="fa fa-edit m-right-xs"></i> Editar</a>
      <a class="btn btn-warning" href="pdf/reporte_funcionario.php"><i class="fa fa-print m-right-xs"></i> Imprimir</a>
        <br />
</div>
            
 <!-- Final de las imagenes de muestra -->

 <!-- Inicio del menu de activadores -->

<div class="col-md-10"> 

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

</div>
 <!-- Final del menu de activadores -->

 <!-- Inicio Primer Activador -->

<div id="myTabContent" class="tab-content">

<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">                           

<div class="col-sm-4 col-md-5 col-xs-6 text-left">
                    
  <table class='table table-bordered'>
                  
    <tr><th><span>Cedula</th><td>26.435.880</span></td></tr>
       
    <tr><th><span>Rif</th><td>26435880-5</span> </td></tr>
                        
    <tr><th><span>Segundo Nombre</th><td>Naiduth</span></td></tr>

    <tr><th><span>Segundo Apellido</th><td>Barreto</span> </td></tr>

    <tr><th><span>Edad</th><td>20 Años</span></td></tr>

  </table>

</div>

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>

    <tr><th><span>N° de Credencial</th><td>26435</span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Darly</span></td></tr>
                    
    <tr><th><span>Primer Apellido</th><td>Martinez</span></td></tr>
                                          
    <tr><th><span>Fecha de Nacimiento</th><td>29/10/1998</span> </td></tr>
                       
    <tr><th><span>Género</th><td>Femenina</span></td></tr>
    
  </table>
                    
</div>

<div class="col-sm-3 col-md-5 col-xs-6 text-left">
                    
  <table class='table table-bordered'>
                                          
    <tr><th><span>Estado Civil</th><td>Soltera</span></td></tr>
                                                             
    <tr><th><span>Correo Electronico</th><td>Darlynmartinezb@gmail.com</span> </td></tr>
                                        
    <tr><th><span>Teléfono de Habitación</th><td>0212-417-02-77</span></td></tr>

    <tr><th><span>Codigo del CP</th><td>45871265</span> </td></tr>

  </table>
                          
</div>                   

<div class="col-sm-4 col-md-5 col-xs-6 text-left">
                    
  <table class='table table-bordered'>

    <tr><th><span>Grado de Instrucción</th><td>Tecnico Superior</span> </td></tr>

    <tr><th><span>Teléfono Celular</th><td>0414-027-23-30</span></td></tr> 

    <tr><th><span>Teléfono de Emergencias</th><td>0414-279-10-61</span></td></tr>
                                               
    <tr><th><span>Serial del CP</th><td>95478136</span> </td></tr>
                                                                                                    
  </table>
                              
</div>    

<div class="col-sm-4 col-md-5 col-xs-6 text-left">
                    
  <table class='table table-bordered'>
    
    <tr><th><span>Dirección</th><td>Primera entrada de carapita,Subida del caballo callejon pinto salina,casa 88</span></td></tr>
    
  </table>

</div>

</div>  
<!-- Final del Primer Activador -->

<!-- Inicio del Segundo Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
    
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                       
    <tr><th><span>Tipo de Sangre</th><td>B +</span></td></tr>
                            
    <tr><th><span>Discapacidad</th><td>Ninguna</span> </td></tr>

    <tr><th><span>Notas</th><td>Ninguna</span> </td></tr>
                     
  </table>
                           
</div>
                            
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>

    <tr><th><span>Medicamentos</th><td>Antibioticos</span> </td></tr>
                     
    <tr><th><span>Alergias</th><td>Ninguna</span></td></tr>
                                 
  </table>
                         
</div>

</div>

<!-- Final del Segundo Activador -->
     
<!-- Inicio del Tercer Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
  
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                     
    <tr><th><span>Seleccionar División</th><td>División de Sistemas</span></td></tr>
                    
    <tr><th><span>Tiempo De Servicio</th><td>2 Meses</span> </td></tr>
          
    <tr><th><span>Rango</th><td>Experto Técnico I</span></td></tr>

    <tr><th><span>Correo Institucional</th><td>darlymartinez@cicpc.gob.ve</span> </td></tr>
          
  </table>
                         
</div>

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>

    <tr><th><span>Fecha de Ingreso</th><td>01/10/2018</span> </td></tr>
  
    <tr><th><span>Cargo</th><td>No Aplica</span></td></tr>                     
                       
    <tr><th><span>Ubicación Fisica</th><td>Dirección de Tecnología</span> </td></tr>
                          
    <tr><th><span>Estatus</th><td>Activo</span></td></tr>
                              
  </table>
                 
</div>

</div>

<!-- Final del Tercer Activador -->

<!-- Inicio del Cuarto Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
 
<!-- Inicio del activador 2 de familiares -->

<div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">

  <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
      <h4 class="panel-title">Madre</h4></a>

<div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
<div class="panel-body">

<div class="col-md-6 col-sm-6 col-xs-12">

  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>11.201.693</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Maria</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Carvajal</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>45 Años</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
  
  <table class='table table-bordered'>

    <tr><th><span>Primer Nombre</th><td>Yoseida</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Barreto</span> </td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>21/12/1971</span></td></tr>
                                              
    <tr><th><span>Genero</th><td>Femenina</span></td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>
                                                                                              
  </table>

</div>
</div>
</div>
       
<!-- Final del activador 1 de familiares -->

<!-- Inicio del activador 2 de familiares -->

<div class="panel">
  <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
    <h4 class="panel-title">Padre</h4></a>

<div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">
<div class="col-md-6 col-sm-6 col-xs-12">
  
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>10.877.210</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Fortunato</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td></span></td></tr>
                                              
    <tr><th><span>Edad</th><td>55 Años</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

</div>

<div class="col-md-6 col-sm-6 col-xs-12">
  
  <table class='table table-bordered'>

    <tr><th><span>Primer Nombre</th><td>Agustin</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Martinez</span> </td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>28/08/1967</span></td></tr>
                                              
    <tr><th><span>Genero</th><td>Masculino</span></td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>
                                                                                              
  </table>

</div>
</div>
</div>
</div>

<!-- Final del activador 2 de familiares -->

<!-- Inicio del activador 3 de familiares -->

<div class="panel">
  <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
    <h4 class="panel-title">Hijos</h4></a>
<div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
<div class="panel-body">

<p>Ninguno</p>

</div>
</div>
</div>

<!-- Final del activador 3 de familiares -->

<!-- Inicio del activador 4 de familiares -->

<div class="panel">
  <a class="panel-heading collapsed" role="tab" id="headingFive1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1" aria-expanded="false" aria-controls="collapseFive">
    <h4 class="panel-title">Hermanos</h4></a>
<div id="collapseFive1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
<div class="col-md-6 col-sm-6 col-xs-12">
  
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>23.641.099</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Agustin</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Barreto</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>25 Años</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

</div>

<div class="col-md-6 col-sm-6 col-xs-12">

  <table class='table table-bordered'>

    <tr><th><span>Primer Nombre</th><td>Dauli</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Martinez</span> </td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>15/12/1994</span></td></tr>
                                              
    <tr><th><span>Genero</th><td>Masculino</span></td></tr>

    <tr><th><span>Funcionario</th><td>Si</span> </td></tr>
                                                                                            
  </table>

</div>
</div>
</div>
</div>
<!-- Final del activador 4 de familiares -->

<!-- Inicio del activador 5 de familiares -->

<div class="panel">
  <a class="panel-heading collapsed" role="tab" id="headingFor1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFor1" aria-expanded="false" aria-controls="collapseFor">
    <h4 class="panel-title">Otros</h4></a>
<div id="collapseFor1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFor">
<div class="panel-body">
<div class="col-md-6 col-sm-6 col-xs-12">

  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>20.096.158</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Dayana</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Martinez</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>29 Años</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

</div>

<div class="col-md-6 col-sm-6 col-xs-12">
  <table class='table table-bordered'>

    <tr><th><span>Primer Nombre</th><td>Trinny</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Carvajal</span> </td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>20/06/1990</span></td></tr>
                                              
    <tr><th><span>Genero</th><td>Femenina</span></td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>
                                                                                              
  </table>

</div>
</div>
</div>
</div>
<!-- Final del activador 5 de familiares -->

</div>
<!-- Final del Cuarto Activador -->
</div>
<!-- Inicio del Quinto Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
 
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                        
    <tr><th><span>Tipo de Vehiculo</th><td>Carro</span></td></tr>
                   
    <tr><th><span>Combustible</th><td>Gasolina</span> </td></tr>
       
    <tr><th><span>Marca</th><td>Mazda</span></td></tr>   

    <tr><th><span>Color</th><td>Negro</span> </td></tr>    

  </table>
                        
</div>

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                    
    <tr><th><span>Placa</th><td>A67 B36</span> </td></tr>

    <tr><th><span>Serial de la Carroceria</th><td>Ax469CU548DCG</span></td></tr>
               
    <tr><th><span>Modelo</th><td>M3</span> </td></tr>
                       
    <tr><th><span>Año</th><td>2016</span></td></tr>
                     
  </table>
                    
</div>

</div>
<!-- Final del Quinto Activador -->

<!-- Inicio del Sexto Activador -->           

<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
  
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                           
    <tr><th><span>Tipo</th><td>Arma</span></td></tr>

    <tr><th><span>Marca</th><td>Glock</span> </td></tr>

    <tr><th><span>Calibre</th><td>9mm</span></td></tr>

  </table>
                           
</div> 

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                                                 
    <tr><th><span>N° Serial</th><td>AXC345</span> </td></tr>

    <tr><th><span>Modelo</th><td>Glock 34</span></td></tr>
    
  </table>
  
</div>                      
</div>
<!-- Final del Sexto Activador -->  

</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- /.box body -->
<div class="form-group">
</div><!-- /.box footer -->
</form>
</div><!-- /.box -->
</div><!--/.col -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php
}
?>