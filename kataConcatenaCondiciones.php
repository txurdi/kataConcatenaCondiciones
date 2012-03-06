<?php
class kataConcatenaCondiciones {
	private $cadena = '';

	public function __construct() {
		
	}

	public function concatena($cond_ant,$cond_int,$ar_datos) {
		$primera = true;
		foreach ($ar_datos as $key => $dato) {
			if ($primera){
				if($this->get_cadena()!=''){
					$this->cadena = '('.$this->get_cadena().') '.$cond_ant.' ';
				}
				if((count($ar_datos)>1) && ($cond_ant!='')) $this->cadena .='(';
				$this->cadena .= $ar_datos[$key];
				$primera = false;
			} else {
			$this->cadena .= ' '.$cond_int.' '.$ar_datos[$key];
			}
		}
		if((count($ar_datos)>1) && ($cond_ant!='')) $this->cadena .=')';
	}
	
	public function get_cadena() {
		return $this->cadena;
	}
	
}
?>