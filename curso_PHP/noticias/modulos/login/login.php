<?php
	require_once "config/bbdd.php";
	
	$user = $_POST['user'];
	$pass = sha1($_POST['pass']);
	$consulta = "select user, pass from usuarios where user = '$user' and pass = '$pass' limit 1";
	$query = mysql_query($consulta);
	if(mysql_fetch_row($query)):
		setcookie("user",$user,time()+36000);
		setcookie("loginTrue",md5($user.":".$pass),time()+36000);
		header("Location: index.php");
	else:
		setcookie("user","",time()-36000);
		setcookie("loginTrue","",time()-36000);
	
?>
		<script type="text/javascript" >
		alert("Nombre de usuaro o clave incorrecta");
		location.href="index.php";		
		</script>
<?php
	endif;
?>