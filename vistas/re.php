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
.Estilo2 {color: #999999}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
	  $idartis=$_GET["idartis"];
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1">REGISTRATE AQUI</span>
      <form id="form1" name="form1" method="post" action="re1.php">
      <table width="400" border="0" align="center" cellpadding="4" cellspacing="0">
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
          <td><span class="Estilo1">Registrate</span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Login :</span> </td>
          <td><label>
            <input name="login" type="text" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Email :</span> </td>
          <td><label>
            <input name="email" type="text" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Password :</span> </td>
          <td><label>
            <input name="pass" type="password" />
            <input name="idartis" type="hidden" value="<? echo $idartis; ?>" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Pais :</span> </td>
          <td><input name="pais" type="text" value="PERU" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Ciudad :</span> </td>
          <td><input name="ciudad" type="text" value="LIMA" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Registrate" />
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
  <p>&nbsp;  </p>
  </div>
</div>
</div>

</body>
</html>
