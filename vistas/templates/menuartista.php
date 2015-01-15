
<?
	  $result = mysql_query("SELECT camp0, id1, nombre, descripcion, biografia, biografia, recomendacion, foto, estilo FROM cantantes WHERE camp0 = '$id' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
$varnombre = mysql_result($result, 0, 2 );   //
$vardescrip = mysql_result($result, 0, 3 );   //
$varbiografia = mysql_result($result, 0, 4 );   //
$vardisco = mysql_result($result, 0, 5 );   //
$varrecom = mysql_result($result, 0, 6 );   //
$varfoto = mysql_result($result, 0, 7 );   //
$varestilo = mysql_result($result, 0, 8 );   //
if ($varfoto=="")
{
	$varfoto = "logo-rock.jpg";
}
?>
    <span class="Titulo1"> <?php echo $varnombre; ?></span>

