<?php
$uno = array("juan","pepe","chino","loco","sole");
$dos = array("Nombre"=>"Loco","Edad"=>52,"Sexo"=>"mucho","Hijo"=>"no gracias","Casas"=>1001,);

print_r($uno);
echo "<br>";
sort($uno);
print_r($uno);
echo "<br>";

print_r($dos);
echo "<br>";
ksort($dos);
print_r($dos);

echo "<br>";
krsort($dos);
print_r($dos);
echo "<br>";

?> 