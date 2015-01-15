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
  <p>
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td><?
	  include("templates/menuartista.php");
	  ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Comunidad</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>El grupo no lleva su nombre en vano: sus letras hablan sobre la matanza y el robo de las tierras a los pueblos aborigenes. &quot;Musicalmente tenemos algo de Motorhead o de la primera &eacute;poca de AC/DC -explican-. Y las letras no caen en agresiones baratas. En los &uacute;ltimos tiempos&nbsp;Los Violadores&nbsp;parec&iacute;an una mezcla entre el programa de Lucho Avil&eacute;s y el Show de los Muppets&quot;. (S&iacute; de Clar&iacute;n, 11/09/92).</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="500" border="0">
          <tr>
            <td>puedes escojer 5 cantantes o bandas de nuestra lista </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox" value="checkbox" />
              Artista 1</label>
            </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox2" value="checkbox" />
              Artista 2</label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox3" value="checkbox" />
              Artista 3</label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 4</label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 5 </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 6 </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 7 </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 8 </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>
              <input type="checkbox" name="checkbox4" value="checkbox" />
              Artista 9 </label></td>
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
          <br /></td>
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
