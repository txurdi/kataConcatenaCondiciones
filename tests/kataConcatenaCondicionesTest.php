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
	public function test_04()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','or',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A or B');
		$obj->concatena('and','or',array('C','D'));
        $this->assertEquals($obj->get_cadena(), '(A or B) and (C or D)');
    }
	public function test_05()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','or',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A or B');
		$obj->concatena('and','or',array('C','D'));
        $this->assertEquals($obj->get_cadena(), '(A or B) and (C or D)');
		$obj->concatena('or','',array('E'));
        $this->assertEquals($obj->get_cadena(), '((A or B) and (C or D)) or E');
    }
	public function test_06()
    {
		$obj = new kataConcatenaCondiciones();
		$obj->concatena('','or',array('A','B'));
        $this->assertEquals($obj->get_cadena(), 'A or B');
		$obj->concatena('and','',array('C'));
        $this->assertEquals($obj->get_cadena(), '(A or B) and C');
		$obj->concatena('or','or',array('E','F'));
        $this->assertEquals($obj->get_cadena(), '((A or B) and C) or (E or F)');
		$obj->concatena('and','or',array('G','H','I'));
        $this->assertEquals($obj->get_cadena(), '(((A or B) and C) or (E or F)) and (G or H or I)');
    }
}
?>