<?php

if(isset($_POST['nombre'])) {
	exit("Vacía");
}else{
	echo("Nombre:".$_POST['nombre']);
}
?>