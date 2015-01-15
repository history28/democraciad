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
	  $idprod=$_GET["id"];
	  $flag=$_GET["flag"];
	  $pregunta=$_GET["pregunta"];


$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado, edad FROM usuarios WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Mensaje Para: <? echo $result1; ?>
	</span>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
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
      <td><span class="letra1">Escribir el mensaje aqui: </span></td>
      <td>&nbsp;</td>
    </tr>

		<?
		}
		if ($idus!="")
		{
			if ($flag!="")
			{

				$strSQL = "INSERT INTO mensajes (";
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
				$strSQL = $strSQL ."'" .$idprod."', ";
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
				  <td><span class="letra1"><b>Tu mensaje fue enviado </b></span></td>
				  <td>&nbsp;</td>
				</tr>
				<?
				}
				else
				{
				

				?>
				<tr>
				  <td><form id="form1" name="form1" method="get" action="advertencia.php">
					<table width="500" border="0" cellpadding="3" cellspacing="0">
					  <tr>
						<td>
						<textarea name="pregunta" cols="55" rows="6" class="estiloform"></textarea>
						  <input name="id" type="hidden" value="<? echo $idprod;?>" />
						  <input name="flag" type="hidden" value="aaa" /></td>
					  </tr>
					  <tr>
						<td><input type="submit" name="Submit" value="Enviar mensaje" /></td>
					  </tr>
					</table>
						</form>
				  <br /></td>
				  <td>&nbsp;</td>
				</tr>

				<?
			}
			?>



		<?
		}
		?>
	<?
	if ($idus!="")
	{
	?>
	<?
	}
	?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<A HREF="javascript:history.back()">Regregar </a></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
