<?php
echo 'primer ejemplou';

for ($X=1;;$X++){
	if($x>10){
		break;
	}
}

echo '/n/n segundo ejem';

$x=1;
for(;;){
	if($x>10){
		break;
	}
	echo $x;
	$x++;
}

echo '\n\n ultimo ejemplo';
for($x=1,$j=0; $x<=10; $j += $x, print $x, $x++);

?>