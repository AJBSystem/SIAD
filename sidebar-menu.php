<?php 

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

  <?php 

  if ($_GET["module"]=="start") { 
    $active_home="active";
  } else {
    $active_home="";
  }
  ?>
    <li class="<?php echo $active_home;?>">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php

  if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=medicines"><i class="fa fa-folder"></i> Datos de funcionarios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=medicines"><i class="fa fa-folder"></i> Datos de funcionarios </a>
      </li>
  <?php
  }


  if ($_GET["module"]=="medicines_transaction" || $_GET["module"]=="form_medicines_transaction") { ?>
    <li class="active">

      </li>
  <?php
  }

  else { ?>
    <li>

      </li>
  <?php
  }

  if ($_GET["module"]=="stock_inventory") { ?>
    <li class="active treeview">
      <a href="javascript:void(0);">
        <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      
<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
    </li>
    <?php
  }

  elseif ($_GET["module"]=="stock_report") { ?>
    
<li class="active treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }

  else { ?>
<li class="treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>

</li>
    <?php
  }


  if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
    <li class="active">
      <a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
      </li>
  <?php
  }


  if ($_GET["module"]=="password") { ?>
    <li class="active">
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>

<?php
}

elseif ($_SESSION['permisos_acceso']=='Gerente') { ?>
  <!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

  <?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }


  if ($_GET["module"]=="stock_inventory") { ?>
<li class="active treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }
  elseif ($_GET["module"]=="stock_report") { ?>
<li class="active treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>

<ul class="treeview-menu">
   <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>
    
    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de Divisiónss </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }
  else { ?>

<li class="treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }

  if ($_GET["module"]=="password") { ?>
    <li class="active">
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>
<?php
}
if ($_SESSION['permisos_acceso']=='Almacen') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

  <?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=medicines"><i class="fa fa-folder"></i> Datos de Funcionarios </a>
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=medicines"><i class="fa fa-folder"></i> Datos de Funcionarios </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="medicines_transaction" || $_GET["module"]=="form_medicines_transaction") { ?>
    <li class="active">
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Funcionarios </a>
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Funcionario </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="stock_inventory") { ?>
  
<li class="active treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    
    <?php
  }
  elseif ($_GET["module"]=="stock_report") { ?>
<li class="active treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>

<ul class="treeview-menu">
  
    <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>

    <li class="active"><a href="pdf/reporte_division.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }
  else { ?>

<li class="treeview">
  
  <a href="javascript:void(0);">
    
    <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
  
  </a>
 
<ul class="treeview-menu">
  
   <li class="active"><a href="?module=stock_report" ><i class="fa fa-user"></i> Reporte de Dirección </a></li>
    
    <li class="active"><a href="?module=stock_report/viewdivision.php"><i class="fa fa-sitemap"></i> Reporte de División </a></li>
      
      <li class="active"><a href="pdf/reporte_laboral.php"><i class="fa fa-suitcase"></i> Reporte Laboral </a></li>
        
        <li class="active"><a href="pdf/reporte_padres.php"><i class="fa fa-users"></i> Reporte de Padres </a></li>
          
          <li class="active"><a href="pdf/reporte_hijos.php"><i class="fa fa-odnoklassniki"></i> Reporte de Hijos </a></li>
            
            <li class="active"><a href="pdf/reporte_vehiculo.php"><i class="fa fa-car"></i> Reporte de Vehiculo </a></li>
              
              <li class="active"><a href="pdf/reporte_dotaciones.php"><i class="fa fa-book"></i> Reporte de Dotaciones </a></li>
</ul>
</li>
    <?php
  }

  if ($_GET["module"]=="password") { ?>
    <li class="active">
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>
<?php
}
?>