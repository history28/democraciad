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
  <div id="subcontent1">
	VER INFO	</div>

    <div id="subcontent"></p>
    <table width="600" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <td>&nbsp;
		<?

  include("../models/connec.php");


$result = mysql_query("SELECT camp0, id1, id2, titulo, descripcion, rubro, autor FROM miforo1 order by camp0 DESC limit 0,15", $dbh);

$filas = mysql_num_rows($result);

if ($filas=="")

{
}
Else
{
}

	while($row = mysql_fetch_array($result))

	{
		
		?>
				  <?php	echo "Fecha : ".$row[3]; ?>&nbsp;				  		

          <?php


	}

?>

		</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="#"><span class="Estilo2">Informacion xxxsssssss nnnnn </span></a></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>En esta secci&oacute;n de prueba podr&iacute;amos subir los archivos relevantes al condominio</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="#"><span class="Estilo2">Informacion 2</span></a> </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>una breve descripcion </td>
        <td>&nbsp;</td>
      </tr>
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
