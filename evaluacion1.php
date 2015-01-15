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
.Estilo3 {
	font-size: 14px;
	font-weight: bold;
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
              <h2>Calificaciones : </h2>
			<div id="atras">
				<a href="javascript:history.back()">
				<img src="imagenes1/atras.png" alt=atras border="0"></a>
			</div>		
		</div>		



<?php
include("connec.php");
$codaulaa=$_GET["codaulaa"];
$_SESSION['CodAula'] = $codaulaa;
?>


			  <?
				$LoginUsuario1 = $_SESSION['LoginUsuario'];
				$nivelUsuario1 = $_SESSION['nivelUsuario'];
				$CodUsuario1 = $_SESSION['CodUsuario'];
				print "LoginUsuario " . $LoginUsuario1;
				print "<br>CodUsuario1 " . $CodUsuario1;
				?>

</span>        </p>
		<p class="Estilo3">aula: <? echo $codaulaa; ?></p>
		<p>&nbsp;</p>
<table width="600" border="0" cellspacing="0" cellpadding="5">
          <tr bgcolor="#333333">
            <td align="center"><font color="#FFFFFF">Grado</font></td>
            <td align="center"> <font color="#FFFFFF">Curso</font></td>
            <td align="center"><font color="#FFFFFF">Aula</font></td>
            <td align="center"><font color="#FFFFFF">Ver Notas</font></td>
            <td align="center"><font color="#FFFFFF">Editar Parciales</font> </td>
      </tr>
          <?
	$cuenta = 0;
//	$result = mysql_query("SELECT camp0, nomcurso, grado, codcurso, codaula, nomaula, codprofesor, nomprofesor FROM cursoaula order by grado, nomcurso, nomaula limit 0, 88", $dbh);
				$CodUsuario1 = $_SESSION['CodUsuario'];
				$result = mysql_query("SELECT camp0, nomcurso, grado, codcurso, codaula, nomaula, codprofesor, nomprofesor, subcurso FROM cursoaula  order by grado, nomcurso, nomaula limit 0, 88", $dbh);



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
            <td height="28" align="center">&nbsp;<? echo $row[2]; ?></td>
            <td align="center">&nbsp;<? echo $row[1]; ?>&nbsp;&nbsp;<? echo $row[8]; ?></td>
            <td align="center">&nbsp;<a href="prof1.php?codaulaa=<? echo $row[4]; ?>"><? echo $row[5]; ?></a></td>
            <td align="center"><a href="vernotasprom1x.php?aula=<? echo $row[4]; ?>&amp;curprom=<? echo $row[3]; ?>">ver</a></td>
            <td align="center"><a href="editarexamenesx.php?aula=<? echo $row[4]; ?>&amp;cur=<? echo $row[3]; ?>">editar</a></td>
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
          </tr>
    </table>
	<p><br />
	  &nbsp;
        <a href="poneruno.php" target="_blank">EXAMENES	poner todos editado = 0	</a></p>
        <p>
		&nbsp;
		<a href="ponerdos.php" target="_blank">EXAMENES	poner todos peso = 2 </a></p>
        <p><a href="evaluacion.php"></a></p>
        <p>&nbsp; </p>
  </div>
  </div>


<div class="pie">
        <? include ("pie.php"); ?>
</div>
</div>
</body>
</html>
