<? session_start();?>
<? 
$email=$_POST["login"];
$pass=$_POST["pass"];
$id=$_POST["idartis"];

include("../models/connec.php");


$_SESSION['EmailUsuario']= $email;
$_SESSION['idUsuario']= $result1;
$_SESSION['LoginUsuario']= $result2;
header("Location: publica.php?idartis="."$id"); 
exit(); 


if ($email=="")
{
	$varmensaje = "<br>Debe escribir su email";
    //exit(); 
}
else
{
	$varmensaje = "EL PASSWORD NO ES VALIDO";
	$result = mysql_query("SELECT camp0, login, nombre, email, busco, visitas, tipo FROM mificha  WHERE email= '$email' AND pass = '$pass'", $dbh);
	$filas = mysql_num_rows($result);
	if ($filas!="")
	{
		$result1 = mysql_result($result, 0, 0 );  //obtiene camp0
		$result2 = mysql_result($result, 0, 1 );  //obtiene login
		$result3 = mysql_result($result, 0, 4 );  //obtiene "busco" D=buscapareja
		$result4 = mysql_result($result, 0, 5 );  //visitas, cuantas veces entra al sistema
		$result5 = mysql_result($result, 0, 6 );  //
	
	
	
		$_SESSION['EmailUsuario']= $email;
		$_SESSION['idUsuario']= $result1;
		$_SESSION['LoginUsuario']= $result2;
		$_SESSION['ptosusu']= 2;    //puntos qe puede dar a los usuarios
		$_SESSION['ptospost']= 2;

		   header("Location: inicio.php"); 
		   exit(); 
	}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Netlima – Publica noticias de lima y sus calles, noticias al dia</title>
<META content="Publica noticias, entre titulares, lima calles, noticias sobre, la día, e noticias." name=Keywords>
<META content=" Publica noticias de lima y sus calles, noticias al dia, guia de calles, noticias sobre lima, Lima al dia." name=Description>

<link href="css/cuadrado.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="contentslider.css" />

<script type="text/javascript" src="contentslider.js">
</script>
<style type="text/css">
<!--
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body {
	background-color: #FFFFFF;
}
.Estilo12det1 {font-size: 12;
	font-color: #666666;
}
body,td,th {
	color: #666666;
}
-->
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18224089-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div class="contenedor">
<div class="cabezera">
	<?
	include("cabecera1d.php");
	?>
</div>
<div class="cabezera1">
  <?
	include("cabecera3a.php");
	?>

<div class="cuerpoi"></div>


  
  <div class="cuerpoc">
  
  	<br /><br />
	<span class="Estilo1">
	<font size="3" ><? echo $varmensaje; ?></font>
	</span>
	
	<br><br /><A HREF="javascript:history.back()"> Volver Atrás </A>
	

  
  </div>


<div class="cuerpod"></div>

</div>





</body>
</html>
