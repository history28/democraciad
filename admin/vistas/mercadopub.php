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
	  $idartis=$_GET["idartis"];
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1"> PUBLICAR PRODUCTO</span>
      <form id="form1" name="form1" method="post" action="mercadopub1.php">
      <table width="600" border="0" cellpadding="4" cellspacing="0">
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
          <td><span class="Estilo1">Publicar</span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>cantante : </td>
          <td><label>
            <input name="idcant" type="hidden" value="<? echo $idartis; ?>" /><? echo $idartis; ?>
            <br />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>id usuario : </td>
          <td><input name="iduser1" type="hidden" value="<? echo $idus; ?>" /><? echo $idus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>usuario:</td>
          <td><input name="iduser" type="hidden" value="<? echo $logus; ?>" /><? echo $logus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>album/producto:</td>
          <td><input name="produc" type="text" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>precio : </td>
          <td><input name="moneda" type="text" value="$ " size="5" />
            <input name="precio" type="text" value="0.00" size="12" /> 
            (puede ser con o sin decimales) </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>tipo ; </td>
          <td><select name="idcat">
      <?
$result = mysql_query("SELECT camp0, id1, nombre, descripcion, precio FROM mercado order by camp0  limit 0,15", $dbh);
		while($row = mysql_fetch_array($result))
		{
		  ?>
            <option value="<?php echo $row["id1"]; ?>"><?php echo $row["nombre"]; ?></option>
          <?php
		}
		?>

          </select>
           <input name="tipoprod2" type="text" /> o escriba aqui si es otro</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Estado del producto : </td>
          <td><select name="antiguedad">
            <option value="Nuevo">Nuevo</option>
            <option value="Semi-usado">Semi-usado</option>
            <option value="Bastante usado">Bastante usado</option>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>observaciones acerca del estado : </td>
          <td><textarea name="obs" cols="40" rows="3"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>pais de fabricacion : </td>
          <td><input name="pais" type="text" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>tiempo de publicacion : </td>
          <td><select name="duracion">
            <option value="15">15 dias</option>
            <option value="30">1 mes</option>
            <option value="60">2 meses</option>
            <option value="90">3 meses</option>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>descripcion</td>
          <td><textarea name="descrip" cols="40" rows="3"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Enviar" />
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
