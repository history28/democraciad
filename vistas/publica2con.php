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
.Estilo2 {color: #333333}
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
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <div id="subcontent"></p>
      <span class="Estilo1"> PUBLICAR ACTIVIDAD </span>
      <form id="form1" name="form1" method="post" action="publica1con.php" enctype="multipart/form-data">
      <table width="600" border="0" align="center" cellpadding="4" cellspacing="0">
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
          <td align="right"><span class="Estilo2">personaje :</span> </td>
          <td><label>
            <input name="idcant" type="hidden" value="<? echo $idartis; ?>" /><? echo $idartis; ?>
            <br />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">id usuario :</span> </td>
          <td><input name="iduser1" type="hidden" value="<? echo $idus; ?>" /><? echo $idus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">usuario:</span></td>
          <td><input name="iduser" type="hidden" value="<? echo $logus; ?>" /><? echo $logus; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Asistencia:</span></td>
          <td><label>
            <select name="asistencia">
              <option value="Estuvo en el Congreso">Estuvo en el Congreso</option>
              <option value="No asistio">No asistio</option>
              <option value="Falto con licencia">Falto con licencia</option>
              <option value="LLego tarde">LLego tarde</option>
            </select>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Que hizo:</span></td>
          <td><input name="produc" type="text" size="45" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Dia de la actividad :</span> </td>
          <td>
                  <input type="text" name="fecadmin" id="f_date2" class="box-form" value="<? echo $fecha1; ?>"/>
				      <button id="f_btn2">...</button><br />
						<script type="text/javascript">//<![CDATA[
						  Calendar.setup({
							inputField : "f_date2",
							trigger    : "f_btn2",
							onSelect   : function() { this.hide() },
							//showTime   : 12,
							dateFormat : "%d-%m-%Y"
						  });
						//]]></script>		  
						
			</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">descripcion :</span> </td>
          <td><textarea name="descrip" cols="40" rows="5"></textarea></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><span class="Estilo2">Foto :</span> </td>
          <td><input type="file" name="pictures[]" /></td>
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
