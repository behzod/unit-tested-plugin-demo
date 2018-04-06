<?php
/**
 * Calculator class.
 *
 * @package Unit_Tested_Plugin_Demo
 */

namespace Unit_Tested_Plugin_Demo;
/**
 * Calculator class.
 */
class Calculator {
	/**
	 * Adds two numbers.
	 *
	 * @param mixed $num1 First number.
	 * @param mixed $num2 Second number.
	 *
	 * @return mixed
	 */
	function add( $num1, $num2 ) {
		return $num1 + $num2;
	}

	/**
	 * Subtracts the second argument from the first argument.
	 *
	 * @param mixed $num1 First number.
	 * @param mixed $num2 Second number.
	 *
	 * @return mixed
	 */
	function subtract( $num1, $num2 ) {
		return $num1 - $num2;
	}
}
