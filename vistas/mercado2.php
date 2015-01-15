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
.Estilo5 {font-size: 12pt}
.Estilo4 {	color: #FF0000;
	font-size: 10pt;
	font-weight: bold;
}
.Estilo6 {	color: #FFFFFF;
	font-size: 10pt;
	font-weight: bold;
}
.Estilo7 {	color: #333333;
	font-size: 12pt;
	font-weight: bold;
}
.Estilo7 {	color: #333333;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  $pcamp0=$_GET["id"];
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="95%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#000000"><table width="180" border="1" cellspacing="0" cellpadding="6">
          <tr>
            <td align="center"><span class="Estilo6">CDs</span> </td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">DVDs / Blue-ray </td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">Discos de Vinilo </td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">&nbsp;Libros / Revistas / Posters</td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">&nbsp;Ropa</td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">&nbsp;Joyas / Adornos / Juguetes</td>
          </tr>
          <tr>
            <td align="center" class="Estilo6">&nbsp;Otros </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
      </table></td>
      <td valign="top" bgcolor="#FFFFFF">
	  <?
		$result = mysql_query("SELECT camp0, id1, nombre, descripcion, precio, foto FROM mercado WHERE camp0 = '$pcamp0' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$varnombre = mysql_result($result, 0, 2 );   //
$vardescrip = mysql_result($result, 0, 3 );   //
$varprecio = mysql_result($result, 0, 4 );   //
$varfoto = mysql_result($result, 0, 5 );   //
echo $varnombre;	  
	  ?>
	  
	  <table width="600" border="0">
        <tr>
          <td colspan="2" bgcolor="#993300">NOMBRE DEL PRODUCTO </td>
        </tr>
        <tr>
          <td><img src="fotos/<? echo $varfoto; ?>" width="200" /></td>
          <td valign="top"><table width="300" border="0">
              <tr>
                <td><span class="Estilo7"><? echo $varnombre; ?> </span></td>
              </tr>
              <tr>
                <td>Precio : <? echo $varprecio; ?></td>
              </tr>
              <tr>
                <td>original : </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><img src="img/carrito.png" width="201" height="35" /></td>
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
          </table></td>
        </tr>
        <tr>
          <td><span class="Estilo7">descripcion del producto </span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">
		  <? echo $vardescrip; ?>
		  AG bertha jute tote/grocery store bag<br />
              <br />
            Approximate Dimensions 15.5&rdquo; tall x 16&rdquo; long x 7&rdquo; wide</td>
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
      </table></td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
