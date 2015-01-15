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
	  $email=$_POST["email"];
	  $nick=$_POST["nick"];
	  $passw=$_POST["passw"];
	  $pais=$_POST["pais"];
	  $ciudad=$_POST["ciudad"];
	  $nomreal=$_POST["nomreal"];
	  $dni=$_POST["dni"];
	  $face=$_POST["face"];


	$strSQL = "UPDATE usuarios SET ";
	$strSQL = $strSQL ."pass='" .$passw."' ";
	$strSQL = $strSQL .", pais='" .$pais."' ";
	$strSQL = $strSQL .", prov='" .$ciudad."' ";
	$strSQL = $strSQL .", nombrereal='" .$nomreal."' ";
	$strSQL = $strSQL .", dni='" .$dni."' ";
	$strSQL = $strSQL .", face='" .$face."' ";
	$strSQL = $strSQL ." WHERE email='"  .$email."' ";
	$query2=MySQL_query($strSQL);




	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Los datos han sido grabados </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
      <td><hr /></td>
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
      <td align="center"><label></label></td>
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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
  </table>


</div>
</div>

</body>
</html>
