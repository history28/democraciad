<? session_start();?>

<? 

include("../models/connec.php");


$_SESSION['EmailUsuario']= "";
$_SESSION['idUsuario']= "";
$_SESSION['LoginUsuario']= "";

$idus = "";
$logus = "";


//header("Location: index.php"); 
//exit(); 



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
			<script languaje="JavaScript">
					//location.href='http://www.linksss.com/agendaweb/';
					//location.href='http://www.netlima.com/start/cabiredf.html';
					//location.href='http://www.netlima.com/directorio/index2a.php';
					location.href='index.php';
			</script>



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
