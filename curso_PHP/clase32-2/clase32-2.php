<?php
$gestor = fopen("Juego boludo.txt", "r");
$contenido = fread($gestor, filesize("Juego boludo.txt"));
print $contenido;
fclose($gestor);
?>