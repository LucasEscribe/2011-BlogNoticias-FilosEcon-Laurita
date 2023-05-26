<?php
$a=1;
$b=2;

function suma(){
		global $a;
		global $b;
		$b= $a+$b;
		}
		suma();
		echo $b;
function suma2(){
		static $a;
		static $b;
		$b= $a+$b;
		}
		suma2();
		echo $b;
?>