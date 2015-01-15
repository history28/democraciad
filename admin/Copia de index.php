<? session_start();?>
<html><title>PASE FORO</title>
<body>
<?
$pass1=$_POST["pass1"];
$logeo=$_SESSION['logeado'];
if ($logeo != "si") {
	?>
	<form name="form1" method="post" action="index.php">
	  Password: <input name="pass1" type="password" value="4321">
	  <input type="submit" name="Submit" value="Enviar">
	</form>
	<?
	if ($pass1 != "4321") {
	   //print "----";
	   exit(); 
	} 
	else {
		$_SESSION['logeado']="si";
	} 
} 


	$_SESSION['idUsuario']= "0";
	$_SESSION['LoginUsuario']= "ADMIN";


?>
<script languaje="JavaScript">
location.href='vistas/inicio.php';
</script>
<p>&nbsp;</p>
    <p>&nbsp;</p>
</body>

</html>

