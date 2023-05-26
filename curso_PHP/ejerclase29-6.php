<?php
echo "<h1>Mi archivo y sus propiedades</h1>";
$archivo = $_FILES["fichero"];

if(($archivo["size"] > 1048576 && filesize($archivo["tmp_name"]) > 1048576)|| ($archivo["error"] == UPLOAD_ERR_FORM_SIZE)) {
	exit ("el fichero es muy grande. Imposible subir");
}else{
	foreach ($_FILES["fichero"] as $clave => $valor){
		echo ( "$clave: $valor<br>");
	}
}
?>