<?php
class kataConcatenaCondiciones {
	private $cadena = '';

	public function __construct() {
		
	}

	public function concatena($cond_ant,$cond_int,$ar_datos) {
		$primera = true;
		foreach ($ar_datos as $key => $dato) {
			if ($primera){
				if($this->get_cadena()==''){
					$this->cadena .= $ar_datos[$key];
				} else {
					$this->cadena = '('.$this->get_cadena().') '.$cond_ant.' '.$ar_datos[$key];
				}
				$primera = false;
			} else {
			$this->cadena .= ' '.$cond_int.' '.$ar_datos[$key];
			}
		}
	}
	
	public function get_cadena() {
		return $this->cadena;
	}
	
}
?>