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
	  $id=$_GET["id"];

$result = mysql_query("SELECT camp0, nombre, email, pais, prov FROM usuarios WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
$result4 = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Perfil de <? echo $result2; ?> </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Perfil de usuario anonimo :</strong></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="95%" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td width="250">Nick : </td>
          <td>
            <?php	echo $result1; ?>          </td>
        </tr>
        <tr>
          <td>Pais:</td>
          <td>
            <?php	echo $result3; ?>          </td>
        </tr>
        <tr>
          <td>Provincia:</td>
          <td><?php	echo $result4; ?></td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Perfil</strong> de usuario real : </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="95%" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td width="400">Nombre Real : (nombre y apellidos) : </td>
          <td>-</td>
        </tr>
        <tr>
          <td>D.N.I. : </td>
          <td>-</td>
        </tr>
        <tr>
          <td>Perfil en facebook : </td>
          <td>-</td>
        </tr>
        <tr>
          <td>Verfificado (si/no) : </td>
          <td>-</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
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
    <tr>
      <td><a href="quejaslog.php">Ver sus quejas publicadas</a></td>
      </tr>
  </table>
</div>
</div>

</body>
</html>
