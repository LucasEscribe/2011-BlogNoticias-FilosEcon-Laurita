<?php
echo "<h1>Mi archivo y sus propiedades</h1>";
$archivo = $_FILES["fichero"];

if($archivo["type"]!= 'image/jpeg') {
	echo("El archivo no es JPG. Imposible subir.<br>");
}else{
	foreach ($_FILES["fichero"] as $clave => $valor){
		echo ( "$clave: $valor<br>");
	}
}
?>