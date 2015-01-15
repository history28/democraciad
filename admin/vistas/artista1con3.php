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
.Estilo6 {	font-size: 14pt;
	font-weight: bold;
	color: #000000;
	
}
body,td,th {
	font-size: 12pt;
	color: #333333;
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
.Estilo7 {	font-size: 14pt;
	font-weight: bold;
}
.Estilo8 {	color: #CCCCCC;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  $id=$_GET["id"];
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <table width="95%" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td>
	  <?
	  //include("templates/menuartista.php");
	  ?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="900" border="0" cellpadding="4" cellspacing="0" bordercolor="#0066FF">
        <tr>
          <td>
              <table width="600" border="0" cellpadding="0" cellspacing="2">
                <tr>
                  <td><span class="Estilo7">Actividades </span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><hr /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="600" border="0">
                    <tr>
                      <?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha, fechan, album FROM tiendacong order by fechan DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
?>
                    </tr>
                    <tr>
                      <td colspan="4">Todavia no hay quejas con esta autoridad, aqui puede publicar una queja. </td>
                    </tr>
                    <?
}
Else
{
?>
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
                      <td width="160"><?php	echo $row["fecha"]; ?>					  </td>
                      <td>&nbsp; <a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
                        <?php	echo $row["nombre"]; ?>
                      </span></a> </td>
                      <td><?php	echo $row["album"]; ?>                      </td>
                      <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" /> </a></td>
                    </tr>
                    <tr>
                      <td colspan="4"><hr /></td>
                    </tr>
                    <?php
	}
}

	?>
                  </table>                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
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
		  <img src="img/botonactiv.png" width="130" height="25" border="0" /></a>
	  	<?
		}
		else
		{
	  	?>
		  <a href="publica2con.php?idartis=<?php echo $id; ?>">
		  <img src="img/botonactiv.png" width="130" height="25" border="0" /></a>
	  	<?
		}
	  //echo $idus; 
	  ?>	  				  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="500" border="1" cellpadding="3" cellspacing="0">
                    <tr>
                      <td width="200"><a href="artista5.php?id=<?php echo $id; ?>">Ver relacion de Quejas</a></td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>Categoria</td>
                      <td><? echo $varestilo; ?></td>
                    </tr>
                  </table></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;
                      <table width="500" border="0" cellpadding="3" cellspacing="0">
                        <?
$result = mysql_query("SELECT camp0, idor, loginor, iddes, logindes, fecha, puntos FROM puntos WHERE iddes = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
                        <tr>
                          <td>&nbsp; <span class="Estilofont1">
                            <?php	echo $row["puntos"]; ?>
                          </span> </td>
                          <td>&nbsp;
                            Por:
                            <?php	echo $row["loginor"]; ?></td>
                          <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"></a></td>
                        </tr>
                        <?php
	}
	?>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                    </table></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>subpersonajes</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
            <?
			//echo "SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE estilo = '$varestilo' AND i1 = '$id'  order by  camp0 limit 0, 88";
			
	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE estilo = '$varestilo' AND i1 = '$id'  order by  camp0 limit 0, 88", $dbh);
		while($row = mysql_fetch_array($result))
		{
		  ?>
            <a href="artista1.php?id=<?php echo $row["camp0"]; ?>"><?php echo $row["nombre"]; ?></a>
			<br />
            <?php
		}
		?>				  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><a href="compra.php"></a></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><a href="nuevoperso3.php?estilo=<? echo $varestilo; ?>&cantante=<? echo $id; ?>">crear nuevo </a></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><a href="publica.php?idartis=<?php echo $id; ?>"></a></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          <td background="img/vertical.png">&nbsp;</td>
          <td valign="top"><table width="250" border="0" cellpadding="4" cellspacing="0">
              <tr>
                <td>&nbsp;
				
      <form id="form1" name="karta" method="get" action="artista1con4.php" enctype="multipart/form-data">
				
                  <input type="hidden" name="fecadmin" id="f_date2" class="box-form" value="<? echo $fecha1; ?>"/>
				      <button id="f_btn2">
					  Ver calendario
					  <img src="img/calendario-icono.png" width="48" height="48" />...</button>
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
		            <input type="submit" name="Submit" value="Enviar" />

					<input name="id" type="hidden" value="<?php echo $id; ?>" />
      </form>				</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
  	    <span class="letra1"></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
