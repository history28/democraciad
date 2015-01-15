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
        <td align="center">&nbsp;<a href="usuar1.php"><span class="menusub">USUARIOS</span></a></td>
          <td align="center">&nbsp;<a href="area1b.php"><span class="menusub">SALDOS</span></a></td>
          <td align="center">&nbsp;<a href="#"><span class="menusub">ADM USUARIOS</span></a></td>
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
				echo $unidpriva;
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
			$id1=$_POST["id1"];
			$tipo=$_POST["tipo"];
			$status=$_POST["status"];


			$strSQL = "INSERT INTO usuarios (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."id1, ";
			$strSQL = $strSQL ."tipo, ";
			$strSQL = $strSQL ."status ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$id1."', ";
			$strSQL = $strSQL ."'" .$tipo."', ";
			$strSQL = $strSQL ."'" .$status."' )";
			$result = mysql_query($strSQL);
			echo $strSQL;


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
