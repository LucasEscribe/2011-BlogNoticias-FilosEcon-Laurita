<html>
<head>
</head>
<body>
<?php
$a=3;

if (isset($a)){
echo("la variable no est� vac�a");
}else{
echo("la variable est� vac�a");
}
$a=null;
echo "<br>";
if (is_null($a)){
echo("Nulo");
}
echo "<br>";
define("pi","3,14");
echo "Pi Vale ".pi;
?>
</body>
</html>

