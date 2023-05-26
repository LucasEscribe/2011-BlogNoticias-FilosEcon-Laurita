<?php

$str ="5bar";
echo 'Antes de settype()'."\n";
echo gettype($str)."\n";

settype($str, "int");
echo 'Despues de settype'."\n";
echo gettype($str)."\n";
echo "<br>";
echo($str);
echo "<br>";

$bol =true;
echo 'Antes de settype()'."\n";
echo gettype($bol)."\n";

settype($bol, "int");
echo 'Despues de settype'."\n";
echo gettype($bol)."\n";
echo "<br>";
echo($bol);
echo "<br>";

$do =6.6;
echo 'Antes de settype()'."\n";
echo gettype($do)."\n";

settype($do, "int");
echo 'Despues de settype'."\n";
echo gettype($do)."\n";
echo "<br>";
echo($do);
echo "<br>";
echo "<br>";

var_dump($_SERVER);

?>