<?php
echo "<h1>Mi archivo y sus propiedades</h1>";
foreach ($_FILES["fichero"] as $clave => $valor){
echo ( "$clave: $valor<br>");
}
?>