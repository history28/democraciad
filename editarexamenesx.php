<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="css/plantilla.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<title>plantilla</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.Estilo1 {
	font-size: 24px;
	color: #FFFFFF;
}
.Estilo2 {font-size: 10px}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
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
<div class="cabezera1">
        <? include ("menuup.php"); ?>
  </div>
  </div>

<div class="cuerpo">
	<div id="matricula">

		<div id="cabecera-formulario">
			<br />
              <h2>Lista de mis evaluaciones : </h2>
			<div id="atras">
				<a href="javascript:history.back()">
				<img src="imagenes1/atras.png" alt=atras border="0"></a>
			</div>		
		</div>		


			  <?
				$LoginUsuario1 = $_SESSION['LoginUsuario'];
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				//print "LoginUsuario " . $LoginUsuario1;

				?>

		<p><span class="Estilo2">
<?php
include("connec.php");
?>
  <?
  
$cur=$_GET["cur"];
$aula=$_GET["aula"];
$examen=$_GET["examen"];
$exam=$_GET["exam"];



$result = mysql_query("SELECT camp0, curso, grado, codigo, subcurso FROM cursos WHERE codigo = '$cur'", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
  print "no existen registros";
}
Else
{
  $nomcur = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
  $grado1 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
  $codcur = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
  $nomsubcur = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
  //$nomcompletoprof = $nombreprof." ".$apepprof;	
}



$result = mysql_query("SELECT camp0, aula, grado, tutor, codaula FROM aulagrado WHERE codaula = '$aula'", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
  print "no existen registros";
}
Else
{
  $nombreaula = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
  $gradoaula = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
  $tutoraula = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
  $codaula1 = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
  //$nomcompletoaula = $gradoaula." ".$nombreaula;	
  $nomcompletoaula = $nombreaula;	
}


echo "<br>Aula: ".$nomcompletoaula;
echo "<br>Curso: ".$nomcur;
echo "<br>Sub Curso: ".$nomsubcur;
echo "<br><br>";

?>


</span>

<?
	$result = mysql_query("SELECT camp0, nomalumno, codalumno, nota, bimestre, nomprof, nomcur, nomaula, codaula, codigocur, bim1, bim2, bim3, bim4, promfinal FROM colegiopromedios WHERE codaula = '$aula' AND codigocur = '$cur' order by nomalumno limit 0, 45", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
  print "no existen evaluaciones ";
  ?>
  <a href="ponernotaprom1.php?aula=<? echo $aula; ?>&cur=<? echo $cur; ?>" >DAR CLIC AQUI PARA ACTIVAR LAS EVALUACIONES</a>
  <?

  exit();
}
Else
{
  $result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
}



//print "SELECT camp0, codcurso, prof, examen, grado, orden, nomcurso, editado, subcurso, bimestre FROM examenes WHERE prof = '$CodUsuario1' AND codcurso = '$cur' AND codaula = '$aula' order by examen limit 0, 88";
?>

        <table width="470" border="1" cellspacing="0" cellpadding="3">
          <tr bgcolor="#CCCCCC">
            <td align="center">examen</td>
            <td align="center">prof</td>
            <td align="center">orden</td>
            <td align="center">bim</td>
            <td align="center">peso</td>
            <td align="center">editado</td>
            <td align="center">poner nota </td>
            <td align="center">editar</td>
            <td align="center">borrar</td>
          </tr>
          <?
		$result = mysql_query("SELECT camp0, codcurso, prof, categ, grado, orden, nomcurso, editado, bimestre, peso FROM cur2_prof WHERE codcurso = '$cur' AND aula = '$aula' order by bimestre, categ, orden limit 0, 88", $dbh);
	while ($row = mysql_fetch_row($result)){
 	?>
          <tr>
            <td align="center">&nbsp;<? echo $row[3]; ?></td>
            <td align="center">&nbsp;<? echo $row[2]; ?></td>
            <td align="center"><? echo $row[5]; ?></td>
            <td align="center"><? echo $row[8]; ?></td>
            <td align="center"><? echo $row[9]; ?></td>
            <td align="center"><? echo $row[7]; ?></td>
            <td align="center">&nbsp;
			<?
			if ($row[7]=="")
			{
			?>
				<a href="ponernotadet1.php?id=<? echo $row[0]; ?>">poner nota </a>
			<?
			}
			if ($row[7]=="0")
			{
			?>
				<a href="ponernotadet1.php?id=<? echo $row[0]; ?>">poner nota </a>
			<?
			}
			?>			</td>
            <td align="center"><a href="editarexamenes2.php?id=<? echo $row[0]; ?>">editar</a></td>
            <td align="center"><a href="borralistaexamen.php?id=<? echo $row[0]; ?>">borrar</a></td>
          </tr>
          <?
	}
	?>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
      </table>        
        <p>&nbsp;</p>
        <table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="#0066FF">
          <?
	$cuenta = 0;
	$result = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2 WHERE i1 = '0'  AND codcurso = '$cur' order by orden, categ limit 0, 88", $dbh);
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
          <tr bgcolor="<? echo $colortr ?>">
            <td align="left" colspan="3"><span class="Estilo2">&nbsp;
			<? echo $row[1]; ?>&nbsp; (Peso: <? echo $row[8]; ?>)
                  <?  //examenes
					$var1 = $row[0];
				
					$varex = $row[0];
					?>
            </span></td>
          </tr>
          <?  //subcategorias
						$resultx = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2 WHERE i1 = '$var1' AND i2 = '0' order by orden, categ limit 0, 88", $dbh);
						$filas = mysql_num_rows($resultx);
						if ($filas!="")
						{ ?>
          <?
							while ($rowx = mysql_fetch_row($resultx)){  //while de subcateg
								?>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><span class="Estilo2">&nbsp;<? echo $rowx[1]; 
					
									$varex = $rowx[0];
									?>
&nbsp; (Peso: <? echo $rowx[8]; ?>) </span></td>
            <?
									// sub sub categorias
									$var2 = $rowx[0];
									$resulty = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2 WHERE i2 = '$var2' AND i3 = '0' order by orden, categ limit 0, 88", $dbh);
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
            <td><span class="Estilo2">&nbsp;<? echo $rowy[1]; 
						
												$varex = $rowy[0];
												?>
&nbsp; (Peso: <? echo $rowy[8]; ?>) </span></td>
            <?
										}              //fin del while de sub sub
										?>
            <?
									}              //fin del if sub sub
									?>
            <?
						}          //fin del while de subcateg
						?>
            <?
					}              //fin del if de subcateg
					?>
            <?
			}
			?>
          </tr>
      </table>
        <p>&nbsp;</p>
      <p class="Estilo2"></p>
	  <table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="#0066FF">
          <?
	$cuenta = 0;
	$quebim = 0;
	$result = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, id, bimestre, editado FROM cur2_prof WHERE i1 = '0'  AND codcurso = '$cur' AND aula = '$aula' order by bimestre, orden, categ limit 0, 88", $dbh);

	while ($row = mysql_fetch_row($result)){
		$cuenta = $cuenta + 1;
		
		if 	($quebim!=$row[10])
		{
			$quebim = $row[10];
			?>
			<tr><td colspan=2>Bim <? echo $quebim; ?></td></tr>
			<?
		}

		if 	($cuenta==2)
		{
			$cuenta = 0;
			//$colortr = "#FFFFFF";
			$colortr = "#EBEBEB";
		}
		else
		{
			$colortr = "#EBEBEB";
		}
 		?>
          <tr bgcolor="<? echo $colortr ?>">
            <td align="left" colspan="3"><span class="Estilo2">&nbsp;
			    <strong><? echo $row[1]; ?></strong>&nbsp; (Peso: <? echo $row[8]; ?>)
			&nbsp; (Bim: <? echo $row[10]; ?>)
			&nbsp; (editado: <? echo $row[11]; ?>)
              <?  //examenes
					$varid = $row[9];
					$varbim = $row[10];
			
			//subcategorias
			$resultx = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, id, bimestre, editado FROM cur2_prof WHERE i1 = '$varid' AND i2 = '0' AND bimestre = '$varbim' order by  orden, categ limit 0, 88", $dbh);
			$filas = mysql_num_rows($resultx);
			if ($filas!="")
			{
				$letraaponer = "";
			}
			else
			{
				$letraaponer = "poner nota";

			} 


					?>
            </span></td>
			<TD align="center">
			
			<a href="ponernotadet1.php?id=<? echo $row[0]; ?>">
			<? echo $letraaponer; ?> </a>
			
			</TD>
            <td align="center"><a href="editarexamenes2.php?id=<? echo $row[0]; ?>">editar</a></td>
          </tr>
          <?  
			if ($filas!="")
			{ 
					while ($rowx = mysql_fetch_row($resultx)){  //while de subcateg
					?>
					  	<tr>
						<td>&nbsp;</td>
						<td colspan="2"><span class="Estilo2">&nbsp;
						<strong>
						<? echo $rowx[1]; 
						$varex = $rowx[0];
						$varid1 = $rowx[9];
						$varbim1 = $rowx[10];
						?>
						</strong>
						  &nbsp; (Peso: <? echo $rowx[8]; ?>) 
						  &nbsp; (Bim: <? echo $rowx[10]; ?>)
						  &nbsp; (editado: <? echo $rowx[11]; ?>)
						  </span>
			            <?
						// sub sub categorias
						$var2 = $rowx[0];
						$resulty = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, editado FROM cur2_prof WHERE i2 = '$varid1' AND i3 = '0' AND bimestre = '$varbim1' order by  orden, categ limit 0, 88", $dbh);
						$filas = mysql_num_rows($resulty);
						if ($filas!="")
						{
							$letraaponer = "";
						}
						else
						{
							$letraaponer = "poner nota";
						} 
						?>						  
						  
						  </td>
			<TD align="center">
			
			<a href="ponernotadet1.php?id=<? echo $rowx[0]; ?>">
			<? echo $letraaponer; ?> </a>
			
			</TD>
            <td align="center"><a href="editarexamenes2.php?id=<? echo $row[0]; ?>">editar</a></td>
			            <?
						if ($filas!="")
						{ 
							while ($rowy = mysql_fetch_row($resulty)){   //while de sub sub categ
								//echo "<br>- Examen -".$rowy[1];
								?>
		  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><span class="Estilo2">&nbsp;
									<strong>
									<? echo $rowy[1]; 
									$varex = $rowy[0];
									?>
									</strong>
					     	         &nbsp; (Peso: <? echo $rowy[8]; ?>) 
					     	         &nbsp; (Editado: <? echo $rowy[9]; ?>) 
									 </span></td>
			<TD align="center">
			<a href="ponernotadet1.php?id=<? echo $rowy[0]; ?>">
			poner nota </a>
			<?
				if ($rowy[9]=="")
				{
				}
				if ($rowy[9]=="0")
				{
				}
				else
				{
					echo "(ya esta)";
				}
			
			?>
			</TD>
            <td align="center"><a href="editarexamenes2.php?id=<? echo $row[0]; ?>">editar</a></td>
						             <?
										}              //fin del while de sub sub
									}              //fin del if sub sub
						}          //fin del while de subcateg
					}              //fin del if de subcateg
			}
			?>
          </tr>
      </table>
        <p class="Estilo2"></p>
        <p class="Estilo2"> </p>
        </p>

<table width="95%"  border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2F2F2">



<p class="Estilo2">
		<font size="4" color="#666666">agregar nuevo examen </font></p>
        <form id="form1" name="form1" method="post" action="agregarexamen.php">
          <br />
          <?
$result = mysql_query("SELECT camp0, codaula, aula, grado FROM aulagrado order by aula", $dbh);
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				$CodUsuario1 = $_SESSION['CodUsuario'];
				if ($nivelUsuario1 == 4)
				{
					$result = mysql_query("SELECT camp0, codaula, nomaula, codprofesor, nomprofesor FROM cursoaula WHERE codprofesor = '$CodUsuario1' order by grado, nomcurso, nomaula limit 0, 88", $dbh);
				}

?>
  Buscar aulas
  <select name="T6"  size="1" onchange="valida2();">
    <option value="" selected="selected">(Seleccione)
    <?
		while($row = mysql_fetch_array($result))
		{?>
    </option>
    <option value="<? echo $row["codaula"]?>"><? echo $row["nomaula"]?>
    <?
		}
		?>
    </option>
  </select>
  <br />
  <?
$result = mysql_query("SELECT camp0, curso, grado, codigo FROM cursos order by curso", $dbh);
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				$CodUsuario1 = $_SESSION['CodUsuario'];
				if ($nivelUsuario1 == 4)
				{
					$result = mysql_query("SELECT camp0, nomcurso, grado, codcurso, codaula, nomaula, codprofesor, nomprofesor, subcurso FROM cursoaula WHERE codprofesor = '$CodUsuario1' AND codaula = '$aula' order by grado, nomcurso, nomaula limit 0, 88", $dbh);
				}

?>
  Buscar curso
  <select name="T5"  size="1" onchange="valida2();">
    <option value="" selected="selected">(Seleccione)
    <?
		while($row = mysql_fetch_array($result))
		{?>
    </option>
    <option value="<? echo $row["codcurso"]?>"><? echo $row["nomcurso"]?>&nbsp;<? echo $row["subcurso"]?>&nbsp;<? echo $row["grado"]?>
    <?
		}
		?>
    </option>
  </select>
  <br />
  <?
$result = mysql_query("SELECT camp0, nombre, codigo FROM profesores order by nombre", $dbh);
?>
  profesor
  <input name="T4" type="hidden" value="<? echo $CodUsuario1 ?>" size="14" /><? echo $CodUsuario1 ?>
  <br />
  <?
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				$CodUsuario1 = $_SESSION['CodUsuario'];
?>
  nuevo examen
  <input name="examen" type="text" size="24" />
  <br />
  bimestre
  <input name="bim" type="text" value="1" size="3" />
  <br />
  orden
  <input name="orden" type="text" value="1" size="3" />
  primero apareceran los de orden mas bajo <br />
  <input type="submit" name="Submit" value="agregar a la lista de examenes" />
  <br />
        </form>	</td>
  </tr>
</table>      
      <p class="Estilo2">&nbsp;</p>
        <p><br />
</p>



  </div>
  </div>

<div class="pie">
        <? include ("pie.php"); ?>
</div>
</div>
</body>
</html>
