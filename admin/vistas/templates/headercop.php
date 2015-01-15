<div class="cabezera">

  <table width="95%" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
		    <td class="letracabez1">Rockemotion	  
			</td>
            <td>
<form id="form1" name="form1" method="get" action="http://www.Top-Dialog.com/ang/busca2b.php" target="_blank">
          <font color="#999999">
		  <?
			//echo $_SESSION['idUsuario'];
			echo $_SESSION['LoginUsuario'];
			$idus = $_SESSION['idUsuario'];
			$logus = $_SESSION['LoginUsuario'];
			
		  ?>
		  </font>
          <table width="100" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td class="letra_roja">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input id="texbox1" name="q" type="text" class="texbox2"/></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
          </table>
      </form>
			
			</td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="45" class="letracabez2">
	  Compra - Vende - Intercambia lo mejor del Rock
	  </td>
    </tr>
  </table>
</div>
  <div class="cabezera1">
<ul class="menu2">
	<li class="top"><a href="inicio.php" id="home" class="top_link"><span>Portada</span></a><!--<![endif]-->
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
		<li class="top"><a href="loguser.php?id=<? echo $idus; ?>" id="home" class="top_link"><span>Perfil</span></a>
		</li>
	<?
	}
	?>


	<li class="top"><a href="lista2.php" id="home" class="top_link"><span>Busqueda </span></a><!--<![endif]-->
	</li>

	<li class="top"><a href="mercado.php" id="shop" class="top_link"><span>Mercado musical</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>


</ul>			  
</div>

  <div class="cabezera2">
	  Busqueda por orden alfabetico: 
	  <a href="lista1.php?letra=A"><font size="2"><b>A </b></font></a>
	  <a href="lista1.php?letra=B"><font size="2"><b>B </b></font></a>
	  <a href="lista1.php?letra=C"><font size="2"><b>C </b></font></a>
	  <a href="lista1.php?letra=D"><font size="2"><b>D </b></font></a>
	  <a href="lista1.php?letra=E"><font size="2"><b>E </b></font></a>
	  <a href="lista1.php?letra=F"><font size="2"><b>F </b></font></a>
	  <a href="lista1.php?letra=G"><font size="2"><b>G </b></font></a>
	  <a href="lista1.php?letra=H"><font size="2"><b>H </b></font></a>
	  <a href="lista1.php?letra=I"><font size="2"><b>I </b></font></a>
	  <a href="lista1.php?letra=J"><font size="2"><b>J </b></font></a>
	  <a href="lista1.php?letra=K"><font size="2"><b>K </b></font></a>
	  <a href="lista1.php?letra=L"><font size="2"><b>L </b></font></a>
	  <a href="lista1.php?letra=M"><font size="2"><b>M </b></font></a>
	  <a href="lista1.php?letra=N"><font size="2"><b>N </b></font></a>
	  <a href="lista1.php?letra=O"><font size="2"><b>O </b></font></a>
	  <a href="lista1.php?letra=P"><font size="2"><b>P </b></font></a>
	  <a href="lista1.php?letra=Q"><font size="2"><b>Q </b></font></a>
	  <a href="lista1.php?letra=R"><font size="2"><b>R </b></font></a>
	  <a href="lista1.php?letra=S"><font size="2"><b>S </b></font></a>
	  <a href="lista1.php?letra=T"><font size="2"><b>T </b></font></a>
	  <a href="lista1.php?letra=U"><font size="2"><b>U </b></font></a>
	  <a href="lista1.php?letra=V"><font size="2"><b>V </b></font></a>
	  <a href="lista1.php?letra=W"><font size="2"><b>W </b></font></a>
	  <a href="lista1.php?letra=X"><font size="2"><b>X </b></font></a>
	  <a href="lista1.php?letra=Y"><font size="2"><b>Y </b></font></a>
	  <a href="lista1.php?letra=Z"><font size="2"><b>Z </b></font></a>
</div>

