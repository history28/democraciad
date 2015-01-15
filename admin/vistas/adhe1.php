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
.estiloform {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	background-color:#999999;
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

$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, fecha, foto, apoyos, respuesta, resplink FROM tienda WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
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
$varapoyo = mysql_result($result, 0, 11 );   //foto
$varresp = mysql_result($result, 0, 12 );   //foto
$varlink = mysql_result($result, 0, 13 );   //foto

if ($varfoto=="")
{
	$varfoto = "Sin_imagen.png";
}


$varcant = $result1;
$resultcan = mysql_query("SELECT camp0, id1, nombre, estilo, decada, foto FROM cantantes WHERE camp0 = '$varcant' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($resultcan);
$resultcan1 = mysql_result($resultcan, 0, 2 );   //0 es el row, 1 es el campo   
$resultcan2 = mysql_result($resultcan, 0, 3 );   //0 es el row, 1 es el campo   


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Queja para: 
	<a href="lista1.php?estilo=<? echo $resultcan2; ?>"><? echo $resultcan2; ?></a> - <a href="artista1.php?id=<? echo $varcant; ?>"><? echo $resultcan1; ?></a> </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>
	  <span class="Titulo1">Titulo:</span>
	  <span class="Estilo1"> <? echo $result2; ?></span></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
		<?
		if ($idus!="")
		{
		?>

		<?
		}
		if ($idus!="")
		{
			if ($flag!="")
			{

				$strSQL = "INSERT INTO preguntas (";
				$strSQL = $strSQL ."camp0, ";
				$strSQL = $strSQL ."idprod, ";
				$strSQL = $strSQL ."idautordes, ";
				$strSQL = $strSQL ."nomautordes, ";
				$strSQL = $strSQL ."idautorori, ";
				$strSQL = $strSQL ."nomautorori, ";
				$strSQL = $strSQL ."preg, ";
				$strSQL = $strSQL ."fecha , ";
				$strSQL = $strSQL ."estado ";
				$strSQL = $strSQL .") VALUES (";
				$strSQL = $strSQL ."'', ";
				$strSQL = $strSQL ."'" .$idprod."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$pregunta."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$status."' )";
				$result = mysql_query($strSQL);
				//echo $strSQL;
				?>
				<?
				}
				else
				{
				

				?>

				<?
			}
			?>



		<?
		}
		?>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><span class="Estilo1">Adhesiones recibidas </span></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td>
	  
<table width="700" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td>De</td>
          <td>Fecha</td>
          <td>Prov</td>
          <td>DNI</td>
          <td>con firma</td>
          <td>&nbsp;</td>
        </tr>
        <?
$result = mysql_query("SELECT camp0, idprod, idautorori, nomautorori, fecha FROM adhesiones WHERE idprod = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp; <span class="Estilofont1">
            <?php	//echo $row["idprod"]; ?>
          </span> </td>
          <td>&nbsp; 
            <?php //echo $row["idautorori"]; ?> 
			  <a href="perfil1.php?id=<? echo $row["idautorori"];?>" target="_blank"> 
			  <?php echo $row["nomautorori"]; ?></a>			  </td>
          <td><?php echo $row["fecha"]; ?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"></a></td>
        </tr>
        <?php
	}
	?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>	  </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><form id="form1" name="form1" method="post" action="adhiero1.php" target="_blank">
        <table width="500" border="0" cellpadding="3" cellspacing="0">
          <tr>
            <td>Me adhiero (apoyo esta queja) </td>
          </tr>
          <tr>
            <td><input name="id2" type="hidden" value="<? echo $idprod;?>" />
                <input name="flag2" type="hidden" value="aaa" /></td>
          </tr>
          <tr>
            <td><input type="submit" name="Submit2" value="Enviar adhesion" /></td>
          </tr>
        </table>
      </form></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
  </table>
</div>
</div>

</body>
</html>
