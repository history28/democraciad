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
			$unidpriva=$_POST["unidpriva"];
			$nombre1=$_POST["nombre1"];
			$nombre2=$_POST["nombre2"];
			$apellido1=$_POST["apellido1"];
			$apellido2=$_POST["apellido2"];
			$email1=$_POST["email1"];
			$email2=$_POST["email2"];
			$pass1=$_POST["pass1"];
			$pass2=$_POST["pass2"];


			$strSQL = "UPDATE usuarios SET ";
			$strSQL = $strSQL ."nombre='" .$nombre1."'";
			$strSQL = $strSQL .", nombre2='" .$nombre2."'";
			$strSQL = $strSQL .", apellido='" .$apellido1."'";
			$strSQL = $strSQL .", apellido2='" .$apellido2."'";
			$strSQL = $strSQL .", email='" .$email1."'";
			$strSQL = $strSQL .", email2='" .$email2."'";
			$strSQL = $strSQL .", pass='" .$pass1."'";
			$strSQL = $strSQL .", pass2='" .$pass2."'";
			$strSQL = $strSQL ." WHERE id1='"  .$unidpriva."' ";
			$query2=MySQL_query($strSQL);
echo $strSQL;





			if ($unidpriva!="")
			{

				$result = mysql_query("SELECT camp0, id1, tipo, nombre, apellido, email, pass, direccion, nombre2, apellido2, email2, pass2, direccion2 FROM usuarios WHERE id1 = '$unidpriva' order by id1 limit 0,15", $dbh);
  				$varnombre = mysql_result($result, 0, 3 );   //
  				$varapellido = mysql_result($result, 0, 4 );   //
  				$varemail = mysql_result($result, 0, 5 );   //
  				$varpass = mysql_result($result, 0, 6 );   //
  				$vardireccion = mysql_result($result, 0, 7 );   //

  				$varnombre2 = mysql_result($result, 0, 8 );   //
  				$varapellido2 = mysql_result($result, 0, 9 );   //
  				$varemail2 = mysql_result($result, 0, 10 );   //
  				$varpass2 = mysql_result($result, 0, 11 );   //
  				$vardireccion2 = mysql_result($result, 0, 12 );   //

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
				  <td>
					<form id="form2" name="form2" method="post" action="usuar1modif.php">
				  <table width="700" border="0" cellpadding="4" cellspacing="1">
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td><strong>Residente</strong></td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td><strong>Propietario</strong></td>
                    </tr>
                    <tr>
                      <td align="left"><strong>Nombre:</strong></td>
                      <td align="left">
                        <input name="nombre1" type="text" value="<?php echo $varnombre; ?>" />
                      </td>
                      <td>&nbsp;</td>
                      <td align="left"><strong>Nombre:</strong></td>
                      <td align="left">
					  <input type="text" name="nombre2" value="<?php echo $varnombre2; ?>" />
					  </td>
                    </tr>
                    <tr>
                      <td align="left"><strong>Apellido:</strong></td>
                      <td align="left">
					  <input type="text" name="apellido1" value="<?php echo $varapellido; ?>" />
					  </td>
                      <td>&nbsp;</td>
                      <td align="left"><strong>Apellido:</strong></td>
                      <td align="left">
					  <input type="text" name="apellido2" value="<?php echo $varapellido2; ?>" />
					  </td>
                    </tr>
                    <tr>
                      <td align="left"><strong>Email:</strong></td>
                      <td align="left">
					  <input type="text" name="email1" value="<?php echo $varemail; ?>" />
					  </td>
                      <td>&nbsp;</td>
                      <td align="left"><strong>Email:</strong></td>
                      <td align="left">
					  <input type="text" name="email2" value="<?php echo $varemail2; ?>" />
					  </td>
                    </tr>
                    <tr>
                      <td align="left"><strong>Password:</strong></td>
                      <td align="left">
					  <input type="text" name="pass1" value="<?php echo $varpass; ?>" />
					  </td>
                      <td>&nbsp;</td>
                      <td align="left"><strong>Password:</strong></td>
                      <td align="left">
					  <input type="text" name="pass2" value="<?php echo $varpass2; ?>" />
					  </td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left"><label>
                        <input type="submit" name="Submit2" value="Enviar" />
                      </label></td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                  </table>
                  </form>
				  </td>
				</tr>
			  </table>
		  	<?
			}
			Else
			{
		  	?>
		  	<?
			}
		  	?>
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
