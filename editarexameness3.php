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
.Estilo2 {font-size: 14px}
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
body,td,th {
	color: #333333;
	font-size: 12px;
}
.Estilo5 {
	font-size: 14px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body>

<div class="contenedor">
<div class="cabezera">
<div class="cabezera1">
        <? include ("menuu.php"); ?>
  </div>
  </div>

<div class="cuerpo">
	<div id="matricula">
			  <?
				$LoginUsuario1 = $_SESSION['LoginUsuario'];
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				//print "LoginUsuario " . $LoginUsuario1;
				if ($nivelUsuario1 != 4)
				{
					//print "<BR><BR>NO TIENE EL NIVEL DE ACCESO PARA ENTRAR A ESTA PAGINA ";
				    //exit(); 
				}

				?>

		<div id="cabecera-formulario">
			<br />
			<h4>LISTA DE EVALUACIONES </h4>
			<div id="atras">
				<a href="javascript:history.back()">
				<img src="imagenes1/atras.png" alt=atras border="0"></a>
			</div>		
		</div>		

		<p><span class="Estilo2">
<?php
include("connec.php");
  
$cur=$_GET["cur"];
$aula=$_GET["aula"];
$examen=$_GET["examen"];
$exam=$_GET["exam"];
$bim=$_GET["bim"];



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
  $codcur = "COMU1P";  //mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
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
?>
<h2>
<?
echo "Curso: ".$nomcur;
echo "<br>Sub Curso: ".$nomsubcur;
echo "<br>Aula: ".$nomcompletoaula;
//echo "<br>Bimestre: ".$bim;
echo "<br>";

?>
</h2>
</span>
</p>
<?
//	$result = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, bimestre FROM cur2_prof WHERE i1 = '0'  AND codcurso = '$cur' order by bimestre, categ limit 0, 88", $dbh);
	$result = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, bimestre FROM cur2_prof  order by bimestre, categ limit 0, 88", $dbh);

$filas = mysql_num_rows($result);
if ($filas=="")
{
  print "no existen registros";
  //exit();
}
Else
{
  $result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   
}

?>
				<table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999">
          <?
	$cuenta = 0;
	$result = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso, bimestre FROM cur2_prof WHERE i1 = '0'  order by bimestre, categ limit 0, 88", $dbh);
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
            <td align="left" colspan="3"><span class="Estilo2">
			Bim:<? echo $row[9]; ?>&nbsp; <? echo $row[1]; ?>&nbsp; (Peso: <? echo $row[8]; ?>)
              <?  //examenes
					$var1 = $row[0];
				
					$varex = $row[0];
					$resultex = mysql_query("SELECT camp0, examen, codcurso, nomcurso, grado, peso, orden FROM examenes_predef WHERE idcateg = '$varex' order by examen limit 0, 88", $dbh);
					$filas = mysql_num_rows($resultex);
					if ($filas!="")
					{ ?>
                  <?
						while ($rowex = mysql_fetch_row($resultex)){
							echo "<br>- Examen -".$rowex[1];
						}
					}
					?>
            </span></td>
          </tr>
          <?  //subcategorias
						$resultx = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2_prof WHERE i1 = '$var1' AND i2 = '0' order by categ limit 0, 88", $dbh);
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
									$resultex = mysql_query("SELECT camp0, examen FROM examenes_predef WHERE idcateg = '$varex' order by examen limit 0, 88", $dbh);
									$filas = mysql_num_rows($resultex);
									if ($filas!="")
									{ ?>
                  <?
										while ($rowex = mysql_fetch_row($resultex)){
											echo "<br>- Examen -".$rowex[1];
										}
									}
									?>
              &nbsp; (Peso: <? echo $rowx[8]; ?>) </span></td>
            <?
									// sub sub categorias
									$var2 = $rowx[0];
									$resulty = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2_prof WHERE i2 = '$var2' AND i3 = '0' order by categ limit 0, 88", $dbh);
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
												$resultex = mysql_query("SELECT camp0, examen FROM examenes_predef WHERE idcateg = '$varex' order by examen limit 0, 88", $dbh);
												$filas = mysql_num_rows($resultex);
												if ($filas!="")
												{ ?>
                  <?
													while ($rowex = mysql_fetch_row($resultex)){
														echo "<br>- Examen -".$rowex[1];
													}
												}
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


      <span class="Estilo5">&nbsp;Notas </span>
      <p class="Estilo2"> </p>
        </p>

<table width="95%"  border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2F2F2"><p class="Estilo2">&nbsp;</p>
        </td>
  </tr>
</table>      
      <p class="Estilo2"><a href="javascript:history.back()">Volver Atrás</a></p>
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
