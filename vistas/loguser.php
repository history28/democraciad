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
.Estilo6 {font-size: 14pt;
	font-weight: bold;
	color: #000000;
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
	  $id=$_GET["id"];

$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado, repre, edad FROM usuarios WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
$result4 = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
$result5 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   

$result6 = mysql_result($result, 0, 6 );   //0 es el row, 1 es el campo   
$result7 = mysql_result($result, 0, 7 );   //0 es el row, 1 es el campo   
$result8 = mysql_result($result, 0, 8 );   //0 es el row, 1 es el campo   
$result9 = mysql_result($result, 0, 9 );   //0 es el row, 1 es el campo   
$result10 = mysql_result($result, 0, 10 );   //repre
$result11 = mysql_result($result, 0, 11 );   //edad


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Perfil de <? echo $result2; ?> </span>
    <form id="form1" name="form1" method="post" action="usergraba.php">
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td><strong>Tu Perfil de usuario anonimo :</strong>        </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="95%" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td align="left">Email: </td>
          <td>
            <?php echo $result2; ?>
            <label>
            <input name="email" type="hidden" value="<?php echo $result2; ?>" />
            </label></td>
        </tr>
        <tr>
          <td align="left">Nick : </td>
          <td>
            <?php	echo $result1; ?>
            <input name="nick" type="hidden" value="<?php echo $result1; ?>" /></td>
        </tr>
        <tr>
          <td align="left">Password : </td>
          <td><input name="passw" type="text" value="<?php echo $result3; ?>" /></td>
        </tr>
        <tr>
          <td align="left">Pais:</td>
          <td><input name="pais" type="text" value="<?php echo $result4; ?>" /></td>
        </tr>
        <tr>
          <td align="left">Ciudad : </td>
          <td><input name="ciudad" type="text" value="<?php echo $result5; ?>" /></td>
        </tr>
        <tr>
          <td align="left">Edad : </td>
          <td><input name="edad" type="text" value="<?php echo $result11; ?>" /></td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Tu Perfil</strong> de usuario real : </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="95%" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td>Nombre Real : (nombre y apellidos) </td>
          <td><input name="nomreal" type="text" value="<?php echo $result6; ?>" /></td>
        </tr>
        <tr>
          <td>D.N.I.</td>
          <td><input name="dni" type="text" value="<?php echo $result7; ?>" /></td>
        </tr>
        <tr>
          <td>Perfil en facebook : </td>
          <td><input name="face" type="text" value="<?php echo $result8; ?>" size="80" /></td>
        </tr>
        <tr>
          <td>Verfificado (si/no) </td>
          <td>&nbsp;<?php echo $result9; ?></td>
        </tr>
        <tr>
          <td>Representante de </td>
          <td><label>
            <select name="repre">
              <option value="">Ninguno</option>
	<?
	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4, pase FROM cantantes WHERE pase = '0' order by nombre limit 0, 88", $dbh);
	while ($row = mysql_fetch_row($result))
	{
	?>
              <option value="<? echo $row[0]; ?>"><? echo $row[1]; ?></option>
	<?
	}
	?>
            </select>
            <?php	echo $result10; ?>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>	  </td>
    </tr>
    <tr>
      <td align="center"><label>
        <input type="submit" name="Submit" value="Modificar" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Mis quejas publicadas </strong></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="500" border="0" cellpadding="3" cellspacing="0">
<?
$result = mysql_query("SELECT camp0, idor, loginor, idprod, producto, fecha FROM operaciones WHERE iddes = '$id' order by camp0 DESC limit 0,15", $dbh);

$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha, apoyos, autor, idautor FROM tienda where idautor = '$idus' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td>&nbsp;
				<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
              <?php	echo $row["nombre"]; ?>
            </span></a>			</td>
            <td>&nbsp;<?php	echo $row["fecha"]; ?></td>
            <td>
			<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" />			</a></td>
            <td><a href="nuevoperso5.php?idprod=<?php	echo $row["camp0"]; ?>"></a></td>
          </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
    <?php
	}
	?>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Mis adhesiones </strong></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="500" border="0" cellpadding="3" cellspacing="0">
<?
$result = mysql_query("SELECT camp0, idprod, idautorori, nomautorori, estado, tipo, fecha, link FROM adhesiones WHERE idautorori = '$idus' order by camp0 DESC limit 0,15", $dbh);

	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td>&nbsp;
				<a href="producto1.php?id=<?php	echo $row["idprod"]; ?>"><span class="Estilofont1">
              <?php	echo $row["idprod"]; ?>
            </span></a>			</td>
            <td>
              <?php	echo $row["nomautorori"]; ?>
            </td>
            <td>&nbsp;<?php	echo $row["fecha"]; ?></td>
            <td>
			<a href="producto1.php?id=<?php	echo $row["idprod"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" />			</a></td>
            <td>
			link: <a href="<?php	echo $row["link"]; ?>" target="_blank">
              <?php	echo $row["link"]; ?> 
            </a>
			<a href="linkadhe.php?id=<?php	echo $row["camp0"]; ?>&idprod=<?php	echo $row["idprod"]; ?>">poner link</a>			</td>
          </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
    <?php
	}
	?>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Quejas contra mi representado </strong></td>
    </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="500" border="0" cellpadding="3" cellspacing="0">
        <?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha, apoyos, autor, idautor FROM tienda where idcant = '$result10' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp; <a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
            <?php	echo $row["nombre"]; ?>
          </span></a> </td>
          <td>&nbsp;
              <?php	echo $row["fecha"]; ?></td>
          <td><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" /> </a></td>
          <td><a href="nuevoperso5.php?idprod=<?php	echo $row["camp0"]; ?>">enviar respuesta </a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <?php
	}
	?>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><a href="logout.php">Cerrar sesion </a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="mensajes.php">Ver mis mensajes </a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><a href="quejaslog.php">Ver mis quejas publicados</a></td>
      </tr>
  </table>

        </form>

</div>
</div>

</body>
</html>
