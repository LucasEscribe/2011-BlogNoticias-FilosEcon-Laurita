<?php
$v1=array("luke","loco","pepe");
$n = array("nombre" => $v1);
$v2=array(123,555,846);
$t = array("tel" => $v2);
$v3=array("luke@hot.com","loco@hot.com","pepe@hot.com");
$e = array("mail" => $v3);
foreach($n as $k => $v1){
	echo $k."<br>";
	foreach($t as $v2){
		echo $v2."<br>";
		foreach($e as $v3){
			echo $v3."<br>";
		}
	}	
}
?>