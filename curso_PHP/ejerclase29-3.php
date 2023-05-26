<?php
$empleados = array(
array("AyN" =>"Julio De La Cruz","Direccion"=>"Calle123 1000","Tel o Cel"=>11111,"email"=>"jdlc@hot.com","puesto"=>"CEO","Sueldo"=>"1000000"),
array("AyN" =>"Pepe Parada","Direccion"=>"Calle234 1000","Tel o Cel"=>22222,"email"=>"pppp@hot.com","puesto"=>"Presidente","Sueldo"=>"100000"),
array("AyN" =>"Carlos Decard","Direccion"=>"Calle345 1000","Tel o Cel"=>33333,"email"=>"ccdc@hot.com","puesto"=>"Gerente","Sueldo"=>"10000"),
array("AyN" =>"Luis Chan","Direccion"=>"Calle567 1000","Tel o Cel"=>44444,"email"=>"lchan@hot.com","puesto"=>"Vendedor","Sueldo"=>"1000"),
array("AyN" =>"Juan Sartre","Direccion"=>"Calle789 1000","Tel o Cel"=>55555,"email"=>"jsartre@hot.com","puesto"=>"Barrendero","Sueldo"=>"100"),
);

$nombre = $_GET ['nombre'];
$cant = count($empleados);
$bole = false;

for($varCont=0;$varCont<$cant;$varCont++) {
	if($empleados[$varCont]["AyN"] == $nombre){
			echo ("Encontrado <br>");
			echo("Nombre: ".$empleados[$varCont]["AyN"]."<br>");
			echo("Direccion: ".$empleados[$varCont]["Direccion"]."<br>");
			echo("Tel: ".$empleados[$varCont]["Tel o Cel"]."<br>");
			echo("Correo: ".$empleados[$varCont]["email"]."<br>");
			echo("Cargo: ".$empleados[$varCont]["puesto"]."<br>");
			echo("Sueldo: $".$empleados[$varCont]["Sueldo"]."<br>");
			$bole = true;
	}
}
if($bole==false){
	echo ("Empleado no encontrado <br>");
	}
?>