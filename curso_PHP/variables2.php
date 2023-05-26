<?php

Function test(){
	Static $count = 0;
	$count++;
	Echo $count;
		If ($count < 10){
			Test();
		}
	}

Test();
?>
