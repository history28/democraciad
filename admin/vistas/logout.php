<? session_start();?>

<? 

include("../models/connec.php");


$_SESSION['EmailUsuario']= "";
$_SESSION['idUsuario']= "";
$_SESSION['LoginUsuario']= "";
$_SESSION['logeado']= "";

$idus = "";
$logus = "";
$logeo = "";


//header("Location: ../index.php"); 
//exit(); 



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Top-Dialog – Publica noticias</title>
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

</head>

<body>
			<script languaje="JavaScript">
			location.href='../index.php';
			</script>


<div class="cabezera">
	<?
	include("cabecera1d.php");
	?>
</div>
<div class="cabezera1">
  <?
	include("cabecera3a.php");
	?>


  
  <div class="cuerpoc">
	
	<br><br /><A HREF="javascript:history.back()"> Volver Atrás </A>
  
  </div>



</div>





</body>
</html>
