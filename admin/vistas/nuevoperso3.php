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
body,td,th {
	font-size: 10pt;
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
	  $idartis=$_GET["idartis"];
	  $estilo=$_GET["estilo"];
	  $cantante=$_GET["cantante"];
	  $i2=$_GET["i2"];


	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4, pase FROM cantantes WHERE camp0 = '$cantante' order by  camp0 limit 0, 88", $dbh);
$filas = mysql_num_rows($result);
$varcamp0 = mysql_result($result, 0, 0 );   //0 es el row, 1 es el campo   
$varauto = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
$vari1 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
$vari2 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   

$vvvari1 = $cantante;
if 	($vari1==0)
{
}
else
{
	$vvvari1 = $vari1;
	$vvvari2 = $cantante;
}

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
<?
print "SELECT camp0, nombre, i1, i2, i3, i4, pase FROM cantantes WHERE camp0 = '$cantante' order by  camp0 limit 0, 88";
?>
      <span class="Estilo1"> PUBLICAR PRODUCTO</span>
      <form id="form1" name="form1" method="post" action="nuevoperso1.php" enctype="multipart/form-data">
      <table width="600" border="0" cellpadding="4" cellspacing="0">
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
        <tr>
          <td><span class="Estilo1">Publicar</span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>autoridad : </td>
          <td><label>
            <input name="idcant" type="hidden" value="<? echo $idartis; ?>" /><? echo $idartis; ?>
            <br />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>id usuario : </td>
          <td><input name="iduser1" type="hidden" value="<? echo $idus; ?>" /><? echo $idus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>usuario:</td>
          <td><input name="iduser" type="hidden" value="<? echo $logus; ?>" /><? echo $logus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>estilo:</td>
          <td><input name="estilo" type="text" value="<? echo $estilo; ?>"/></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>nombre autoridad:</td>
          <td><input name="iduserxxx" type="hidden" value="" /><? echo $varauto; ?></td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td>nombre : </td>
          <td><input name="nombre" type="text" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>breve descripcion : </td>
          <td><textarea name="descrip" cols="40" rows="3"></textarea>
            max 100 caracteres </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>pais : </td>
          <td><input name="nombre2" type="text" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>provincia / depto : </td>
          <td><input name="nombre3" type="text" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>talvez dentro de un personaje -i1 </td>
          <td><input name="i1" type="text" value="<? echo $vvvari1; ?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>talvez dentro de un personaje -i2 </td>
          <td><input name="i2" type="text" value="<? echo $vvvari2; ?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Foto : </td>
          <td><input type="file" name="pictures[]" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Portal : </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Twitter : </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Enviar" />
          </label></td>
          <td>&nbsp;</td>
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
      </table>
      </form>
      <p>&nbsp;</p>
  <p>&nbsp;</p>
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
