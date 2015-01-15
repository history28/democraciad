<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="vistas/css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo6 {	font-size: 14pt;
	font-weight: bold;
	color: #333333;
}
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
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
		    <td height="80" class="letracabez1"><img src="vistas/img/logorock.png" width="250" /> </td>
      <td height="45" class="letracabez2">Version. 1.4 

	  </td>
            <td>
<form id="form1" name="form1" method="get" action="http://www.google.com/ang/busca2b.php" target="_blank">
          <font color="#999999">
		  </font>
          <table width="100" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td class="letra_roja">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input id="texbox1" name="q" type="text" class="texbox2"/></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
          </table>
      </form>			
	  
	  </td>
          </tr>
  </table>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><span class="Estilo6">Iniciar sesion </span></td>
      </tr>
    <tr>
      <td>
	  <span class="letra1">	  </span>	  </td>
      </tr>
    <tr>
      <td>
	  
	<form name="form1" method="post" action="index.php">
	  <table width="500" border="0" align="center">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><strong>LOGIN :</strong> </td>
          <td>&nbsp;<input name="login" type="TEXT" value="ADMIN"></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><strong>PASSWORD :</strong> </td>
          <td>&nbsp;<input name="pass1" type="password" value="1234"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;<input type="submit" name="Submit" value="Ingresar"></td>
        </tr>
      </table>
	  </form>



<?
$pass1=$_POST["pass1"];
$logeo=$_SESSION['logeado'];
if ($logeo != "si") {
	if ($pass1 != "1234") {
	   //print "----";
	   exit(); 
	} 
	else {
		$_SESSION['logeado']="si";
	} 
} 


	$_SESSION['idUsuario']= "0";
	$_SESSION['LoginUsuario']= "ADMIN";


?>
<script languaje="JavaScript">
location.href='vistas/inicio.php';
</script>

	  
	  </td>
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
