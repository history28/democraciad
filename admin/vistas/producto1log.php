<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<MMString:LoadString id="insertbar/formsTextfield" />
</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-size: 12pt;
	color: #999999;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo1 {
	font-size: 14pt;
	font-weight: bold;
}
.Estilo6 {font-size: 14pt;
	font-weight: bold;
	color: #000000;
}
-->
</style>
<!-- Copyright 2000,2001 Macromedia, Inc. All rights reserved. -->
<!-- Copyright 2000,2001 Macromedia, Inc. All rights reserved. -->
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $idprod=$_GET["id"];
	  $flag=$_GET["flag"];
	  $pregunta=$_GET["pregunta"];

$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, fecha, foto FROM tienda WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
$result5 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   
$result6 = mysql_result($result, 0, 6 );   //0 es el row, 1 es el idautor   
$varmoneda = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   
$varprecio = mysql_result($result, 0, 8 );   //0 es el row, 1 es el campo   
$varfecha = mysql_result($result, 0, 9 );   //0 es el row, 1 es el campo   
$varfoto = mysql_result($result, 0, 10 );   //foto

if ($varfoto=="")
{
	$varfoto = "Sin_imagen.png";
}


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Nombre del usuario </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><table width="800" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="170"><a href="#"><img src="fotos/<? echo $varfoto; ?>" width="200" border="1" /></a></td>
          <td valign="top"><table width="400" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="200">nombre del producto: </td>
              <td><span class="Estilo1"><? echo $result2; ?></span></td>
            </tr>
            <tr>
              <td>precio:</td>
              <td><? echo $varmoneda; ?> <? echo $varprecio; ?></td>
            </tr>
            <tr>
              <td>fecha de publicacion: </td>
              <td><? echo $varfecha; ?></td>
            </tr>
            <tr>
              <td>vendedor:</td>
              <td><a href="perfil1.php?id=<? echo $result6;?>" target="_blank"> <? echo $result5; ?></a></td>
            </tr>
            <tr>
              <td>id producto </td>
              <td>
			  <? echo $result0; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
          <td valign="middle">
			<?
			if ($idus=="")
			{
			?>
				  <a href="compra.php"></a>
			<?
			}
			else
			{
			?>
				  <a href="compra2.php?idprod=<?php echo $idprod; ?>"></a>
			<?
			}
			?>		  </td>
        </tr>

      </table></td>
    </tr>
    <tr>
      <td><span class="Estilo6">Descripcion:</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
  	  <span class="letra1">
	  <?php echo $result3; ?>
</span></td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="letra1">Preguntas recibidas: </span></td>
      <td>&nbsp;</td>
    </tr>
<?
$result = mysql_query("SELECT camp0, idprod, idautordes, idautorori, preg, estado, tipo, fecha FROM preguntas WHERE idprod = '$idprod' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
		?>
          <tr>
            <td width="160"><a href="producto1log.php?id=<?php	echo $row["camp0"]; ?>">
			<img src="fotos/<? echo $varfoto; ?>" width="50" border="1" /></a></td>
            <td>&nbsp;
				<a href="producto1log.php?id=<?php	echo $row["idautorori"]; ?>"><span class="Estilofont1">
              <?php	echo $row["preg"]; ?>
            </span></a>			</td>
          </tr>
		<tr>
		  <td colspan="2"><hr /></td>
	  </tr>
    <?php
	}
	?>




    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
