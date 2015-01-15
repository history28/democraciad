<div class="cabezera">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="80" class="letracabez1"><img src="img/logorock.png" width="250" /> </td>
    <td height="45" class="letracabez2">Version. 1.5 </td>
    <td valign="top"><form id="form1" name="form1" method="get" action="http://www.google.com/ang/busca2b.php" target="_blank">
      <font color="#999999">
        <?
			$idus = $_SESSION['idUsuario'];
			$logus = $_SESSION['LoginUsuario'];

			//echo $_SESSION['idUsuario'];
			echo " ";
			echo $_SESSION['LoginUsuario'];
			
		  ?>
        </font>
      <table width="350" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
          <td>&nbsp;|&nbsp;</td>
          <td class="letra_roja"><a href="ayudatec.php">Download</a></td>
          <td>&nbsp;|&nbsp;</td>
          <td><a href="../admin" target="_blank">Administrar</a></td>
          <td>&nbsp;|&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
      <br />
      <table width="100" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td height="35"></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td class="letra_roja">&nbsp;</td>
          <td>&nbsp;</td>
          <td valign="bottom"><input id="texbox1" name="q" type="text" class="texbox2"/></td>
          <td>&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</div>
<div class="cabezera1">
<ul class="menu2">
	<li class="top"><a href="lista2.php" id="home" class="top_link"><span>Inicio</span></a><!--<![endif]-->
	</li>


	<?
	if ($idus=="")
	{
	?>
		<li class="top"><a href="entra.php" id="home" class="top_link"><span>Ingresar</span></a>
		</li>
	<?
	}
	else
	{
	?>
		<li class="top"><a href="loguser.php?id=<? echo $idus; ?>" id="home" class="top_link"><span>Tu Perfil</span></a>
		</li>
	<?
	}
	?>


	<li class="top"><a href="inicio.php" id="home" class="top_link"><span>Reclamos </span></a><!--<![endif]-->
	</li>

	<li class="top"><a href="lista1con.php?estilo=Congresistas" id="shop" class="top_link"><span>Congresistas</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>

	<li class="top"><a href="ayuda2.php" id="shop" class="top_link"><span>Acerca de</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>


</ul>			  
</div>

  <div class="cabezera2">
</div>

