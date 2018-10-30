<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

$no = 1;

$query = mysqli_query($mysqli, "SELECT cedula,credencial,p_nombre,s_nombre,p_apellido,s_apellido,fec_nac,edad,tel_cel,correo_e,precio_compra,precio_venta,unidad,stock FROM medicamentos ORDER BY nombre ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>INFORME DE STOCK DE MEDICAMENTOS</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
           Datos de Funcionarios 
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>Cedula</small></th>
                        <th height="20" align="center" valign="middle"><small>Credencial</small></th>
                        <th height="20" align="center" valign="middle"><small>Primer Nombre</small></th>
                        <th height="20" align="center" valign="middle"><small>Segundo Nombre</small></th>
                        <th height="20" align="center" valign="middle"><small>Primer Apellido</small></th>
                        <th height="20" align="center" valign="middle"><small>Segundo Apellido</small></th>
                        <th height="20" align="center" valign="middle"><small>Fecha de Nacimiento</small></th>
                        <th height="20" align="center" valign="middle"><small>Edad</small></th>
                        
                        <th height="20" align="center" valign="middle"><small>Telefono Celular</small></th>
                        <th height="20" align="center" valign="middle"><small>Correo Electronico</small></th>
                        <th height="20" align="center" valign="middle"><small>STOCK</small></th>
                        <th height="20" align="center" valign="middle"><small>UNIDAD</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query)) {
            $precio_compra = format_rupiah($data['precio_compra']);
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[cedula]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[credencial]</td>
                        <td style='padding-left:5px;' width='140' height='13' valign='middle'>$data[p_nombre]</td>
                        <td style='padding-left:5px;' width='140' height='13' valign='middle'>$data[s_nombre]</td>
                        <td style='padding-left:5px;' width='140' height='13' valign='middle'>$data[p_apellido]</td>
                        <td style='padding-left:5px;' width='140' height='13' valign='middle'>$data[s_apellido]</td>
                        <td style='padding-left:5px;' width='100' height='13' valign='middle'>$data[fec_nac]</td>
                        <td style='padding-left:5px;' width='80' height='13' valign='middle'>$data[edad]</td>
                        <td style='padding-left:5px;' width='100' height='13' valign='middle'>$data[tel_cel]</td>
                        <td style='padding-left:5px;' width='100' height='13' valign='middle'>$data[correo_e]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_compra</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$data[stock]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[unidad]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>

            
        </div>
    </body>
</html>
<?php
$filename="INFORMDE STOCK.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('L','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>