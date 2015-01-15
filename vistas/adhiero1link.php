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
.Estilo1 {
	color: #0099CC;
	font-weight: bold;
	font-size: 14pt;
}
.Estilo2 {font-size: 14pt}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $id2=$_POST["id2"];
	  $link=$_POST["link"];

		$fecha2 =  date("Y-m-d");   //formato con cero al inicio




	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>


      <span class="Estilo1">LA ADHESION HA SIDO RECIBIDA </span><BR />
		<?
		//echo $strSQL;
		echo "<br>";
		$apoyo = $apoyo+1;
		$strSQL = "UPDATE adhesiones SET ";
		$strSQL = $strSQL ."link='" .$link."' ";
		//$strSQL = $strSQL .", nro_ing='" .$nroing1."' ";
		$strSQL = $strSQL ." WHERE camp0='"  .$id2."' ";
		$query2=MySQL_query($strSQL);
		echo $strSQL;
	
		?>


<p>&nbsp;</p>
  <p><a href="inicio.php?id=<? echo $idcant; ?>" class="Estilo2">Regresar</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </div>
</div>
</div>

</body>
</html>
