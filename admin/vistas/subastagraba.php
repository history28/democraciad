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
	  $idprod=$_POST["idprod"];
	  $iduser=$_POST["iduser"];
	  $iduser1=$_POST["iduser1"];
	  $produc=$_POST["produc"];
	  $descrip=$_POST["descrip"];
	  $precio2=$_POST["precio2"];

	$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, stock FROM tienda WHERE camp0 = '$idprod' order by camp0 DESC limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	$result0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
	$nomprod = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
	$idvendedor = mysql_result($result, 0, 6 );   //0 es el row, 1 es el campo   
	$nomvendedor = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   
	$stock = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   

	$stock = $stock-1;
	$strSQL = "UPDATE tienda SET ";
	//$strSQL = $strSQL ."stock='" .$stock."' ";
	$strSQL = $strSQL ."precio2='" .$precio2."' ";
	$strSQL = $strSQL ." WHERE camp0='"  .$idprod."' ";
	$query2=MySQL_query($strSQL);
	echo $strSQL;
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1">EL PRODUCTO HA SIDO PUBLICADO</span><BR />
	  
<?
			$stipo = "SUBASTA";
			$strSQL = "INSERT INTO operaciones (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."idor, ";
			$strSQL = $strSQL ."iddes, ";
			$strSQL = $strSQL ."loginor, ";
			$strSQL = $strSQL ."logindes, ";
			$strSQL = $strSQL ."idprod, ";
			//$strSQL = $strSQL ."foto, ";
			$strSQL = $strSQL ."producto, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."tipo ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$idus."', ";
			$strSQL = $strSQL ."'" .$idvendedor."', ";
			$strSQL = $strSQL ."'" .$logus."', ";
			$strSQL = $strSQL ."'" .$nomvendedor."', ";
			$strSQL = $strSQL ."'" .$idprod."', ";
			//$strSQL = $strSQL ."'" .$produc."', ";
			$strSQL = $strSQL ."'" .$nomprod."', ";
			$strSQL = $strSQL ."'" .$fecha1."', ";
			$strSQL = $strSQL ."'" .$stipo."' )";
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
