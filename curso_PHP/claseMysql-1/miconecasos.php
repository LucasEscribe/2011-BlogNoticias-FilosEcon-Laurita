<?php
$conn = mysql_connect("127.0.0.1","root","");
	if(!$conn){
		die("No se pudo conectar por: ".mysql_error());
	}
$selectDB = mysql_select_db("libreria",$conn);
	If(!$selectDB){
		die("No se pudo seleccionar la base de datos por: ".mysql_error());
	}
$query = mysql_query("select * from clientes",$conn);
while($row = mysql_fetch_array($query,MYSQL_ASSOC)) {
	echo $row["nombre_apellido"]. "	|	".$row["direccion"]. "	|	".$row["edad"];
	echo "<br>";
	}
?>