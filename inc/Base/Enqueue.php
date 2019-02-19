<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc\Base;

class Enqueue {

	function register() {

		add_action('admin_enqueue_scripts', array( $this, 'enqueue') );

	}
	function enqueue() {
		//enqueue style and js scripts
		wp_enqueue_style('plugin101style', PLUGIN_URL.'assets/style.css' );
		wp_enqueue_script('plugin101script', PLUGIN_URL.'assets/script.js'  );
	}
	
}