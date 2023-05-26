<?php
	class bbdd{
		protected $user = "root";
		protected $pass = "";
		protected $server = "127.0.0.1";		
		public $conn;
	}
		
	class mysql extends bbdd{
		function conectar() {
			$this->conn = mysql_connect ($this->server, $this->user, $this->pass);
	
	if($this->conn) {
		echo "Se conecto";
	}else{
		echo "No se conecto";
		}
	}
}

	class postgre extends bbdd{
		function conectar() {
			$this->conn = pg_connect ("host=$this->server user=$this->user password=$this->pass");/*user es el de el postgre o user si es el mismo de mysql*/
	
	if($this->conn) {
		echo "Se conecto a postgre";
	}else{
		echo "No se conecto a postgre";
		}
	}
}

$db1 = new mysql();
$db1 -> conectar();

$db2 = new postgre();
$db2 -> conectar();
?>