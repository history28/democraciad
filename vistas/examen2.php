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
.Estilo2 {



	font-family: Verdana, Arial, Helvetica, sans-serif;



	font-weight: bold;



	font-size: 14px;



}

.barra1 {

	color: #006633;

	background-color: #527100;

}

.Estilo3 {

	font-size: 14px;

	font-family: Arial, Helvetica, sans-serif;

}

.Estilo4 {font-family: Arial, Helvetica, sans-serif}

.Estilo6 {

	font-size: 16px;

	font-family: Arial, Helvetica, sans-serif;

}

.Estilo7 {font-size: 16px}

.Estilo9 {

	font-size: 16;

	font-weight: bold;

	color: #003300;

}



-->



</style>



</head>







<body>
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
hhhhhh
  <table width="800" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td><?
	  include("templates/menuartista.php");
	  ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Tienda</span></td>
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
      <td>
	  
	  
	  <table width="700" border="0"><tr>
			  <td width="160">&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
<?
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada FROM tienda WHERE idcant = '$id' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td><a href="#"><img src="fotos/Sin_imagen.png" width="100" border="1" /></a></td>
            <td>&nbsp;
				<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
              <?php	echo $row["nombre"]; ?>
            </span></a>			</td>
            <td>&nbsp;
			</td>
            <td>
			<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" />			</a></td>
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
        </table>
          <br /></td>
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
		  <a href="vende1.php?idartis=<?php echo $id; ?>">
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
	  ?>
	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="publica.php?idartis=<?php echo $id; ?>"></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="artista5a.php?id=<?php echo $id; ?>">subasta</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</div>

<span class="Estilo2">


</span><br>


<br />
Bienvenido : <? echo $alumno ?>

<p id="test">ccccddd</p>

<table border="0">
  <tbody>
    <tr>
      <td align="middle"><font face="Arial"><strong>Tiempo restante:</strong></font></td>
      <td align="middle">
        <form name="d">
          <p><input name="d2" size="8" /></p>
        </form>
      </td>
      <td align="middle"><font face="Arial"><strong>segundos</strong></font></td>
    </tr>


  </tbody>

</table>

<?
$varphp1 = "3";
$varphp2 = "00";
$varphp2 = "test";
?>

<script>

var milisec=9
var seconds=0
//var minuts=1   //59
//var hors=2
var minuts="<? echo $varphp2; ?>"
var hors="<? echo $varphp1; ?>"

var seconds1=""
var minuts1=""
var mytext=""

document.d.d2.value='0'


function display(){
if (hors==0){
	if (minuts==0){
		if (seconds<=0){

			alert("el tiempo ha terminado");
			//window.location="index1.php"
			document.form1.submit(); 
		}

	}
}



if (minuts<0){
	minuts=59
	hors-=1
}


if (seconds<=0){
	seconds=59
	minuts-=1
}



if (milisec<=0){
	milisec=9
	seconds-=1
}
else
	seconds1=seconds
	minuts1=minuts
	hors1=hors
	if (seconds<=9)
	seconds1="0"+seconds
	if (minuts<=9)
	minuts1="0"+minuts
	milisec-=1
    //mytext="Hello again";
    //document.write(mytext);
	//document.d.d2.value="0"+hors+":"+minuts1+":"+seconds1+"."+milisec
	document.d.d2.value="0"+hors+":"+minuts1+":"+seconds1
	document.getElementById("test").innerHTML="0"+hors+":"+minuts1+":"+seconds1
	//if (curtime=="")
	//hors1="0"+hors
	setTimeout("display()",100)
}


display()

//-->
</script>






</body>



</html>



