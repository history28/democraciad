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

$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado, repre FROM usuarios WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
$result4 = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
$result5 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   

$result6 = mysql_result($result, 0, 6 );   //0 es el row, 1 es el campo   
$result7 = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   
$result8 = mysql_result($result, 0, 8 );   //0 es el row, 1 es el campo   
$result9 = mysql_result($result, 0, 9 );   //0 es el row, 1 es el campo   
$result10 = mysql_result($result, 0, 10 );   //repre


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Como usar  </span>
        <form id="form1" name="form1" method="post" action="usergraba.php">
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td><strong>Como instalar :</strong>        </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Crear una base de datos, crear las tablas simplemente copiando el contenido del archivo bd.sql</td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>Cambiar los valores del archivo models/connec.php (es el archivo de conexion con la BD). </td>
        </tr>
        <tr>
          <td valign="top">3.</td>
          <td>Copiar en el hosting todos los archivos de contenido.zip </td>
        </tr>

        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td align="center"><label></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Como administrar : </strong></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">

        <tr>
          <td valign="top">&nbsp;</td>
          <td>La clave predeterminada para ingresar a administrar es &quot;1234&quot; , para cambiar esta clave debe abrir el archivo admin/index.php </td>
        </tr>
        <tr>
          <td width="30" valign="top">&nbsp;</td>
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
      <td><strong>Download : </strong></td>
    </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">


        <tr>
          <td width="30" valign="top">&nbsp;</td>
          <td><a href="../top-dialog15.rar" target="_blank"><img src="img/download-button-fertig1.jpg" width="400" border="0" /></a></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td align="center"><a href="ayudatec.php"></a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
  </table>

        </form>

</div>
</div>

</body>
</html>
