<?php
$busqueda = $_GET['busca'];
$not = array("<", ">", "(", ")", ";", "\"", "\'");
$modif = str_replace($not, " ", $busqueda, $count);
echo "Su busqueda es: ".$modif."<br>";
echo $count;
?>