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
	  $precio=$_POST["precio"];
	  $idcat=$_POST["idcat"];
	  $fecadmin=$_POST["fecadmin"];
	  $asistencia=$_POST["asistencia"];
	  if ($produc!=""){ $produc = " - ".$produc;   }
	  $produc = $asistencia." ".$produc;
		

		$fecha2 =  date("Ymd");   //formato con cero al inicio
		$fechadia = substr($fecadmin,0,2);  //imprime drid
		$fechames = substr($fecadmin,3,2);  //imprime drid
		$fechaano = substr($fecadmin,6,4);  //imprime drid
		
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
		
		$fecha1 = $fechaano.$fechames.$fechadia;
		print $fecha1;


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1">LA ACTIVIDAD HA SIDO PUBLICADA</span><BR />
	  
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


$result = mysql_query("SELECT camp0, id1, nombre, descripcion, biografia, biografia, recomendacion, foto, estilo FROM cantantes WHERE camp0 = '$idcant' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$varnombre = mysql_result($result, 0, 2 );   //
$varfoto = mysql_result($result, 0, 7 );   //




			$strSQL = "INSERT INTO tiendacong (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."idcant, ";
			$strSQL = $strSQL ."autor, ";
			$strSQL = $strSQL ."idautor, ";
			$strSQL = $strSQL ."nombre, ";
			$strSQL = $strSQL ."descripcion, ";
			$strSQL = $strSQL ."album, ";
			$strSQL = $strSQL ."precio, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."fechan, ";
			$strSQL = $strSQL ."moneda, ";
			$strSQL = $strSQL ."precio1, ";
			$strSQL = $strSQL ."precio2, ";    //para subasta
			$strSQL = $strSQL ."idcat, "; 
			$strSQL = $strSQL ."foto, "; 
			$strSQL = $strSQL ."tipo ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$idcant."', ";
			$strSQL = $strSQL ."'" .$iduser."', ";
			$strSQL = $strSQL ."'" .$iduser1."', ";
			$strSQL = $strSQL ."'" .$produc."', ";
			$strSQL = $strSQL ."'" .$descrip."', ";
			$strSQL = $strSQL ."'" .$varnombre."', ";
			$strSQL = $strSQL ."'25.00', ";
			$strSQL = $strSQL ."'" .$fecadmin."', ";
			$strSQL = $strSQL ."'" .$fecha1."', ";
			$strSQL = $strSQL ."'" .$moneda."', ";
			$strSQL = $strSQL ."'" .$precio."', ";
			$strSQL = $strSQL ."'" .$precio."', ";
			$strSQL = $strSQL ."'" .$idcat."', ";
			$strSQL = $strSQL ."'" .$name."', ";
			$strSQL = $strSQL ."'" .$status."' )";
			$result = mysql_query($strSQL);
			//echo $strSQL;


?>
<p>&nbsp;</p>
  <p><a href="lista1con.php?estilo=Congresistas" class="Estilo2">Regresar</a></p>
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
