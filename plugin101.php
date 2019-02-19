<?php
/**
 * @package plugin101
 * @version 1.0.0

Plugin Name: Plugin101
Plugin URI: http://wordpress.org/plugins/plugin101/
Description: This is an first attempt on writing a plugin built with help of alecadd's tutorials on plugin development.
Author: Rahul bk
Version: 1.0.0
Author URI: http://rahulsatya1068gmail.com
*/

defined('ABSPATH') or die('You are not allowed here');

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/*
use Inc\Activate;
use Inc\Deactivate;
use Inc\Admin\AdminPages;


if ( !class_exists( 'pluginDev' ) ) {

class pluginDev {

	public $plugin;

	function __construct() {
		$this->plugin = plugin_basename( __FILE__ );
	}

	function register() {
		add_action('admin_enqueue_scripts', array( $this, 'enqueue') );

		add_action('admin_menu', array($this, 'add_admin_pages' ) );

		add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
	}

	public function settings_link( $links ) {
		$settings_link = '<a href="admin.php?page=plugin_Dev">Settings</a>';
		array_push($links, $settings_link);
		return $links;
	}

	public function add_admin_pages() {
		add_menu_page('pluginDev', 'pluginDev', 'manage_options', 'plugin_Dev', array($this, 'admin_index'), 'dashicons-store', 110);
	}

	public function admin_index() {
		require_once plugin_dir_path( __FILE__).'templates/admin.php';
	}

	protected function create_post_type() {
		add_action('init', array($this, 'custom_post_type') );
	}

	function register_admin_scripts() {
		add_action('admin_enqueue_scripts', array( $this, 'enqueue') );
	}

	function custom_post_type() {
		register_post_type('book', ['public' => true, 'label' => 'Books']);
	}

	function enqueue() {
		//enqueue style and js scripts
		wp_enqueue_style('plugin101style', plugins_url('/assets/style.css', __FILE__) );
		wp_enqueue_script('plugin101script', plugins_url('/assets/script.js', __FILE__) );
	}

	function activate() {
		//require_once plugin_dir_path( __FILE__).'inc/plugin101-activate.php';
		Activate::activate(); 
	}
}


	$pluginDev = new pluginDev();
	$pluginDev->register();
}


//activation

register_activation_hook( __FILE__, array($pluginDev, 'activate') );


//deactivation

//require_once plugin_dir_path( __FILE__).'inc/plugin101-deactivate.php';

register_deactivation_hook( __FILE__, array('Deactivate', 'deactivate') );

*/

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__) );

if( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}