<?php
/**
 * Post_Updater class.
 *
 * @package Unit_Tested_Plugin_Demo
 */

namespace Unit_Tested_Plugin_Demo;
/**
 * Post_Updater class.
 */
class Post_Updater {

	/**
	 * Calculator instance.
	 *
	 * @var Calculator
	 */
	private $calculator;
	/**
	 * Constructor.
	 *
	 * @param Calculator $calculator Calculator instance.
	 */
	public function __construct( $calculator ) {
		$this->calculator = $calculator;
	}

	/**
	 * Updates the post meta with the sum of the second and third arguments.
	 *
	 * @param int   $post_id Post ID.
	 * @param mixed $num1 First number.
	 * @param mixed $num2 Second number.
	 */
	public function update( $post_id, $num1, $num2 ) {
		update_post_meta( $post_id, 'unit_tested_plugin_demo_meta', $this->calculator->add( $num1, $num2 ) );
	}
}
