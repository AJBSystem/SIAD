<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edad</title>
</head>

<body>
<?php 
$fechanac=$_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];
$faltadato="si";
if(($_POST['ano'] != "") && ($_POST['mes'] != "") && ($_POST['dia'] != "")) {
$faltadato="no";
}
if(($_POST['ano'] != "") && ($_POST['mes'] != "") && ($_POST['dia'] != "") && ($fechaValida == "si")){ ?> 
Tu edad es: <?php echo edad($fechanac); ?> A&ntilde;os
<?php  } ?>
<?php if (($_POST['MM_send'] == "form1") && ($faltadato == "si") && ($fechaValida != "si")){ ?>
*Debe completar todos los campos<br />
<?php } ?>
<?php if (($_POST['MM_send'] == "form1") && ($fechaValida != "si") && ($faltadato == "no")){ ?>
*La fecha de nacimiento que escribiste no es valida<br />
<?php } ?>
<form id="form1" name="form1" method="post" action="edad.php">
<table> <tr valign="baseline">
                    <td nowrap align="right">Fecha de Nacimiento:</td>
                    <td colspan="2" align="left"><select name="dia">
                        <option value="">dia</option>
                      <?php $Dias="1" ?>
                      <?php while($Dias <= "31"){ ?>
                      <option <?php if($Dias == $_POST['dia']){  ?>selected="selected"<?php }?> value="<?php echo $Dias; ?>"><?php echo $Dias; ?></option>
                      <?php $Dias=$Dias+1 ?>
                      <?php } ?>
                      </select>
                      <select name="mes">
                      <option value="">mes</option>
                        <option value="1" <?php if ($_POST['mes'] == "1"){  ?> selected="selected"<?php } ?> >Enero</option>
                        <option value="2" <?php if ($_POST['mes'] == "2"){  ?> selected="selected"<?php } ?> >Febrero</option>
                        <option value="3" <?php if ($_POST['mes'] == "3"){  ?> selected="selected"<?php } ?> >Marzo</option>
                        <option value="4" <?php if ($_POST['mes'] == "4"){  ?> selected="selected"<?php } ?> >Abril</option>
                        <option value="5" <?php if ($_POST['mes'] == "5"){  ?> selected="selected"<?php } ?> >Mayo</option>
                        <option value="6" <?php if ($_POST['mes'] == "6"){  ?> selected="selected"<?php } ?> >Junio</option>
                        <option value="7" <?php if ($_POST['mes'] == "7"){  ?> selected="selected"<?php } ?> >Julio</option>
                        <option value="8" <?php if ($_POST['mes'] == "8"){  ?> selected="selected"<?php } ?> >Agosto</option>
                        <option value="9" <?php if ($_POST['mes'] == "9"){  ?> selected="selected"<?php } ?> >Septiembre</option>
                        <option value="10" <?php if ($_POST['mes'] == "10"){  ?> selected="selected"<?php } ?> >Octubre</option>
                        <option value="11" <?php if ($_POST['mes'] == "11"){  ?> selected="selected"<?php } ?> >Noviembre</option>
                        <option value="12" <?php if ($_POST['mes'] == "12"){  ?> selected="selected"<?php } ?> >Diciembre</option>
                      </select>
                      <select name="ano">
                        <option value="">ano</option>
<?php 
$hoyano=date("Y");
//$hoydateyear=$hoyano-18;
$hoydateyear=$hoyano-1;
$dateyear=$hoydateyear-100;
?>
                      <?php while($dateyear <= $hoydateyear){ ?>
                      <option <?php if ($dateyear == $_POST['ano']) {?>selected="selected" <?php }?> value="<?php echo $dateyear; ?>"><?php echo $dateyear; ?></option>
                      <?php $dateyear=$dateyear+1 ?>
                      <?php } ?>
                      </select></td>
                  </tr></table>

  <input type="submit" name="button" id="button" value="Calcular Edad" />
  <input type="hidden" name="MM_send" id="MM_send" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>