<?php
//require("class.phpmailer.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP Email Attach</title>
<link href="mailattach.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="descdet">
	<div class="borde">
	<strong class="subder">Env&iacute;ar Email  </strong><br>
	Ingresar los datos en el formulario. <br>
	<?php if ($msg != "") { ?><span class="conf"><?php echo $msg; ?></span><br><?php } ?>
	<form action="mail4a.php" method="post" enctype="multipart/form-data">
	  <p>	  Email Destinatario<br>
	  <input type="text" name="destino" size="50">
	  Remitente (sale en la parte izquierda)<br>
	  <input type="text" name="remitente" size="50">
	  Asunto<br>
	  <input type="text" name="asunto" size="50">
	  Nick:<br>
	  <input type="text" name="DA1" size="50"><br>
	  Nombres<br>
	  <input type="text" name="DA2" size="50"><br>
	
      <input  type="hidden" name="archivo"  size="32">	  
      Mensaje<br>
	  <textarea name="mensaje" cols="47" rows="8" wrap="virtual" id="mensaje"></textarea>
	  <input type="submit" name="btsend" class="boton" value="Enviar Email">
	  <input type="hidden" name="action" value="send" />
	  </p>
	</form>
	</div>
	</td>
  </tr>
</table>
</body>
</html>
