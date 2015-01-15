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
	  $idcant=$_POST["idcant"];
	  $iduser=$_POST["iduser"];
	  $iduser1=$_POST["iduser1"];
	  $produc=$_POST["produc"];
	  $descrip=$_POST["descrip"];
	  $moneda=$_POST["moneda"];
	  $estilo=$_POST["estilo"];
	  $idcat=$_POST["idcat"];
	  $nombre=$_POST["nombre"];
	  $i1=$_POST["i1"];
	  $i2=$_POST["i2"];


		$fecha2 =  date("Ymd");   //formato con cero al inicio
		$fechadia = substr($fecha2,6,2);  //imprime drid
		$fechames = substr($fecha2,4,2);  //imprime drid
		$fechaano = substr($fecha2,0,4);  //imprime drid
		
		if ($fechames=="01"){ $fechames1 = "Ene";   }
		if ($fechames=="02"){ $fechames1 = "Feb";   }
		if ($fechames=="03"){ $fechames1 = "Mar";   }
		if ($fechames=="04"){ $fechames1 = "Abr";   }
		if ($fechames=="05"){ $fechames1 = "May";   }
		if ($fechames=="06"){ $fechames1 = "Jun";   }
		if ($fechames=="07"){ $fechames1 = "Jul";   }
		if ($fechames=="08"){ $fechames1 = "Ago";   }
		if ($fechames=="09"){ $fechames1 = "Set";   }
		if ($fechames=="10"){ $fechames1 = "Oct";   }
		if ($fechames=="11"){ $fechames1 = "Nov";   }
		if ($fechames=="12"){ $fechames1 = "Dic";   }
		
		$fecha1 = $fechadia . " ". $fechames1 ." ". $fechaano;
		//print $fecha1;


$result = mysql_query("SELECT camp0, id1, autor, nombre, descripcion, biografia, estilo, decada, foto FROM cantantes order by camp0 DESC limit 0,115", $dbh);
$filas = mysql_num_rows($result);
$varautor = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
			 if($varautor == $logus) {
			 	echo "NO PUEDES CREAR MAS, PORQUE SOLO SE PERMITE UNO";        
			 }


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
$cont=0;
foreach ($_FILES["pictures"]["error"] as $key => $error) {
   $cont = $cont + 1;
   if ($error == UPLOAD_ERR_OK) {
       $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
       $name = $_FILES["pictures"]["name"][$key];
		$extensiones=array("jpg","JPG","jpeg","gif","GIF","png","PNG","bmp","ico");
		$var = explode(".","$name");
		$num = count($extensiones);
		$valor = $num-1;
		$admitido=false;
		for($i=0; $i<=$valor; $i++) {
			 if($extensiones[$i] == $var[1]) {        
				  $admitido=true;//es una extension valida
				  $var2 = $var[1];
				  // // // $name = $idaviso.".".$var2;
				  break;
			 }
		}
		if (!$admitido){
			//no graba el archivo
			print "no admitido";
			exit();
		}

   		print "33";
       move_uploaded_file($tmp_name, "./fotos/$name");
		if ($cont == 1) {
	       $name1 = $name;
		}
		if ($cont == 2) {
	       $name2 = $name;
		}
   }
}

print "imagen: " . $imagen;
print "name: " . $name;
$imagen = $_GET[imagen]; 






			$strSQL = "INSERT INTO cantantes (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."id1, ";
			$strSQL = $strSQL ."autor, ";
			$strSQL = $strSQL ."nombre, ";
			$strSQL = $strSQL ."descripcion, ";
			//$strSQL = $strSQL ."foto, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."foto, "; 
			$strSQL = $strSQL ."estilo, "; 
			$strSQL = $strSQL ."i1, "; 
			$strSQL = $strSQL ."i2, "; 
			$strSQL = $strSQL ."biografia ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$idcant."', ";
			$strSQL = $strSQL ."'" .$iduser."', ";
			$strSQL = $strSQL ."'" .$nombre."', ";
			$strSQL = $strSQL ."'" .$descrip."', ";
			//$strSQL = $strSQL ."'" .$produc."', ";
			$strSQL = $strSQL ."'" .$fecha1."', ";
			$strSQL = $strSQL ."'" .$name."', ";
			$strSQL = $strSQL ."'" .$estilo."', ";
			$strSQL = $strSQL ."'" .$i1."', ";
			$strSQL = $strSQL ."'" .$i2."', ";
			$strSQL = $strSQL ."'" .$status."' )";
			$result = mysql_query($strSQL);
			echo $strSQL;


?>
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
