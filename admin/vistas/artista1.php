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
	  $i2=$_GET["i2"];
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
	  include("templates/menuartista.php");
	  ?>
	  
	  
	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Municipio   de <? echo $varnombre; ?></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="300" border="0" cellpadding="4" cellspacing="0" bordercolor="#0066FF">
        <tr>
          <td>
              <table width="400" border="0" cellpadding="0" cellspacing="2">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="Estilo7">Quejas recibidas </span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><hr /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="500" border="0">
                    <tr>
                      <?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha FROM tienda WHERE idcant = '$id' order by camp0 DESC limit 0,15", $dbh);
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
                      <td width="160"><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"> <img src="fotos/<? echo $varfoto; ?>" width="60" border="1" /></a></td>
                      <td>&nbsp; <a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
                        <?php	echo $row["nombre"]; ?>
                      </span></a> </td>
                      <td><span class="Estilo8"><?php	echo $row["fecha"]; ?>
                      </span></td>
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
                  <td>&nbsp;</td>
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
                  <td><a href="nuevoperso3.php?estilo=<? echo $varestilo; ?>&cantante=<? echo $id; ?>&i1=<? echo $id; ?>&i2=<? echo $i2; ?>">crear nuevo </a></td>
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
          <td valign="top"><table width="400" border="0" cellpadding="4" cellspacing="0">
              <tr>
                <td>RESPUESTAS</td>
              </tr>
              <tr>
                <td>
				<span class="letrablog">
				Aqui estara publicado las respuestas de este personaje, por orden de fecha.<br />
				por el momento todavia no tiene respuestas publicadas.<br />
				<a href="#">ver mas</a>				</span>				</td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle">&nbsp;</td>
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
	  	  <span class="letra1">
</span></td>
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
