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
body,td,th {
	font-size: 10pt;
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
.Estilo2 {font-size: 14px}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  $letra=$_GET["letra"];
	  $deca=$_GET["deca"];
	  $estilo=$_GET["estilo"];
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td><table width="600" border="0" cellpadding="2" cellspacing="0" bordercolor="#999999">
        <?
	$cuenta = 0;
//	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4, pase FROM cantantes WHERE estilo = '$estilo' AND i1 = '0' AND pase = '0' order by  camp0 limit 0, 88", $dbh);
	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4, pase FROM cantantes WHERE estilo = '$estilo' AND i1 = '0' order by  camp0 limit 0, 88", $dbh);
	while ($row = mysql_fetch_row($result)){
		$cuenta = $cuenta + 1;
		if 	($cuenta==2)
		{
			$cuenta = 0;
			$colortr = "#FFFFFF";
		}
		else
		{
			$colortr = "#EBEBEB";
		}
 		?>
        <tr>
          <td align="left" colspan="3"><span class="Estilo2"> 
		  <a href="artista1.php?id=<?php echo $row[0]; ?>">
		   &nbsp; <? echo $row[1]; ?></a>&nbsp;
                <?  //examenes
				if ($row[6]=="1")
				{
					echo "(Por aprobar)"; 
				}

				$var1 = $row[0];
				$varex = $row[0];
				echo "- ".$row[0];
				echo " i1 ".$row[2];
				?>
          </span></td>
        </tr>
        <?  //subcategorias
		$resultx = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE i1 = '$var1' AND i2 = '0' order by  camp0 limit 0, 88", $dbh);
//print "--SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE i1 = '$var1' order by  camp0 limit 0, 88<br>";
		$filas = mysql_num_rows($resultx);
		if ($filas!="")
		{ 
			while ($rowx = mysql_fetch_row($resultx)){  //while de subcateg
			?>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><span class="Estilo2">&nbsp; 
		  <a href="artista1.php?id=<?php echo $rowx[0]; ?>&i2=<?php echo $rowx[3]; ?>"> 
		  <? echo $rowx[1]; ?> </a> &nbsp;</span>
		  <?
				echo "- ".$rowx[0];
				echo " i1 ".$rowx[2];
				echo " i2 ".$rowx[3];

		  ?>
		  </td>
          <?
									// sub sub categorias
									$var2 = $rowx[0];
									$resulty = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE i2 = '$var2' AND i3 = '0' order by nombre limit 0, 88", $dbh);
									//print "SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cantantes WHERE i2 = '$var2' AND i3 = '0' order by categ limit 0, 88<br>";

									$filas = mysql_num_rows($resulty);
									if ($filas!="")
									{ ?>
          <?
										while ($rowy = mysql_fetch_row($resulty)){   //while de sub sub categ
											//echo "<br>- Examen -".$rowy[1];
											?>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><span class="Estilo2">&nbsp; 
		  <a href="artista1.php?id=<?php echo $rowy[0]; ?>&i2=<?php echo $rowy[3]; ?>">
		  <? echo $rowy[1]; ?>
		  </a>
		  						<?
								$varex = $rowy[0];
								?> &nbsp;</span>
								</td>
          					<?
							}              //fin del while de sub sub
						}              //fin del if sub sub
					}          //fin del while de subcateg
				}              //fin del if de subcateg
			}
			?>
        </tr>
      </table></td>
      <td valign="top"><table width="300" border="0" cellpadding="0">
        <tr>
          <td>buscar por letra </td>
        </tr>
        <tr>
          <td>
	  <a href="lista1.php?letra=A"><font size="2"><b>A </b></font></a>&nbsp;
	  <a href="lista1.php?letra=B"><font size="2"><b>B </b></font></a>&nbsp;
	  <a href="lista1.php?letra=C"><font size="2"><b>C </b></font></a>&nbsp;
	  <a href="lista1.php?letra=D"><font size="2"><b>D </b></font></a>&nbsp;
	  <a href="lista1.php?letra=E"><font size="2"><b>E </b></font></a>&nbsp;
	  <a href="lista1.php?letra=F"><font size="2"><b>F </b></font></a>&nbsp;
	  <a href="lista1.php?letra=G"><font size="2"><b>G </b></font></a>&nbsp;
	  <a href="lista1.php?letra=H"><font size="2"><b>H </b></font></a>&nbsp;
	  <a href="lista1.php?letra=I"><font size="2"><b>I </b></font></a>&nbsp;
	  <a href="lista1.php?letra=J"><font size="2"><b>J </b></font></a>&nbsp;
	  <a href="lista1.php?letra=K"><font size="2"><b>K </b></font></a>&nbsp;
	  <a href="lista1.php?letra=L"><font size="2"><b>L </b></font></a>&nbsp;
	  <a href="lista1.php?letra=M"><font size="2"><b>M </b></font></a>&nbsp;
	  <a href="lista1.php?letra=N"><font size="2"><b>N </b></font></a>&nbsp;
	  <a href="lista1.php?letra=O"><font size="2"><b>O </b></font></a>&nbsp;
	  <a href="lista1.php?letra=P"><font size="2"><b>P </b></font></a>&nbsp;
	  <a href="lista1.php?letra=Q"><font size="2"><b>Q </b></font></a>&nbsp;
	  <a href="lista1.php?letra=R"><font size="2"><b>R </b></font></a>&nbsp;
	  <a href="lista1.php?letra=S"><font size="2"><b>S </b></font></a>&nbsp;
	  <a href="lista1.php?letra=T"><font size="2"><b>T </b></font></a>&nbsp;
	  <a href="lista1.php?letra=U"><font size="2"><b>U </b></font></a>&nbsp;
	  <a href="lista1.php?letra=V"><font size="2"><b>V </b></font></a>&nbsp;
	  <a href="lista1.php?letra=W"><font size="2"><b>W </b></font></a>&nbsp;
	  <a href="lista1.php?letra=X"><font size="2"><b>X </b></font></a>&nbsp;
	  <a href="lista1.php?letra=Y"><font size="2"><b>Y </b></font></a>&nbsp;
	  <a href="lista1.php?letra=Z"><font size="2"><b>Z </b></font></a>&nbsp;		  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>buscar</td>
        </tr>
        <tr>
          <td><form id="form1" name="form1" method="post" action="">
            <label>
            <input type="text" name="textfield" />
            </label>
                    <label>
                    <input type="submit" name="Submit" value="Enviar" />
                    </label>
          </form>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
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
      <td><a href="nuevoperso.php?estilo=<?php echo $estilo; ?>">agregar nueva autoridad </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="lista1con.php?estilo=Congresistas">ver lista congresistas </a></td>
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
