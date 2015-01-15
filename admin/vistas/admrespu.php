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
	  $logeo=$_SESSION['logeado'];
	  if ($logeo != "si") {
		   print "----";
		   //print "NO ESTAS LOGEADO";
		   exit(); 
	  } 
	  ?>
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $id=$_GET["id"];

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>RECLAMOS Y RESPUESTAS </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="1" cellpadding="3" cellspacing="0">
		<tr>
		  <td bgcolor="#333333">&nbsp;id reclamo</td>
		  <td bgcolor="#333333">&nbsp;id distrito</td>
		  <td bgcolor="#333333">&nbsp;id autor</td>
		  <td bgcolor="#333333">autor</td>
		  <td bgcolor="#333333">reclamo</td>
		  <td bgcolor="#333333">fecha</td>
		  <td bgcolor="#333333">apoyos</td>
		  <td bgcolor="#333333">respuesta</td>
		  <td bgcolor="#333333">link respuesta</td>
		  <td bgcolor="#333333">lugar ref</td>
		  <td bgcolor="#333333">editar respuesta</td>
		</tr>
<?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, fecha, foto, apoyos, respuesta, resplink, lugarref FROM tienda order by camp0 DESC limit 0,80", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td><?php	echo $row["camp0"]; ?></td>
            <td>
				<span class="Estilofont1">
              <?php	echo $row["idcant"]; ?>
            </span>			</td>
            <td><?php	echo $row["idautor"]; ?></td>
            <td><?php	echo $row["autor"]; ?></td>
            <td><?php	echo $row["nombre"]; ?></td>
            <td><?php	echo $row["fecha"]; ?></td>
            <td><?php	echo $row["apoyos"]; ?></td>
            <td><?php	echo $row["respuesta"]; ?></td>
            <td>
			<a href="<?php	echo $row["resplink"]; ?>" target="_blank">
			<?php	
			$aa = $row["resplink"]; 
			$bb = substr($aa,7,20);
			echo $bb; 
			?>
			</a>			
			</td>
            <td><?php	echo $row["lugarref"]; ?></td>
            <td><a href="#">Editar respuesta</a></td>
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
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="compra.php"></a></td>
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
