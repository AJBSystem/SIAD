
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $p_nombre  = mysqli_real_escape_string($mysqli, trim($_POST['p_nombre']));


            $created_user = $_SESSION['id_user'];

  
            $query = mysqli_query($mysqli, "INSERT INTO medicamentos(codigo,p_nombre,created_user,updated_user) 
                                            VALUES('$codigo','$p_nombre','$created_user','$created_user')")
                                            or die('error '.mysqli_error($mysqli));    

        
            if ($query) {
         
                header("location: ../../main.php?module=medicines&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        
                $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
                $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
                $credencial  = mysqli_real_escape_string($mysqli, trim($_POST['credencial']));
                $rif  = mysqli_real_escape_string($mysqli, trim($_POST['rif']));
                $p_nombre  = mysqli_real_escape_string($mysqli, trim($_POST['p_nombre']));
                $s_nombre  = mysqli_real_escape_string($mysqli, trim($_POST['s_nombre']));
                $p_apellido  = mysqli_real_escape_string($mysqli, trim($_POST['p_apellido']));
                $s_apellido  = mysqli_real_escape_string($mysqli, trim($_POST['s_apellido']));
                $fec_nac  = mysqli_real_escape_string($mysqli, trim($_POST['fec_nac']));      
                $edad  = mysqli_real_escape_string($mysqli, trim($_POST['edad']));
                $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                $lugar_nac  = mysqli_real_escape_string($mysqli, trim($_POST['lugar_nac']));
                $estado_c  = mysqli_real_escape_string($mysqli, trim($_POST['estado_c']));
                $estado  = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
                $grado_inst  = mysqli_real_escape_string($mysqli, trim($_POST['grado_inst']));
                $correo_e  = mysqli_real_escape_string($mysqli, trim($_POST['correo_e']));
                $tel_cel  = mysqli_real_escape_string($mysqli, trim($_POST['tel_cel']));
                $tel_hab  = mysqli_real_escape_string($mysqli, trim($_POST['tel_hab']));
                $tel_emerg  = mysqli_real_escape_string($mysqli, trim($_POST['tel_emerg']));
                $municipio  = mysqli_real_escape_string($mysqli, trim($_POST['municipio']));
                $ciudad  = mysqli_real_escape_string($mysqli, trim($_POST['ciudad']));
                $parroquia  = mysqli_real_escape_string($mysqli, trim($_POST['parroquia']));
                $avenida = mysqli_real_escape_string($mysqli, trim($_POST['avenida']));
                $calle = mysqli_real_escape_string($mysqli, trim($_POST['calle']));
                $casa = mysqli_real_escape_string($mysqli, trim($_POST['casa']));
                $serial_cp  = mysqli_real_escape_string($mysqli, trim($_POST['serial_cp']));
                $codigo_cp  = mysqli_real_escape_string($mysqli, trim($_POST['codigo_cp']));
                $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE medicamentos SET  
                                                                         cedula      = '$cedula',
                                                                         credencial  = '$credencial',
                                                                         rif  = '$rif',
                                                                         p_nombre    = '$p_nombre',
                                                                         s_nombre    = '$s_nombre',
                                                                         p_apellido       = '$p_apellido',
                                                                         s_apellido       = '$s_apellido',
                                                                         fec_nac       = '$fec_nac',
                                                                         edad       = '$edad',
                                                                         genero       = '$genero',
                                                                         lugar_nac       = '$lugar_nac',
                                                                         estado_c       = '$estado_c',
                                                                          estado       = '$estado',
                                                                         grado_inst       = '$grado_inst',
                                                                         tel_cel       = '$tel_cel',
                                                                         tel_hab       = '$tel_hab',
                                                                         tel_emerg       = '$tel_emerg',
                                                                         parroquia       = '$parroquia',
                                                                         municipio       = '$municipio',
                                                                         ciudad      = '$ciudad',
                                                                        avenida      = '$avenida',
                                                                        calle      = '$calle',
                                                                         casa      = '$casa',
                                                                         codigo_cp    = '$codigo_cp',
                                                                         serial_cp    = '$serial_cp',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo       = '$codigo'")
                                                or die('error: '.mysqli_error($mysqli));

    
                if ($query) {
                  
                    header("location: ../../main.php?module=medicines&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM medicamentos WHERE codigo='$codigo'")
                                            or die('error '.mysqli_error($mysqli));


            if ($query) {
     
                header("location: ../../main.php?module=medicines&alert=3");
            }
        }
    }       
}       
?>