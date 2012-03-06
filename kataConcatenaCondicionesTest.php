<?php
include_once "kataConcatenaCondiciones.php";


class kataConcatenaCondicionesTest extends PHPUnit_Framework_TestCase {
	
    public function test_1()
    {
		$obj = new kataConcatenaCondiciones();
        $this->assertEquals($resultado, $obj->concatena());
    }
 
}
?>