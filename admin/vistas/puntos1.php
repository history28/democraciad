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
	  $puntaje=$_POST["puntaje"];
	  $iduser=$_POST["iduser1"];
	  $produc=$_POST["produc"];
	  $descrip=$_POST["descrip"];
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1">LA CALIFICACION HA SIDO RECIBIDA </span><BR />
	  
<?
			$strSQL = "INSERT INTO puntos (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."idor, ";
			$strSQL = $strSQL ."iddes, ";
			$strSQL = $strSQL ."loginor, ";
			$strSQL = $strSQL ."logindes, ";
			$strSQL = $strSQL ."puntos, ";
			$strSQL = $strSQL ."tipo ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$idus."', ";
			$strSQL = $strSQL ."'" .$iduser."', ";
			$strSQL = $strSQL ."'" .$logus."', ";
			$strSQL = $strSQL ."'" .$produc."', ";
			$strSQL = $strSQL ."'" .$puntaje."', ";
			$strSQL = $strSQL ."'" .$status."' )";
			$result = mysql_query($strSQL);
			echo $strSQL;


?>
<p>&nbsp;</p>
  <p><a href="artista5.php?id=<? echo $idcant; ?>" class="Estilo2">Regresar</a></p>
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
