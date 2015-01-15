<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Documento sin t&iacute;tulo</title>

<style type="text/css">

<!--

#foto1 {
	border-radius: 8px 8px 8px 8px;
}


.formu1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;

	color: #003366;

	border: 1px solid #4F617B;

}

#form1 input {

	border: 1px solid #999999;

}

.formu2a {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 12px;

	color: #003366;

	border: 1px solid #4F617B;

}

#formu2a input {

	border: 1px solid #999999;

}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
a:link {
	color: #2398C9;
}
a:visited {
	color: #009999;
}
.Estilo2 {
	color: #333333;
	font-weight: bold;
}

-->

</style>

<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>



<body onload="MM_preloadImages('figuras/usuarios2.png')">

<strong><!--Categorias--></strong> 

<table width="230" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#8A8A8A" bgcolor="#E6E7E5">
      <tr>
        <td align="center" >&nbsp;</td>
      </tr>

<tr>

    <td align="center">&nbsp;</td>
</tr>
</table>
</td>
  </tr>

  <tr>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>
  </tr>

  

  <tr>

    <td><table width="100%"  border="0" cellspacing="0" cellpadding="4">

      <tr>

        <td height="25" align="center" valign="bottom">&nbsp;</td>
      </tr>

      <tr>

        <td align="center"><hr /></td>
      </tr>

      <tr>

        <td align="center">&nbsp;</td>
      </tr>

      <tr>

        <td align="center"><div class="borde"> <strong class="subder">Suscribete </strong><br />

          <font color="#666666">Ingrese los datos en el formulario, para recibir los ultimos eventos en su Email. </font><br />

  <?php if ($msg != "") { ?>

  <span class="conf"><?php echo $msg; ?></span><br />

  <?php } ?>

  <form action="mail2suscrip.php" method="post" enctype="multipart/form-data" target="_blank" name="formu2a" id="formu2a">

    <p> Nombre:<br />

        <input type="text" name="DA1" size="30" />

      <br />Email : <br />

      <input type="text" name="destino" size="30" />

      <input name="asunto" type="hidden" value="Suscripcion" size="50" />

      <input type="hidden" name="DA2" size="50" />

      <br />

      <input  type="hidden" name="archivo"  size="32" />

       <input  type="hidden" name="varcamp0"  value="<? echo $pcamp0;?>" />

       <br />

      <input type="submit" name="btsend" class="boton" value="Enviar datos" />

      <input type="hidden" name="action" value="send" />
    </p>
  </form>

        </div></td>
      </tr>

      <tr>

        <td align="center">&nbsp;</td>
      </tr>

      <tr>

        <td align="center">&nbsp;</td>
      </tr>

      <tr>

        <td align="center">&nbsp;</td>
      </tr>

      <tr>

        <td align="center">&nbsp;</td>
      </tr>


      <tr>

        <td align="center" ><a href="contaceven.php" target="_blank"><img src="envianosinf.png"  border="0" /></a></td>
      </tr>

      <tr>

        <td align="center" >&nbsp;</td>
      </tr>

      <tr>

        <td align="center" >&nbsp;	</td>
      </tr>

      <tr>

        <td align="center" >&nbsp;		</td>
      </tr>



    </table></td>
  </tr>
</table>

</body>

</html>

