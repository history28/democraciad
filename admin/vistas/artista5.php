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
.Estilo6 {	font-size: 14pt;
	font-weight: bold;
	color: #CCCCCC;
}
body,td,th {
	font-size: 12pt;
	color: #CCCCCC;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo7 {
	color: #CCCCCC;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#000000">
    <tr>
      <td><?
	  $id=$_GET["id"];

	  include("templates/menuartista.php");
	  ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Quejas</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <span class="letra1">
	  </span>
	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  
	  
	  <table width="700" border="0"><tr>
<?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha FROM tienda WHERE idcant = '$id' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
?>
	  <tr>
		<td colspan="4">Todavia no hay publicaciones en la Tienda, aqui puedes comprar o vender, se el primero en publicar.
		</td>
	  </tr>
<?
}
Else
{
?>
	  <td colspan="4"><hr /></td>
	  </tr>
<?
	while($row = mysql_fetch_array($result))
	{
		$varfoto = $row["foto"];
		if ($varfoto=="")
		{
			$varfoto = "Sin_imagen.png";
		}
		?>
          <tr>
            <td width="160"><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>">
			<img src="fotos/<? echo $varfoto; ?>" width="100" border="1" /></a></td>
            <td>&nbsp;
				<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
              <?php	echo $row["nombre"]; ?>
            </span></a>			</td>
            <td><span class="Estilo7"><?php	echo $row["fecha"]; ?>
                
            </span></td>
            <td>
			<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" />			</a></td>
          </tr>
		  <tr>
		    <td colspan="4"><hr /></td>
		  </tr>
    <?php
	}
}

	?>
        </table>
          <br /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  	<?
		if ($idus=="")
		{
	  	?>
		  <a href="entra.php?idartis=<?php echo $id; ?>">
		  <img src="img/boton1.png" width="130" height="25" border="0" /></a>
	  	<?
		}
		else
		{
	  	?>
		  <a href="publica2.php?idartis=<?php echo $id; ?>">
		  <img src="img/boton1.png" width="130" height="25" border="0" /></a>
	  	<?
		}
	  //echo $idus; 
	  ?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <?
	  	  $fecha2 =  date("D-j-n-Y");
		  //echo $fecha2;

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

		?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="artista5a.php?id=<?php echo $id; ?>"></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
