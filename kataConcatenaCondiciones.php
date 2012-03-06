<?php
class kataConcatenaCondiciones {
	private $cadena = '';

	public function __construct() {
		
	}

	public function concatena($cond_ant,$cond_int,$ar_datos) {
		$this->cadena = $ar_datos[0].' '.$cond_int.' '.$ar_datos[1];
	}
	
	public function get_cadena() {
		return $this->cadena;
	}
	
}
?>