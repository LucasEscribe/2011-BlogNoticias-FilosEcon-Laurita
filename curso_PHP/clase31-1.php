<?php
echo "<pre>";
echo $a="hola mi gente\n";
echo $b="\tQue se cuenta de nuevo :)";
echo $c="\t\tBueno me voy\x0D";
echo "chaucha";
echo "<br>-----------------------------------<br>";
//aplico las funciones
echo rtrim($a);
echo ltrim($b,"\t");
echo trim($c,"\x00..\x1F");
echo "chaucha";
echo "</pre>";
echo ord("A");
echo "<br>"; 	
echo chr(240);
print "<br>";
echo ucwords($a);

?>