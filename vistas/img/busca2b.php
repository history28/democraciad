<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Google</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?
$busca1=$_GET["q"];
//$busca1="lima";
$pasa="";
if (eregi("=", $busca1)) {
  $pasa="n";
} 
if (eregi("<", $busca1)) {
  $pasa="n";
} 


if ($pasa == "n") {
    print "----";
	$busca1="--------";
    exit(); 
} 





$pag = "http://www.google.com.pe/search?q=".$busca1."+site%3Awww.perudebates.com"."&hl=es&btnG=B%FAsqueda+Google";

		$fecha1 = getdate();
		$fecha2 =  date("j-n-Y");
		$dia1 = $fecha1["wday"];


$hora = getdate(time());
$hora2 =  $hora["hours"] . ":" . $hora["minutes"] . ":" . $hora["seconds"] ; 

$ip = $REMOTE_ADDR;
$parte = (substr($ip,0,5));  //imprime dr
//$dbh=mysql_connect ("localhost", "netespin_elmer3", "2805") or die ('I cannot connect to the database because: ' . mysql_error());
//mysql_select_db ("netespin_data4"); 

	$dbh=mysql_connect ("localhost", "netespin_elmer3", "2805") or die ('I cannot connect to the database because: ' . mysql_error());
	mysql_select_db ("netespin_zonas"); 


//$sql = "INSERT INTO ippaises2(camp0, ip, ip1, pais, fecha, hora, palabra)";
//$sql .= "VALUES ('', '$ip', '$parte', '$pais', '$fecha2', '$hora2', '$busca1')";
//$result = mysql_query($sql);

	$busca2="en_Perudebates: ".$busca1;
	$fecha1 =  date("j-n-Y");
	$sql = "INSERT INTO taringabus(camp0, tema, fecha, tipo)";
	$sql .= "VALUES ('', '$busca2', '$fecha1', 'PER')";
	$result = mysql_query($sql);

echo $pag;


?>
<body onLoad = "parent.location = '<? echo $pag; ?>'">

<!--iframe src='<? echo $pag; ?>' width="1024" marginwidth="0" height="1800" align="center" scrolling="no" frameborder="0"></iframe-->

</body>
</html>
