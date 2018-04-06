<?php
/**
 * Integration tests for the Post_Updater class.
 *
 * @package Unit_Tested_Plugin_Demo
 */

use \Unit_Tested_Plugin_Demo\Post_Updater;
use \Unit_Tested_Plugin_Demo\Calculator;

/**
 * Integration tests for the Post_Updater class.
 */
class Test_Post_Updater extends WP_UnitTestCase {
	/**
	 * Test if the post meta is being updated correctly.
	 *
	 * @test
	 */
	function it_updates_the_post_meta_with_the_sum_of_the_second_and_third_arguments() {
		$post_updater = new Post_Updater( new Calculator() );
		$post_id      = $this->factory()->post->create();

		$post_updater->update( $post_id, 2, 3 );

		$this->assertEquals( 5, get_post_meta( $post_id, 'unit_tested_plugin_demo_meta', true ) );
	}
}
