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
body,td,th {
	font-size: 12pt;
	color: #333333;
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
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $idprod=$_GET["id"];

$result = mysql_query("SELECT camp0, idcat, nombre, descripcion, resumen, autor, autor, autor, precio, fecha FROM mercadoprod WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
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
      <td><table width="800" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="170"><a href="#"><img src="fotos/Sin_imagen.png" width="150" height="150" border="1" /></a></td>
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
			?>
		  </td>
        </tr>

      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Descripcion:</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
  	  <span class="letra1">
El grupo no lleva su nombre en vano: sus letras hablan sobre la matanza y el robo de las tierras a los pueblos aborigenes. &quot;Musicalmente tenemos algo de Motorhead o de la primera &eacute;poca de AC/DC -explican-. Y las letras no caen en agresiones baratas. En los &uacute;ltimos tiempos&nbsp;Los Violadores&nbsp;parec&iacute;an una mezcla entre el programa de Lucho Avil&eacute;s y el Show de los Muppets&quot;. (S&iacute; de Clar&iacute;n, 11/09/92).		</span></td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Preguntas al vendedor: </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><form id="form1" name="form1" method="post" action="">
        <table width="500" border="0" cellpadding="3" cellspacing="0">
          <tr>
            <td>Escribe tu pregunta </td>
            </tr>
          <tr>
            <td><textarea name="textarea" cols="46" rows="3"></textarea></td>
            </tr>
          <tr>
            <td><input type="submit" name="Submit" value="Enviar pregunta" /></td>
            </tr>
        </table>
            </form>
      <br /></td>
      <td>&nbsp;</td>
    </tr>
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
		  <font color="#cccccc">Subasta</font></a>
		<?
		}
		?>
	  </td>
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
