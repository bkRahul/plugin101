<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController {

	function register() {

		add_action('admin_enqueue_scripts', array( $this, 'enqueue') );

	}
	function enqueue() {
		//enqueue style and js scripts
		wp_enqueue_style('plugin101style', $this->plugin_url . 'assets/style.css' );
		wp_enqueue_script('plugin101script', $this->plugin_url .'assets/script.js'  );
	}
	
}