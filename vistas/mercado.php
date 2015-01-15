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
.Estilo4 {	color: #FF0000;
	font-size: 10pt;
	font-weight: bold;
}
.Estilo6 {	color: #FFFFFF;
	font-size: 10pt;
	font-weight: bold;
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
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="95%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top" bgcolor="#000000">
	  
	  
	  <table width="180" border="1" cellspacing="0" cellpadding="6">
      <?
$result = mysql_query("SELECT camp0, id1, nombre, descripcion, precio FROM mercado order by camp0  limit 0,15", $dbh);
		while($row = mysql_fetch_array($result))
		{
		  ?>
          <tr>
            <td align="center">
			<a href="mercado3.php?id=<?php	echo $row["id1"]; ?>">
			<span class="Estilo6"><?php	echo $row["nombre"]; ?></span>			</a>			</td>
          </tr>
          <?php
		}
		?>
      </table>	  </td>
      <td valign="top"><table width="600" border="0" cellpadding="0" cellspacing="2">
            <td>
			
<table width="600" border="1" cellspacing="0" cellpadding="8">


<?
$distrito=$_GET["distrito"];

	
$TAMANO_PAGINA = 18;
$inicio = 3;
$pagina=$_GET["pagina"];

if (!$pagina) { 
    $inicio = 0; 
    $pagina=1; 
    $pagina_i=1; 
    $pagina_f=10; 
    $pagina_ant=0; 
    $pagina_sig=2; 
} 
else { 
    $inicio = ($pagina - 1) * $TAMANO_PAGINA; 
    $pagina_i=$pagina - 5; 
    $pagina_f=$pagina + 5; 
    $pagina_ant=$pagina -1; 
    $pagina_sig=$pagina +1; 
} 

		$result = mysql_query("SELECT camp0, idcat, nombre, foto, precio FROM tienda order by camp0 DESC", $dbh);
$num_total_registros = mysql_num_rows($result); 
//print "num_total_registros";
//print $num_total_registros;

$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 

    if ($pagina_i < 0) { 
        $pagina_i=1; 
        $pagina_f=10; 
    } 
    if ($pagina_f > $total_paginas) { 
        $pagina_f=$total_paginas; 
    } 


$pagina_i1=$pagina_i - 1; 
$pagina_f1=$pagina_f + 1; 

		$result = mysql_query("SELECT camp0, idcat, nombre, foto, precio FROM tienda order by camp0 DESC  limit $inicio, $TAMANO_PAGINA", $dbh);

			$poss=0;
				while($row = mysql_fetch_array($result))
				{
					$poss = $poss + 1 ;
					if ($poss==4)
					{
						$poss = 1;
				?>
              <tr>
                <td align="center" valign="top">
				<?
					}
					Else
					{
					//$poss = 0;
					?>						</td>
						<td align="center" valign="top">
					<?
					}
					?>
					<div class="contentdiv">
					<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"">
					<img src="fotos/<? echo $row["foto"]; ?>" width="150" height="200" border="1" /></a>
					<br />
					<? echo $row[2]; ?> <br /><? echo $row[6]; ?>					</div> 				</td>
<? }?>	
            </table>			</td>
            </tr>
        </table>
	    </td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
