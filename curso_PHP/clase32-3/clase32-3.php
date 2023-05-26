<?php
$manejador = fopen("formulario.txt", "r");
$manejados = fopen("formulario.html", "w+");
$contenido = fread($manejador, filesize("formulario.txt"));
$contento = fwrite($manejados,$contenido);
fclose($manejador);
fclose($manejados);
?>