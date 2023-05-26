<?php
class persona{
	public $nombre;
	private $apellido;
	protected $dni;
	
	function __construct($n,$a,$d){	
		$this-> nombre = $n;
		$this-> apellido = $a;
		$this-> dni = $d;
		}
		
	function __destruct() {
		echo "Chau";
		}
		
	public function imprimir() {
	
		echo $this->nombre."<br>";
		echo $this->apellido."<br>";
		echo $this->dni."<br>";
	}
}

class empleado extends persona{
	private $puesto;
	private $sueldo;

	function alta($p,$s) {
		$this->puesto = $p;
		$this->sueldo = $s;
	}
	function mostrar(){
		echo $this->puesto."<br>";
		echo $this->sueldo."<br>";
		}	
}
	$e1 = new empleado("capo","capon","32322223");
	$e1 -> alta ("contador","100");
	$e1 -> imprimir();
	$e1 -> mostrar();
?>