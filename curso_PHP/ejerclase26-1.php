<?php

$puestos = array(
array("AyN" =>"Julio De La Cruz","puesto"=>"CEO","Sueldo"=>"1000000"),
array("AyN" =>"Pepe Parada","puesto"=>"Presidente","Sueldo"=>"100000"),
array("AyN" =>"Carlos Decard","puesto"=>"Gerente","Sueldo"=>"10000"),
array("AyN" =>"Luis Chan","puesto"=>"Vendedor","Sueldo"=>"1000"),
array("AyN" =>"Juan Sartre","puesto"=>"Barrendero","Sueldo"=>"100"),
);

$empleado = 'Luis Chan';

switch($empleado){
	case $puestos[0][AyN]:
		echo("El sueldo de ".$empleado." es de $ 1000");
		break;

	}
?>