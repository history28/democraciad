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

	  $idprod=$_POST["id2"];
	  $descrip=$_POST["descrip"];
	  //$idprod=$_POST["idprod"];
		$fecha2 =  date("Y-m-d");   //formato con cero al inicio









				$strSQL = "INSERT INTO adhesiones (";
				$strSQL = $strSQL ."camp0, ";
				$strSQL = $strSQL ."idprod, ";
				$strSQL = $strSQL ."idautordes, ";
				$strSQL = $strSQL ."nomautordes, ";
				$strSQL = $strSQL ."idautorori, ";
				$strSQL = $strSQL ."nomautorori, ";
				$strSQL = $strSQL ."preg, ";
				$strSQL = $strSQL ."fecha , ";
				$strSQL = $strSQL ."estado ";
				$strSQL = $strSQL .") VALUES (";
				$strSQL = $strSQL ."'', ";
				$strSQL = $strSQL ."'" .$idprod."', ";
				$strSQL = $strSQL ."'" .$tipo."', ";   //idautordes
				$strSQL = $strSQL ."'" .$tipo."', ";    //nomautordes
				$strSQL = $strSQL ."'" .$idus."', ";
				$strSQL = $strSQL ."'" .$logus."', ";
				$strSQL = $strSQL ."'" .$pregunta."', ";
				$strSQL = $strSQL ."'" .$fecha2."', ";
				$strSQL = $strSQL ."'" .$status."' )";
				$result = mysql_query($strSQL);



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
echo $strSQL;

echo "<br>";
echo "sss";
echo "SELECT camp0, idcant, apoyos FROM tienda WHERE camp0 = '$idprod' limit 0,15";
$result = mysql_query("SELECT camp0, idcant, apoyos FROM tienda WHERE camp0 = '$idprod' limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$apoyo = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$apoyo = $apoyo+1;
	$strSQL = "UPDATE tienda SET ";
	$strSQL = $strSQL ."apoyos='" .$apoyo."' ";
	//$strSQL = $strSQL .", nro_ing='" .$nroing1."' ";
	$strSQL = $strSQL ." WHERE camp0='"  .$idprod."' ";
	$query2=MySQL_query($strSQL);
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
