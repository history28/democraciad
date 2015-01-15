<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />

    <script src="src/js/jscal2.js"></script>
    <script src="src/js/lang/es.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="src/css/border-radius.css" />

<SCRIPT languaje="javascript">
<!--
window.status = "mensaje de javascript";
function valida1()
{
document.karta.submit();
}
//-->
</SCRIPT>

<style type="text/css">
<!--
.Estilo1 {
	color: #0099CC;
	font-weight: bold;
	font-size: 14pt;
}
.Estilo5 {font-size: 12pt}
body,td,th {
	font-size: 10pt;
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
.Estilo2 {font-size: 14px}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  $letra=$_GET["letra"];
	  $deca=$_GET["deca"];
	  $estilo=$_GET["estilo"];
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td valign="top">
	  
	  
	  <table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999">
        <tr bgcolor="#999999">
          <td>Nombre </td>
          <td>Region</td>
          <td>Partido</td>
          <td>grupo parlamentario </td>
          <td>actividad</td>
        </tr>
        <?
	$cuenta = 0;
	$result = mysql_query("SELECT camp0, nombre, region, partido, i1, i2, i3, i4 FROM cantantes WHERE estilo = 'Congresistas' AND i1 = '0'  order by region, partido, nombre limit 0, 88", $dbh);
	while ($row = mysql_fetch_row($result)){
		$cuenta = $cuenta + 1;
		if 	($cuenta==2)
		{
			$cuenta = 0;
			$colortr = "#FFFFFF";
		}
		else
		{
			$colortr = "#EBEBEB";
		}
 		?>
        <tr>
          <td align="left"><span class="Estilo2"> 
		  <a href="artista1.php?id=<?php echo $row[0]; ?>">
		  <? echo $row[9]; ?> &nbsp; <? echo $row[1]; ?></a>&nbsp;
                <?  //examenes
					$var1 = $row[0];
					$varex = $row[0];
					?>
          </span>		  </td>
          <td align="left"><a href="#"><? echo $row[2]; ?></a></td>
          <td align="left"><a href="#"><? echo $row[3]; ?></a></td>
          <td align="left">&nbsp;</td>
          <td align="left"><a href="artista1con.php?id=<?php echo $row[0]; ?>">ver</a></td>
        </tr>
          <?
			}
			?>
      </table>	  </td>
      <td valign="top"><table width="300" border="0" cellpadding="0">
        <tr>
          <td align="center">
		  
      <form id="karta1" name="karta" method="get" action="artista1con4.php" enctype="multipart/form-data">
				
                  <input type="hidden" name="fecadmin" id="f_date2" class="box-form" value="<? echo $fecha1; ?>"/>
				      <button id="f_btn2">
					  Ver calendario
					  <img src="../../vistas/img/calendario-icono.png" width="48" height="48" />...</button>
				      <br />
						<script type="text/javascript">//<![CDATA[
						  Calendar.setup({
							inputField : "f_date2",
							trigger    : "f_btn2",
							onSelect   : function() { valida1() },
							//onSelect   : function() { this.hide() },
							//valida1();
							//showTime   : 12,
							dateFormat : "%d-%m-%Y"
						  });
						//]]></script>		  
		            <input type="submit" name="Submit" value="Buscar" />
      </form>		   </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="artista1con3.php">Ver actividades </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="nuevoperso.php?estilo=Congresistas">agregar nuevo congresista </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="lista1con.php?estilo=Congresistas"></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="http://gerardcruzg.wordpress.com/2011/05/09/lista-130-congresistas-electos-2011-2016/" target="_blank">enlace</a></td>
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
