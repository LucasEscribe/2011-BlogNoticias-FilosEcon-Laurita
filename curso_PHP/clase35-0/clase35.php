<?php
	class baseDeDatos {
		private $user = "root";
		private $pass = "";
		private $server = "127.0.0.1";
		
		function conectar() {
			$conn = mysql_connect($this->server, $this->user, $this->pass);
			if ($conn){
				echo "Se ha conectado";
			}else{
				echo "no se ha conectado";
			}
		}
	}
	class mysql extends baseDeDatos {
		function select_db() {
			$s = mysql_select_db("noticias");
			if(!$s) {
				echo "No existe la base de datos";
		}
	}
}
	$db = new baseDeDatos();
	$db-> conectar();
		
	$db2 = new mysql();
	$db2-> conectar();
	$db2-> select_db();

	
?>