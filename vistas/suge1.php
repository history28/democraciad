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
	  $nombre=$_POST["nombre"];
	  $descrip=$_POST["descrip"];


		$fecha2 =  date("Y-m-d");   //formato con cero al inicio
		$fechadia = substr($fecha2,6,2);  //imprime drid
		$fechames = substr($fecha2,4,2);  //imprime drid
		$fechaano = substr($fecha2,0,4);  //imprime drid
		
		
		$fecha1 = $fechadia . " ". $fechames1 ." ". $fechaano;
		//print $fecha1;

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
<BR />
	  
<?
		if ($idus=="")
		{
	  	?>
		PARA ENVIAR UNA SUGERENCIA DEBES INGRESAR CON TU LOGIN
	  	<?
		}
		else
		{

			$strSQL = "INSERT INTO contacto (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."descripcion ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$fecha2."', ";
			$strSQL = $strSQL ."'" .$descrip."' )";
			$result = mysql_query($strSQL);
			//echo $strSQL;
		}


?>
      <span class="Estilo1">LOS DATOS HAN SIDO RECIBIDOS</span><BR />

<p>&nbsp;</p>
  <p><a href="nuevoperso.php?estilo=Municipalidades" class="Estilo2">Regresar</a></p>
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
