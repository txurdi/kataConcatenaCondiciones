<?php
include_once "kataConcatenaCondiciones.php";


class kataConcatenaCondicionesTest extends PHPUnit_Framework_TestCase {
	
    public function test_01()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','and',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A and B');
    }
 
}
?>