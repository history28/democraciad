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
	color: #999999;
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
	  $prod=$_GET["prod"];
	  include("templates/header.php");
  	  include("../models/connec.php");



$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, autor, idautor, moneda, precio1, fecha, foto, apoyos, respuesta, resplink FROM tienda WHERE camp0 = '$prod' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
$result5 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   
$result6 = mysql_result($result, 0, 6 );   //0 es el row, 1 es el idautor   
$varmoneda = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   
$varprecio = mysql_result($result, 0, 8 );   //0 es el row, 1 es el campo   
$varfecha = mysql_result($result, 0, 9 );   //0 es el row, 1 es el campo   
$varfoto = mysql_result($result, 0, 10 );   //foto
$varapoyo = mysql_result($result, 0, 11 );   //foto
$varresp = mysql_result($result, 0, 12 );   //foto
$varlink = mysql_result($result, 0, 13 );   //foto

if ($varfoto=="")
{
	$varfoto = "Sin_imagen.png";
}

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
      <td><span class="Estilo6">Acerca   de <? echo $varnombre; ?></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="300" border="0" cellpadding="4" cellspacing="0" bordercolor="#0066FF">
        <tr>
          <td>&nbsp;
              <table width="400" border="0" cellpadding="0" cellspacing="2">
                <tr>
                  <td>QUEJA: <span class="letra1"><?php echo $result2; ?></span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="letra1"><?php echo $result3; ?></span></td>
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
                  <td><table width="500" border="0" cellpadding="3" cellspacing="0">
                      <?
$result = mysql_query("SELECT camp0, idor, loginor, idprod, producto, fecha FROM operaciones WHERE iddes = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
                      <tr>
                        <td>&nbsp; <a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
                          <?php	echo $row["producto"]; ?>
                        </span></a> </td>
                        <td>&nbsp;
                            <?php	echo $row["fecha"]; ?></td>
                        <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" /> </a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><hr /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Ver mas quejas </td>
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
                  <td><span class="Estilo7">Calificaciones recibidas </span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><hr /></td>
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
                  <td><a href="compra.php"></a></td>
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
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          <td background="img/vertical.png">&nbsp;</td>
          <td valign="top"><table width="400" border="0" cellpadding="4" cellspacing="0">
              <tr>
                <td>RESPUESTA A ESTA QUEJA </td>
              </tr>
              <tr>
                <td>
				  <p class="letra1">
				    <?php echo $varresp; ?></p>
				  <p class="letra1">Por el momento no hay ninguna respuesta a esta queja, cuando haya respuestas aparecera aqui el texto de la respuesta, mas abajo aparecera un link si es que la respuesta fue publicada en otra web o en un twitter. <br />
				      <a href="#">ver mas</a>								</p></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle">LINK</td>
              </tr>
              <tr>
                <td><span class="letra1"><a href="<?php echo $varlink; ?>" target="_blank"><?php echo $varlink; ?></a></span></td>
              </tr>
              <tr>
                <td>En este sector aparecera si hay mas de una respuesta, en este momento no hay ninguna<br /> <a href="#">ver mas </a></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td>Aqui aparecera si hay una tercera respuesta<br /> <a href="#">ver mas </a></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><a href="#">Ver mas </a></td>
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
