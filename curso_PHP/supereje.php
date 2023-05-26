<?php
$empleados = array(
array("AyN" =>"Julio De La Cruz","Direccion"=>"Calle123 1000","Tel o Cel"=>11111,"email"=>"jdlc@hot.com","puesto"=>"CEO","Sueldo"=>"1000000"),
array("AyN" =>"Pepe Parada","Direccion"=>"Calle234 1000","Tel o Cel"=>22222,"email"=>"pppp@hot.com","puesto"=>"Presidente","Sueldo"=>"100000"),
array("AyN" =>"Carlos Decard","Direccion"=>"Calle345 1000","Tel o Cel"=>33333,"email"=>"ccdc@hot.com","puesto"=>"Gerente","Sueldo"=>"10000"),
array("AyN" =>"Luis Chan","Direccion"=>"Calle567 1000","Tel o Cel"=>44444,"email"=>"lchan@hot.com","puesto"=>"Vendedor","Sueldo"=>"1000"),
array("AyN" =>"Juan Sartre","Direccion"=>"Calle789 1000","Tel o Cel"=>55555,"email"=>"jsartre@hot.com","puesto"=>"Barrendero","Sueldo"=>"100"),
);

sort($empleados);

echo ("<table border='2' cellpadding='2' cellspacing='0' >");
echo ("<tr>");
echo ("<th>Nombre y Apellido</th>");
echo ("<th>Direccion</th>");
echo ("<th>Tel o Cel</th>");
echo ("<th>email</th>");
echo ("<th>Puesto</th>");
echo ("<th>Sueldo</th>");
echo ("</tr>");

$cont=0;
$cant=count($empleados);
while ($cont<=$cant){
echo ("<tr>");
echo ("<td>".$empleados[$cont]["AyN"]."</td>");
echo ("<td>".$empleados[$cont]["Direccion"]."</td>");
echo ("<td>".$empleados[$cont]["Tel o Cel"]."</td>");
echo ("<td>".$empleados[$cont]["email"]."</td>");
echo ("<td>".$empleados[$cont]["puesto"]."</td>");
echo ("<td>".$empleados[$cont]["Sueldo"]."</td>");
echo ("</tr>");
$cont++;
}
echo ("</table>");
?>