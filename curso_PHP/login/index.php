<?php
	$conn = mysql_connect("127.0.0.1", "root", "");
	$sdb = mysql_select_db("noticias", $conn);
	
	$consulta = "select user,pass from usuarios where user='".$_COOKIE['user']."' limit 1";
	$query = mysql_query($consulta);
	
	if($row= mysql_fetch_array($query)):
		if(md5($row['user'].":".$row["pass"])!=$_COOKIE['loginTrue']):
		exit("Usted no pertenece al sistema");
		endif;
	else:
		header("Location: login.html");
	endif;
?>
<h1>Bienvenido Administrador</h1>