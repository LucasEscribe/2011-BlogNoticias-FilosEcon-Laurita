<?php
	$conn = mysql_connect("127.0.0.1", "root", "");
	$sdb = mysql_select_db("noticias", $conn);
	
	$user = $_POST['user'];
	$pass = sha1($_POST['pass']);
	$consulta = "select user, pass from usuarios where user = '$user' and pass = '$pass'";
	$query = mysql_query($consulta);
	if(mysql_fetch_row($query)):
		setcookie("user",$user,time()+36000);
		setcookie("loginTrue",md5($user.":".$pass),time()+36000);
		header("Location: index.php");
	else:
		setcookie("user","",time()-36000);
		setcookie("loginTrue","",time()-36000);
		header("Location: index.php");
	endif;
?>