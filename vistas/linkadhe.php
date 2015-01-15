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
	color: #666666;
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
	font-size: 16pt;
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
	  $id=$_GET["id"];
	  $idprod=$_GET["idprod"];
	  $pregunta=$_GET["pregunta"];

$result = mysql_query("SELECT camp0, fecha FROM adhesiones WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);


$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, fecha, foto, apoyos, respuesta, resplink, lugarref FROM tienda WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   


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
    <span class="Titulo1">Para: 
	<a href="#">Municipalidad de <? //echo $resultcan2; ?></a> - <a href="artista1.php?id=<? echo $varcant; ?>"><? echo $resultcan1; ?></a> </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="170" valign="top"><a href="#"></a></td>
          <td valign="top">&nbsp;</td>
          <td valign="middle">
..			</td>
        </tr>

      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <span class="Titulo1">Queja:</span>
	  <span class="Estilo1"> <? echo $result2; ?></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Pon en tu facebook lo siguiente: </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Apoyo esta queja  <? echo $result2; ?> 
	  <a href="http://localhost/muni1/vistas/producto1.php?id=<? echo $idprod; ?>" target="_blank">nn</a> </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Luego envia el link de la sigueinte manera: </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Haces clic en la fecha y luego copias la direccion que sale en el navegador, luego pegas esa direccion aqui. </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
  	  <span class="letra1">
	  <?php echo $result3; ?></span></td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		<?
		if ($idus!="")
		{
		?>
    <tr>
      <td><span class="letra1">Mi opinion acerca de esta queja: </span></td>
      <td>&nbsp;</td>
    </tr>

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
				$strSQL = $strSQL ."'" .$idus."', ";
				$strSQL = $strSQL ."'" .$logus."', ";
				$strSQL = $strSQL ."'" .$pregunta."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";
				$strSQL = $strSQL ."'" .$status."' )";
				$result = mysql_query($strSQL);
				//echo $strSQL;
				?>
				<tr>
				  <td><span class="letra1"><b>Tu opinion fue enviada </b></span></td>
				  <td>&nbsp;</td>
				</tr>
				<?
				}
				else
				{
				

				?>
				<tr>
				  <td><br /></td><td>&nbsp;</td>
				</tr>

				<?
			}
			?>



		<?
		}
		?>


    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
		<?
		?>		</td>
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
      <td><span class="Estilo1">Adhesiones recibidas </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><hr /></td>
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
	<?
	if ($idus!="")
	{
	?>
    <tr>
      <td><form id="form1" name="form1" method="post" action="adhiero1link.php">
        <table width="500" border="0" cellpadding="3" cellspacing="0">
          <tr>
            <td>Me adhiero (apoyo esta queja) </td>
          </tr>
          <tr>
            <td>enviar link
			<input name="link" type="text" value="" size="60" />
			<input name="id2" type="text" value="<? echo $id;?>" />
                <input name="flag2" type="hidden" value="aaa" /></td>
          </tr>
          <tr>
            <td><input type="submit" name="Submit2" value="Enviar adhesion" /></td>
          </tr>
        </table>
      </form></td>
      <td>&nbsp;</td>
    </tr>
	<?
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
      <td><span class="Estilo1">Opiniones recibidas </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="500" border="0" cellpadding="3" cellspacing="0">
        <?
$result = mysql_query("SELECT camp0, idprod, idautorori, nomautorori, preg, fecha FROM preguntas WHERE idprod = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp; <span class="Estilofont1">
            <?php	echo $row["preg"]; ?>
          </span> </td>
          <td>&nbsp; <?php //echo $row["idautorori"]; ?> <a href="perfil1.php?id=<? echo $row["idautorori"];?>" target="_blank"> <?php echo $row["nomautorori"]; ?></a> </td>
          <td>.</td>
        </tr>
        <?php
	}
	?>
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
      </table></td>
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
