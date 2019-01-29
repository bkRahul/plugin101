<?php
/**
 * @package plugin101
 * @version 1.0.0
 */
/*
Plugin Name: Plugin101
Plugin URI: http://wordpress.org/plugins/plugin101/
Description: This is an first attempt on writing a plugin built with help of alecadd's tutorials on plugin development.
Author: Rahul bk
Version: 1.0.0
Author URI: http://rahulsatya1068gmail.com
*/

defined('ABSPATH') or die('You are not allowed here');

class pluginDev {

	function __construct() {
		add_action('init', array($this, 'custom_post_type') );
	}


	function activate() {
		$this->custom_post_type();
		flush_rewrite_rules();
	}
	function deactivate() {
		flush_rewrite_rules();
	}
	function uninstall() {
		
	}

	function custom_post_type() {
		register_post_type('book', ['public' => true, 'label' => 'Books']);
	}
}

if ( class_exists( 'pluginDev' ) ) {
	$pluginDev = new pluginDev();
}


//activation

register_activation_hook( __FILE__, array($pluginDev, 'activate') );

//deactivation

register_deactivation_hook( __FILE__, array($pluginDev, 'deactivate') );

//uninstall

?>