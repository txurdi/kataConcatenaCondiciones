<?php
include_once "kataConcatenaCondiciones.php";


class kataConcatenaCondicionesTest extends PHPUnit_Framework_TestCase {
	
    public function test_01()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','and',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A and B');
    }
    public function test_02()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','and',array('A','B','C'));
        $this->assertEquals($obj->get_cadena(), 'A and B and C');
    }
	public function test_03()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','or',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A or B');
		$obj->concatena('and','',array('C'));
        $this->assertEquals($obj->get_cadena(), '(A or B) and C');
    }
}
?>