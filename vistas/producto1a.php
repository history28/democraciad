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
    <span class="Titulo1">Para: 
	<a href="lista1.php?estilo=<? echo $resultcan2; ?>"><? echo $resultcan2; ?></a> - <a href="artista1.php?id=<? echo $varcant; ?>"><? echo $resultcan1; ?></a> </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="170"><a href="#"><img src="fotos/<? echo $varfoto; ?>" width="200" border="1" /></a></td>
          <td valign="top"><table width="400" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="200">Titulo de la queja: </td>
              <td><span class="Estilo1"><? echo $result2; ?></span></td>
            </tr>
            <tr>
              <td>Fecha de publicacion: </td>
              <td><? echo $varfecha; ?></td>
            </tr>
            <tr>
              <td>Usuario:</td>
              <td><a href="perfil1.php?id=<? echo $result6;?>" target="_blank"> <? echo $result5; ?></a></td>
            </tr>
            <tr>
              <td>Id queja </td>
              <td>
			  <? echo $result0; ?></td>
            </tr>
            <tr>
              <td>Adhesiones</td>
              <td><? echo $varapoyo; ?></td>
            </tr>
            <tr>
              <td>Ver respuesta </td>
              <td>no tiene respuesta </td>
            </tr>
            <tr>
              <td>respuesta en enlace </td>
              <td><a href="https://twitter.com/noticiAmerica" target="_blank">ver enlace </a></td>
            </tr>
            <tr>
              <td>enviar respuesta </td>
              <td><a href="nuevoperso5.php?idprod=<? echo $result0; ?>">solo el autor </a></td>
            </tr>
            <tr>
              <td>ver respuesta solo de esta queja </td>
              <td>
			  <a href="artista1a.php?id=<? echo $varcant; ?>&prod=<? echo $result0; ?>">
			  <img src="img/botonresp.png" width="160" height="25" border="0" /></a></td>
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
				  <a href="compra.php">
				  <img src="img/boton2.png" width="130" height="25" border="0" /></a>
			<?
			}
			else
			{
			?>
				  <a href="compra2.php?idprod=<?php echo $idprod; ?>">
				  <img src="img/boton2.png" width="130" height="25" border="0" /></a>
			<?
			}
			?>		  </td>
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
      <td>&nbsp;</td>
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
    <tr>
      <td><span class="letra1">Mi opinion acerca de esta queja: </span></td>
      <td>&nbsp;</td>
    </tr>

		<?
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
				<tr>
				  <td><span class="letra1">Pregunta enviada </span></td>
				  <td>&nbsp;</td>
				</tr>
				<?
				}
				else
				{
				

				?>
				<tr>
				  <td><form id="form1" name="form1" method="get" action="producto1.php">
					<table width="500" border="0" cellpadding="3" cellspacing="0">
					  <tr>
						<td>
						<textarea name="pregunta" cols="46" rows="3" class="estiloform">Escribe tu opinion aqui</textarea>
						  <input name="id" type="hidden" value="<? echo $idprod;?>" />
						  <input name="flag" type="hidden" value="aaa" /></td>
					  </tr>
					  <tr>
						<td><input type="submit" name="Submit" value="Enviar opinion" /></td>
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


    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
		<?
		if ($idus!="")
		{
		?>
		  <a href="subasta1.php?idprod=<?php echo $idprod; ?>">
		  <font color="#000000">Subasta</font></a>
		<?
		}
		?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="publica.php?idartis=<?php echo $id; ?>"></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><form id="form1" name="form1" method="post" action="adhiero1.php" target="_blank">
        <table width="500" border="0" cellpadding="3" cellspacing="0">
          <tr>
            <td><a href="compra2A.php?idprod=<?php echo $idprod; ?>">Poner adhesiones con DNI </a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form></td>
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
      <td>
	  
<table width="500" border="0" cellpadding="3" cellspacing="0">
        <?
$result = mysql_query("SELECT camp0, idprod, idautorori, nomautorori FROM adhesiones WHERE idprod = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp; <span class="Estilofont1">
            <?php	echo $row["idprod"]; ?>
          </span> </td>
          <td>&nbsp;
              Por: <?php echo $row["idautorori"]; ?> 
			  <a href="perfil1.php?id=<? echo $row["idautorori"];?>" target="_blank"> 
			  <?php echo $row["nomautorori"]; ?></a>			  </td>
          <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"></a></td>
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
      </table>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p>texto de respuesta </p>
        <p><span class="letra1"><?php echo $varresp; ?></span></p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p>link de respuesta</p>
        <p><span class="letra1">
		<a href="<?php echo $varlink; ?>">
		<?php echo $varlink; ?>		</a></span> </p></td>
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
