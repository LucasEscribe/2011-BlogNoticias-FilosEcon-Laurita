<html>
<head>
</head>
<body>
<?php

$vec[0]="luke";
$vec[1]="tiene";
$vec[2]=24;
$vec[3]="años";

$tiempo=array_pop($vec);
array_push($vec,"cumpleaños");
print_r($vec);
echo "<br>";
array_shift($vec);
array_unshift($vec,"Luquete");
print_r($vec);
echo "<br>".$tiempo;

?>
</body>
</html>