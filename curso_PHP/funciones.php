<html>
<head>
</head>
<body>
<?php
$a=3;

if (isset($a)){
echo("la variable no está vacía");
}else{
echo("la variable está vacía");
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

