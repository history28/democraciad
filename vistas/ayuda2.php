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
  <p align="center">
    <span class="Titulo1">Acerca de  </span>
        <form id="form1" name="form1" method="post" action="usergraba.php">
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#EBEBEB">
    <tr>
      <td><strong>Concepto :</strong>        </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Esto es un medio de presion de la sociedad civil hacia sus autoridades. </td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>Las autoridades deben dialogar con los ciudadanos, no pueden ser mudos </td>
        </tr>
        <tr>
          <td valign="top">3.</td>
          <td>Las autoridades no estan por encima de los ciudadanos sino al contrario, las autoridades son una especie de empleados de los ciudadanos y como tal debemos tener medios de vigilancia.</td>
        </tr>
        <tr>
          <td valign="top">4.</td>
          <td>La prensa no es un medio valido de vigilancia porque hay diversos grupos cada uno con intereses economicos o intereses politicos.</td>
        </tr>
        <tr>
          <td valign="top">5.</td>
          <td>Los medios de prensa escritos o radiales ya  son medios antiguos y no representan la  participacion ciudadana. </td>
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
      <td><strong>Modos de uso :</strong>        </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>


    <tr>
      <td align="left"><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Es adaptable a cualquier pais. </td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>Tan solo se cambia el nombre de dominio.</td>
        </tr>

        <tr>
          <td valign="top">3.</td>
          <td>El modo online puede tener un soporte off-line, es decir pueden haber hojas con firmas, o lugares de debates. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center"><label></label></td>
    </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><a href="ayuda.php">Ayuda Como usar </a></td>
      </tr>
    <tr>
      <td><a href="organigrama.php">Organigramas</a></td>
    </tr>
    <tr>
      <td><a href="suge.php">envianos una sugerencia </a></td>
      </tr>
    <tr>
      <td align="left"><a href="ayudatec.php">Ayuda como instalar y administrar </a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="fotos/n_real_madrid_fondos-5683014.jpg" width="400" height="300" /></td>
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
