<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.Estilofont1 {
font-size: 16px;
font-family: 'Oswald', 'sans-serif';
}
body {
  font-family: 'Cuprum', serif;
  font-size: 48px;
}

.Estilo5 {
	font-size: 12pt
  font-family: 'Cuprum', serif;
  font-size: 24px;
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
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td width="270"><span class="Estilo5">B&uacute;squeda de Autoridades </span></td>
      <td><a href="vercateg.php">Editar categorias </a> - 
	  <a href="vercantan.php">Ver listado de autoridades </a></td>
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
      <td><span class="Estilo5">B&uacute;squeda por Jerarquia </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
        <?
$result = mysql_query("SELECT camp0, idestilo, nombre, descripcion FROM estilos WHERE tipo = '1' AND subtipo = '0'order by orden DESC, nombre limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
		$iden1 = $row["camp0"];
		?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp; <a href="lista1.php?estilo=<?php	echo $row["nombre"]; ?>"><span class="Estilofont1"> <font size="4">
            <?php	echo $row["nombre"]; ?>
          </font> </span></a> </td>
        </tr>
        <?
$result2 = mysql_query("SELECT camp0, idestilo, nombre, descripcion FROM estilos WHERE subtipo = '$iden1' order by orden DESC, nombre limit 0,15", $dbh);
	while($row2 = mysql_fetch_array($result2))
	{
	?>
        <tr>
          <td>&nbsp;</td>
          <td><table>
              <tr>
                <td width="40" background="img/linea1.png">&nbsp;</td>
                <td>&nbsp; <a href="lista1.php?estilo=<?php echo $row2["nombre"]; ?>"><span class="Estilofont1"> <font size="4">
                  <?php	echo $row2["nombre"]; ?>
                </font> </span></a> </td>
              </tr>
          </table></td>
        </tr>
        <?php
	}
	?>
        <?php
	}
	?>
        <tr>
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
    <tr>
      <td><span class="Estilo5">B&uacute;squeda por Regiones </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
        <?
$result = mysql_query("SELECT camp0, idestilo, nombre, descripcion FROM estilos WHERE tipo = '2' order by orden DESC, nombre limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp; <a href="lista1.php?estilo=<?php	echo $row["nombre"]; ?>"><span class="Estilofont1"> <font size="4">
            <?php	echo $row["nombre"]; ?>
          </font> </span></a> </td>
        </tr>
        <?php
	}
	?>
        <tr>
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
    <tr>
      <td width="270"><span class="Estilo5">Protecci&oacute;n al consumidor </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
<?
$result = mysql_query("SELECT camp0, idestilo, nombre, descripcion FROM estilos WHERE tipo = '3' order by orden DESC, nombre limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
<a href="lista1.php?estilo=<?php	echo $row["nombre"]; ?>"><span class="Estilofont1">
              <font size="4"><?php	echo $row["nombre"]; ?></font>
            </span></a>			</td>
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
      </table></td>
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
