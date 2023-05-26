<?php
	include "config/bbdd.php";
	$nombre = $_POST['nombre'];
	$query = mysql_query("insert into clientes(nombre_apellido) values('nombre')");	
	$direccion = $_POST['dir'];
	$query = mysql_query("insert into clientes(direccion) values('direccion')");
	$edad = $_POST['edad'];
	$query = mysql_query("insert into clientes(edad) values('edad')");
	print("La carga del nuevo cliente se realizo correctamente");
?>