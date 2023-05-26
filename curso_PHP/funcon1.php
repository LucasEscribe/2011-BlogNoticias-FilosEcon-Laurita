<?php
function cafes($tipo1,$tipo2) {
	echo "mi cafe es ".$tipo1."<br>";
	echo "mi cafe es ".$tipo2."<br>";
	}
function cafe($tipo) {
	echo "mi cafe es ".$tipo;
	}
	
	$a="negro";
	$b="blanco";
	
	cafe("criollo");
	cafe("vienes");
	cafes($a,$b);
	
?>