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
	
		echo $this->nombre;
		echo $this->apellido;
		echo $this->dni;
	}
}

$obj = new persona("lu","me","32");
$obj -> imprimir();
$obj2 = new persona ("ca","be","33");
$obj2 -> imprimir();
?>