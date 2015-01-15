<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #0099CC;
	font-weight: bold;
	font-size: 14pt;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $idartis=$_GET["idprod"];

	$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, precio2 FROM tienda WHERE camp0 = '$idartis' order by camp0 DESC limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	$result0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
	$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
	$varprod = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
	$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
	$result5 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   
	$varmoneda = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   
	$varprecio1 = mysql_result($result, 0, 8 );   //0 es el row, 1 es el campo   
	$varprecio2 = mysql_result($result, 0, 9 );   //0 es el row, 1 es el campo   

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1"> ANOTAR ADHESION</span>
      <form id="form1" name="form1" method="post" action="compragraba.php">
      <table width="400" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><span class="Estilo1">Enviar datos </span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>id queja  : </td>
          <td><label>
            <input name="idprod" type="hidden" value="<? echo $idartis; ?>" /><? echo $idartis; ?>
            <br />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>titulo:</td>
          <td><input name="produc" type="hidden" value="<? echo $varprod; ?>" /><? echo $varprod; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>user:</td>
          <td><input name="iduser" type="hidden" value="<? echo $logus; ?>" /><? echo $logus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>DNI : </td>
          <td><label>
            <input type="text" name="textfield" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Nombre : </td>
          <td><input type="text" name="textfield2" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Link de respaldo : </td>
          <td><input type="text" name="textfield22" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>comentario</td>
          <td><textarea name="descrip" cols="40" rows="3"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Enviar datos" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      </form>
      <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </div>
</div>
</div>

</body>
</html>
