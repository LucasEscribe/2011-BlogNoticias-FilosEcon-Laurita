<?php
Function hacercafe($tipo = "capuchino"){
return "Hacer una taza de $tipo.<br>";
}
echo hacercafe();
echo hacercafe(null);
echo hacercafe("espresso");
?>