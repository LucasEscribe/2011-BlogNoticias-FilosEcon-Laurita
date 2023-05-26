<?php
function comprobar() {
	require_once "config/bbdd.php";

	$user = $_COOKIE['user'];
	$true = $_COOKIE['loginTrue'];
	$consulta = "select user, pass from usuarios where user = '$user' limit 1";
	$query = mysql_query($consulta);

	if($row = mysql_fetch_array($query)):
		if(md5($row['user'].":".$row['pass']) == $true):
			return TRUE;
		else:
			return FALSE;
		endif;
	else:
		setcookie("user","",time()-36000);
		setcookie("loginTrue","",time()-36000);
		
	endif;
}
?>