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

	/**
	 * Unit test for the subtract method
	 *
	 * @see Calculator::subtract();
	 */
	function test_subtract() {
		$calculator = new Calculator();
		$this->assertEquals( 0, $calculator->subtract( 2, 2 ) );
		$this->assertEquals( -4, $calculator->subtract( -2, 2 ) );
		$this->assertEquals( 2.1, $calculator->subtract( 2.2, 0.1 ) );
		$this->assertEquals( 3.5, $calculator->subtract( 2, -1.5 ) );
	}
}
