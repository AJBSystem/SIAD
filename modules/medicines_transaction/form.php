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
  <div class="col-md-12">
<div class="box box-primary">

<form role="form" class="form-horizontal" action="modules/medicines/proses.php?act=update" method="POST" >

<div class="box-body">

<div class="">

<div class="col-md-12 col-sm-6 col-xs-12">

<div class="x_panel">

<div class="x_content">

<!-- Inicio de las imagenes de muestra -->

<div class="col-md-2 profile_left">
  <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
    <h3>Darly Martinez</h3>
      <a class="btn btn-primary" ><i class="fa fa-edit m-right-xs"></i> Editar</a>
      <a class="btn btn-warning" href="pdf/reporte_funcionarios.php"><i class="fa fa-print m-right-xs"></i> Imprimir</a>
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

    <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-medkit"> Reposo</a>
    </li>

    <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="fa fa-globe"> Vacaciones</a>
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

<!-- Inicio del modal de Direccion -->

<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal">Dirección</button>
</div>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos De La Dirección</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr><th><span>Estado</th><td>20.096.158</span> </td></tr>

    <tr><th><span>Municipio</th><td>Trinny</span> </td></tr>

    <tr><th><span>Ciudad</th><td>Dayana</span> </td></tr>

    <tr><th><span>Parroquia</th><td>Carvajal</span> </td></tr>

    <tr><th><span>Avenida</th><td>Martinez</span></td></tr>

    <tr><th><span>Calle</th><td>28/08/1995</span></td></tr>
                                              
    <tr><th><span>Casa N°</th><td>30 Años</span></td></tr>

  </table>

    </div>
  </div>
</div>

<!-- Final del modal de Direccion -->

<!-- Final del Primer Activador -->

</div>

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

<!-- Final del Segundo Activador -->

</div>
     
<!-- Inicio del Tercer Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
  
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                     
    <tr><th><span>Seleccionar División</th><td>División de Sistemas</span></td></tr>
                    
    <tr><th><span>Tiempo De Servicio</th><td>2 Meses</span> </td></tr>
          
    <tr><th><span>Rango</th><td>Experto Técnico I</span></td></tr>

    <tr><th><span>Correo Institucional</th><td>darlymartinez@cicpc.gob.ve</span> </td></tr>

    <tr><th><span>Tipo de Funcionario</th><td>Administrativo</span> </td></tr>

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

<!-- Final del Tercer Activador -->

</div>

<!-- Inicio del Cuarto Activador -->

<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
 
<!-- Inicio del modal de Madre -->

<br />
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal1">Madre</button>
</div>

<div class="modal fade" id="miModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos De La Madre</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>11.201.693</span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Yoseida</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Maria</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Barreto</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Carvajal</span></td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>21/12/1971</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>45 Años</span></td></tr>

    <tr><th><span>Genero</th><td>Femenina</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

    </div>
  </div>
</div>

<!-- Final del modal de Madre -->

<!-- Inicio del modal de Padre -->

<br />
<div class="contenedor-modal">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal2">Padre</button>
</div>

<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Padre</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>10.877.210</span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Agustin</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Fortunato</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Martinez</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td></span></td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>28/08/1967</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>51 Años</span></td></tr>

    <tr><th><span>Genero</th><td>Masculino</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

    </div>
  </div>
</div>

<!-- Final del modal de Padre -->

<!-- Inicio del modal de Hijos -->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal3">Hijos</button>
</div>

<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Hijo</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr>Ninguno</tr>

  </table>
     
    </div>
  </div>
</div>

<!-- Final del modal de Hijos -->

<!-- Inicio del modal de Conyuge -->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal4">Cónyuge</button>
</div>

<div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Cónyuge</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr>Ninguno</tr>

  </table>
     
    </div>
  </div>
</div>

<!-- Final del modal de Conyuge -->

<!-- Inicio del modal de Hermanos-->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal5">Hermanos</button>
</div>

<div class="modal fade" id="miModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos De Hermanos</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>23.641.099</span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Dauli</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Agustin</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Martinez</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Barreto</span></td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>15/12/1991</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>25 Años</span></td></tr>

    <tr><th><span>Genero</th><td>Masculino</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

  <tr>2 Hermano</tr>

  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td></span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Leidys</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Dayana</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Martinez</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Gonzales</span></td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>10/10/2004</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>15 Años</span></td></tr>

    <tr><th><span>Genero</th><td>Femenina</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>Si</span> </td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>

    </div>
  </div>
</div>

<!-- Final del modal de Hermanos-->

<!-- Inicio del modal de Otros -->

<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal6">Otros</button>
</div>

<div class="modal fade" id="miModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos De Familiares</h4>
      </div>
     
  <table class='table table-bordered'>

    <tr><th><span>Cedula</th><td>20.096.158</span> </td></tr>

    <tr><th><span>Primer Nombre</th><td>Trinny</span> </td></tr>

    <tr><th><span>Segundo Nombre</th><td>Dayana</span> </td></tr>

    <tr><th><span>Primer Apellido</th><td>Carvajal</span> </td></tr>

    <tr><th><span>Segundo Apellido</th><td>Martinez</span></td></tr>

    <tr><th><span>Fecha de Nacimiento</th><td>28/08/1995</span></td></tr>
                                              
    <tr><th><span>Edad</th><td>30 Años</span></td></tr>

    <tr><th><span>Genero</th><td>Femenina</span></td></tr>
      
    <tr><th><span>Estudiante</th><td>No</span> </td></tr>

    <tr><th><span>Funcionario</th><td>No</span> </td></tr>

    <tr><th><span>Información Medica</th><td>Ninguna</span> </td></tr>

  </table>
     
    </div>
  </div>
</div>

<!-- Final del modal de Otros -->

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

<!-- Final del Quinto Activador -->

</div>

<!-- Inicio del Sexto Activador -->      

<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
  
<!-- Inicio del modal de Armas -->

<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal7">Armas</button>
</div>

<div class="modal fade" id="miModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Arma</h4>
      </div>
     
<table class='table table-bordered'>

  <tr><th><span>Tipo de Arma</th><td>Corta</span></td></tr>

  <tr><th><span>Marca</th><td>Glock</span> </td></tr>

  <tr><th><span>Calibre</th><td>9mm</span></td></tr>

  <tr><th><span>N° Serial</th><td>AXC345</span> </td></tr>

  <tr><th><span>Modelo</th><td>Glock 34</span></td></tr>

</table>
     
    </div>
  </div>
</div>

<!-- Final del modal de Armas -->

<!-- Inicio del modal de Chaleco -->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal8">Chaleco</button>
</div>

<div class="modal fade" id="miModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Chaleco</h4>
      </div>
     
<table class='table table-bordered'>

  <tr><th><span>Tipo de Chaleco</th><td>IV</span></td></tr>

  <tr><th><span>Marca</th><td>Glock</span> </td></tr>

  <tr><th><span>Modelo</th><td>Glock 34</span></td></tr>

  <tr><th><span>N° Serial</th><td>AXC345</span> </td></tr>

</table>
     
    </div>
  </div>
</div>

<!-- Final del modal de Chaleco -->

<!-- Inicio del modal de Esposas -->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal9">Esposas</button>
</div>

<div class="modal fade" id="miModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos De Esposas</h4>
      </div>
     
<table class='table table-bordered'>

  <tr><th><span>Tipo de Esposas</th><td>Metal</span></td></tr>

  <tr><th><span>Marca</th><td>Glock</span> </td></tr>

  <tr><th><span>Modelo</th><td>Glock 34</span></td></tr>

  <tr><th><span>N° Serial</th><td>AXC345</span> </td></tr>
  
</table>

    </div>
  </div>
</div>

<!-- Final del modal de Esposas -->

<!-- Inicio del modal de Radio -->
<br>
<div class="contenedor-modal">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModal10">Radios Portatiles</button>
</div>

<div class="modal fade" id="miModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Datos Del Radio</h4>
      </div>
     
<table class='table table-bordered'>

  <tr><th><span>Tipo de Radio</th><td>Metal</span></td></tr>

  <tr><th><span>Marca</th><td>Glock</span> </td></tr>

  <tr><th><span>Modelo</th><td>Glock 34</span></td></tr>

  <tr><th><span>N° Serial</th><td>AXC345</span> </td></tr>
  
</table>

    </div>
  </div>
</div>


<!-- Final del modal de Radio -->

<!-- Final del Sexto Activador -->  

</div>

<!-- Inicio del Septimo Activador -->  

<div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
  
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                     
    <tr><th><span>Fecha de Inicio</th><td>11/09/2019</span></td></tr>
                     
    <tr><th><span>Dias de Reposo</th><td>5 Meses</span></td></tr>
          
  </table>
                         
</div>

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>

    <tr><th><span>Fecha de Regreso</th><td>11/10/2019</span> </td></tr>
  
    <tr><th><span>Motivo del Reposo</th><td>Problemas de Salud</span> </td></tr>                    
                       
  </table>
                 
</div>

<!-- Final del Septimo Activador -->

</div>

<!-- Final del Octavo Activador -->  


<div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab">
  
<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>
                     
    <tr><th><span>Tiempo de Servicio</th><td>5 Años</span></td></tr>
                    
    <tr><th><span>Fecha de Regreso</th><td>29/10/2019</span> </td></tr>
          
    <tr><th><span>N° de Vacaciones Solicitadas</th><td>3</span></td></tr>
          
  </table>
                         
</div>

<div class="col-sm-4 col-md-5 col-xs-6 text-left">

  <table class='table table-bordered'>

    <tr><th><span>Fecha de Inicio</th><td>01/10/2018</span> </td></tr>
  
    <tr><th><span>Dias de Vacaciones</th><td>5 Meses</span></td></tr>                     
                       
    <tr><th><span>N° de Vacaciones Vencidas</th><td>4</span></td></tr>

  </table>
                 
</div>

<!-- Final del Octavo Activador -->

</div>

<!-- Fin -->
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

