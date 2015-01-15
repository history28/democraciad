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

$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado, repre FROM usuarios WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);
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


	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Como usar  </span>
        <form id="form1" name="form1" method="post" action="usergraba.php">
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#EBEBEB">
    <tr>
      <td><strong>Como validar usuarios :</strong>        </td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Cuando un usuario se registra se le crea un codigo de retorno, el cual servira para enviarle a su email y el usuario sera validado cuando responda con ese codigo enviado.</td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>Cuando el usuario se registra le llega a su email un enlace al cual debe dar clic. (esto no funciona cuando se trabaja en modo local con appserv) </td>
        </tr>
        <tr>
          <td valign="top">3.</td>
          <td>Luego seleccionar la opcion &quot;publicar queja&quot; </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Luego debe llenar los cuadros de titulo del reclamo, lugar de referencia (opcional) y una descripcion del reclamo. Opcionalmente puede enviar una imagen para graficar mejor el reclamo. </td>
        </tr>
        <tr>
          <td valign="top">4.</td>
          <td><strong>Hecho esto su reclamo aparecera en la lista de reclamos.</strong></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Lo podra ver seleccionando el distrito correspondiente y si su reclamo tuviera muchas adhesiones lo podra ver en el inicio de la pagina </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td align="center"><label></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Como apoyar un reclamo : </strong></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Primero debe estar registrado e ingresar con su clave. </td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>Seleccionar el reclamo que quiere apoyar </td>
        </tr>
        <tr>
          <td valign="top">3.</td>
          <td>Selecionar la opcion &quot;enviar adhesion&quot; </td>
        </tr>
        <tr>
          <td valign="top">4.</td>
          <td>Los reclamos que tengan mas adhesiones apareceran primero en la pagina </td>
        </tr>
        <tr>
          <td valign="top">5.</td>
          <td>No podra apoyar 2 veces un mismo reclamo, el sistema automaticamente lo detecta. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><strong>Como funciona esto : </strong></td>
    </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td><table width="600" border="0">
        <tr>
          <td width="30" valign="top">1.</td>
          <td>Cualquier ciudadano puede publicar un reclamo y los reclamos que tengan mas adhesiones apareceran primero. </td>
        </tr>
        <tr>
          <td valign="top">2.</td>
          <td>El municipio puede enviar una respuesta a cualquier reclamo.</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Para esto un representante del municipio se registra como usuario y luego en los detalles de su perfil tiene la opcion de indicar si representa a una determinada municipalidad. Esto debe ser confirmado mediante la publicacion en algun medio o portal que tenga la municipalidad. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Cada respuesta de la municipalidad debe estar tambien en algun medio (portal, facebook, twitter) que disponga la municipalidad, esto es para validar de que la respuesta es real y no una manipulacion. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Una persona ajena a la municipalidad o los administradores del sistema tambien podrian poner las respuestas siempre que ella lo haga por uno de sus medios propios. </td>
        </tr>
        <tr>
          <td valign="top">3.</td>
          <td>En cuanto a los usuarios, hay 2 tipos de usuarios, los anonimos y los reales. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Los anonimos son los que solo han puesto sus datos basicos (email, clave y nick) </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>Los usuarios reales son los que ademas han puesto su nombre completo, su DNI, su perfil de facebook, incluso hay otros que pueden firmar un planillon. </td>
        </tr>
        <tr>
          <td valign="top">4.</td>
          <td>Acerca de los apoyos a los reclamos, mas valor tienen los apoyos de usuarios reales (que tienen sus datos completos), y tambien puede haber planillones por cada reclamo, para que le den mas autenticidad a su adhesion mediante firmas en el planillon. </td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><a href="suge.php">envianos una sugerencia </a></td>
      </tr>
    <tr>
      <td><hr /></td>
      </tr>
    <tr>
      <td align="center"><a href="ayudatec.php">Ayuda tecnica </a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
  </table>

        </form>

</div>
</div>

</body>
</html>
