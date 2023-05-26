<?php
function cuadrado ($numero) {
$numero = $numero*$numero;
echo ("en la funcion el numero se eleva al cuadrado, obteniendo el resultado:$numero<br>");
}
$numero = 3;
echo ("el numero antes de invocar la funcion vale: $numero<br>");
cuadrado($numero);
echo ("el numero despues de invocar la funcion vale: $numero");

function cuadradoref (&$numero) {
$numero = $numero*$numero;
echo ("en la funcion el numero se eleva al cuadrado, obteniendo el resultado:
$numero<br>");
}
$numero = 3;
echo ("el numero antes de invocar la funcion vale: $numero<br>");
cuadradoref($numero);
echo ("el numero despues de invocar la funcion vale: $numero");

?>