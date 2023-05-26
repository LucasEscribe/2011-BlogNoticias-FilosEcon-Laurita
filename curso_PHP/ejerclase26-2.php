<?php

$a = 5;
$b = 3;
$calc = "div";

switch($calc){
	case 'suma':
		$res = $a + $b;
		echo("la suma da ".$res);
		break;
	case 'resta':
		$res = $a - $b;
		echo("la resta da ".$res);
		break;
	case 'mult':
		$res = $a * $b;
		echo("la multiplicacion da ".$res);
		break;
	case 'div':
		$res = $a / $b;
		echo("la divicion da ".substr($res,0,4));
		break;

	}
?>