<html>
<head>
</head>
<body>
<?php

$vec[0]="luke";
$vec[1]="tiene";
$vec[2]=24;
$vec[3]="a�os";

$tiempo=array_pop($vec);
array_push($vec,"cumplea�os");
print_r($vec);
echo "<br>";
array_shift($vec);
array_unshift($vec,"Luquete");
print_r($vec);
echo "<br>".$tiempo;

?>
</body>
</html>