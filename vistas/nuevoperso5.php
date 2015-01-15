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
body,td,th {
	font-size: 10pt;
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
	  $estilo=$_GET["estilo"];
	  $idprod=$_GET["idprod"];
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1"> PUBLICAR RESPUESTA </span>
      <form id="form1" name="form1" method="post" action="nuevoperso6.php" enctype="multipart/form-data">
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
          <td align="right">idprod : </td>
          <td><label>
            <input name="idprod" type="hidden" value="<? echo $idprod; ?>" /><? echo $idprod; ?>
            <br />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">id usuario : </td>
          <td><input name="iduser1" type="hidden" value="<? echo $idus; ?>" /><? echo $idus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">usuario:</td>
          <td><input name="iduser" type="hidden" value="<? echo $logus; ?>" /><? echo $logus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"> Respuesta : </td>
          <td><textarea name="descrip" cols="40" rows="5"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">link de respaldo: </td>
          <td><textarea name="link1" cols="40" rows="3"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">talvez dentro de un personaje </td>
          <td><select name="i1">
            <option value="0">ninguno</option>
            <?
	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE estilo = '$estilo' AND i1 = '0'  order by  camp0 limit 0, 88", $dbh);
		while($row = mysql_fetch_array($result))
		{
		  ?>
            <option value="<?php echo $row["camp0"]; ?>"><?php echo $row["nombre"]; ?></option>
            <?php
		}
		?>
            <option value="0">ninguno</option>
          </select></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
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
