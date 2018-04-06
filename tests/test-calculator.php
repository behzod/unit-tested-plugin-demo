<?php
/**
 * Unit tests for the Calculator class.
 *
 * @package Unit_Tested_Plugin_Demo
 */

use \Unit_Tested_Plugin_Demo\Calculator;

/**
 * Class Test_Calculator.
 */
class Test_Calculator extends WP_UnitTestCase {
	/**
	 * Unit test for the add method
	 *
	 * @see Calculator::add();
	 */
	function test_add() {
		$calculator = new Calculator();
		$this->assertEquals( 4, $calculator->add( 2, 2 ) );
		$this->assertEquals( 0, $calculator->add( -2, 2 ) );
		$this->assertEquals( 4.4, $calculator->add( 2.2, 2.2 ) );
		$this->assertEquals( 0.5, $calculator->add( 2, -1.5 ) );
	}
}
