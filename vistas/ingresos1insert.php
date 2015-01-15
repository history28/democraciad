<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantilla.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 14pt}
-->
</style>
</head>

<body>
<div class="contenedor">
<div class="cabezera">
	  <?
	  include("templates/header.php");
	  ?>
</div>
<div class="cuerpo">
<div class="cuerpoi">
  <br />
  <?
  include("templates/derecha.php");
  ?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="cuerpoc">
  <p>
		
    <table width="400" border="0" cellpadding="4" cellspacing="0">
      <tr>
        <td align="center">&nbsp;<a href="ingresos1.php"><span class="menusub">INGRESOS CUOTAS</span></a></td>
        <td align="center">&nbsp;<a href="area1b.php"><span class="menusub">INGRESOS EXTRA</span></a></td>
        <td align="center">&nbsp;<a href="#"><span class="menusub">FACTURAR INGRESOS</span></a></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
    <div id="subcontent"></p>
      <table width="700" border="0" cellspacing="0">
        <tr>
          <td><table width="400" border="0">
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="right"><span class="Estilo1">Unidad privativa:</span> </td>
              <td>
			  	<?
				$unidpriva=$_POST["unidpriva"];
				//echo $unidpriva;
			  	?>
                  <form id="form1" name="form1" method="post" action="usuar1.php">
                    <select name="unidpriva">
					<?
  					include("../models/connec.php");
					$result = mysql_query("SELECT camp0, id1, nombre, tipo FROM usuarios order by camp0 DESC limit 0,15", $dbh);
					while($row = mysql_fetch_array($result))
					{
					?>
                      <option value="<?php echo $row["camp0"]; ?>">
					  <?php echo $row["id1"]; ?> - <?php echo $row["tipo"]; ?></option>
       	 			<?php
					}
					?>
					<option value="" selected="selected">ninguno</option>
                    </select>

                    <input type="submit" name="Submit" value="Enviar" />
                  </form></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;
		  	<?
			$unidpriva=$_POST["unidpriva"];
			$accion=$_POST["accion"];
			$formapago=$_POST["formapago"];
			$cantidad=$_POST["cantidad"];
			$nrorecibo=$_POST["nrorecibo"];
			$fecha=$_POST["fecha"];


			$strSQL = "INSERT INTO pagos (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."idusu, ";
			$strSQL = $strSQL ."concepto, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."categoria, ";
			$strSQL = $strSQL ."formapago, ";
			$strSQL = $strSQL ."cantidad ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$unidpriva."', ";
			$strSQL = $strSQL ."'" .$accion."', ";
			$strSQL = $strSQL ."'" .$fecha."', ";
			$strSQL = $strSQL ."'" .$accion."', ";
			$strSQL = $strSQL ."'" .$formapago."', ";
			$strSQL = $strSQL ."'" .$cantidad."' )";
			$result = mysql_query($strSQL);
			//echo $strSQL;
			echo "EL PAGO HA SIDO REGISTRADO";


		  	?>
			  <table width="700" border="1" cellpadding="0" cellspacing="0">
				<tr>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>
				  </td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				</tr>
			  </table>
		  </td>
        </tr>
      </table>
      <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </div>
</div>
</div>

</body>
</html>
