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
      <td><a href="veruserreal.php">Ver usuarios reales </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>LISTA DE USUARIOS </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="900" border="1" cellpadding="3" cellspacing="0">
		<tr>
		  <td bgcolor="#333333">&nbsp;<span class="cabeztabla">EMAIL</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">NICK</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">PAIS</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">CIUDAD</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">FECHA</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">PASE</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">deshabilitiar</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">habilitiar</span></td>
		  <td bgcolor="#333333"><span class="cabeztabla">ver perfil</span></td>
		</tr>
<?
$result = mysql_query("SELECT camp0, nombre, email, login, pass, pais, prov, fecha, id1, retorno, advertencias FROM usuarios order by camp0 DESC limit 0,80", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td>
				<span class="Estilofont1">
              <?php	echo $row["email"]; ?>
            </span>			</td>
            <td><?php	echo $row["nombre"]; ?></td>
            <td><?php	echo $row["pais"]; ?></td>
            <td><?php	echo $row["prov"]; ?></td>
            <td><?php	echo $row["fecha"]; ?></td>
            <td><?php	echo $row["id1"]; ?></td>
            <td><a href="userquitar.php?id=<?php echo $row["camp0"]; ?>&pase=1">deshabilitar</a></td>
            <td><a href="userquitar.php?id=<?php echo $row["camp0"]; ?>&pase=0">habilitar</a></td>
            <td><a href="verperfil.php?id=<?php echo $row["camp0"]; ?>&pase=0" target="_blank">PERFIL</a></td>
          </tr>
    <?php
	}
	?>

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
      <td><a href="veruserav.php">Ver avanzado </a></td>
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
