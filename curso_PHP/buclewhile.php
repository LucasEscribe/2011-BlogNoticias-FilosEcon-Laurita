<?php

$ciudades= array ("madrid", "barcelona", "londres","new york", "los angeles","chicago");
$ciudad= " ";
$indice=0;

while ($ciudad != "londres"){
	$ciudad=$ciudades [$indice];
	echo ($ciudad."<br>");
	$indice++;
}

echo ("final de la ejecucion");

?>