<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantilla.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="contenedor">
<div class="cabezera">
	  <?
	  include("templates/header.php");
	  ?>
</div>
<div class="cuerpo">
<div class="cuerpoi">
  <br />
  <?
  include("templates/derecha.php");
  ?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="cuerpoc">
  <p>
		
    <table width="400" border="0" cellpadding="4" cellspacing="0">
      <tr>
        <td align="center">&nbsp;<a href="area1.php"><span class="menusub">ADMIN AREAS</span></a></td>
          <td align="center">&nbsp;<a href="area1b.php"><span class="menusub">RESERVACIONES</span></a></td>
          <td align="center">&nbsp;<a href="area1c.php"><span class="menusub">ADM RESERVACIONES</span></a></td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
    </table>

    <div id="subcontent"></p>
    <table width="600" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td><a href="#">agregar</a></td>
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
        <td>&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td align="center">CASA</td>
        <td align="center">NOMBRE DE USUARIO </td>
        <td align="center">NOMBRE AREA </td>
        <td align="center">FECHA</td>
        <td align="center">STATUS</td>
        <td align="center">APROBAR</td>
        <td align="center">RECHAZAR</td>
        <td align="center">APROBAR</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
		<?

  include("../models/connec.php");

$result = mysql_query("SELECT camp0, idarea, nombre, descripcion, area, fecha, usuario, status FROM areascomreserv order by camp0 DESC limit 0,15", $dbh);

	while($row = mysql_fetch_array($result))
	{
		  ?>
		  <tr>
			<td align="center"><?php echo $row["nombre"]; ?></td>
			<td align="center">&nbsp;<?php echo $row["nombre"]; ?></td>
			<td align="center">&nbsp;<?php echo $row["area"]; ?></td>
			<td align="center">&nbsp;<?php echo $row["fecha"]; ?></td>
			<td align="center">&nbsp;<?php echo $row["status"]; ?></td>
			<td align="center">aprobar</td>
			<td align="center"><a href="#">rechazar</a></td>
			<td align="center"><a href="#">aprobar</a></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		  </tr>

       	 <?php
	}
	?>
    </table>
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
