<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc\Pages;

use \Inc\Base\BaseController;

use \Inc\Api\SettingsApi;

class Admin extends BaseController {

	public $settings;

	public $pages = array();

	public function __construct()
	{
		$this->settings = new SettingsApi();

		$this->pages = array(
			array(
				'page_title' => 'pluginDev',
				'menu_title' => 'pluginDev',
				'capability' => 'manage_options',
				'menu_slug' => 'plugin_Dev',
				'callback' => function() { echo "Plugin Development"; },
				'icon_url' => 'dashicons-store',
				'page_position' => '110'
			),
			array(
				'page_title' => 'alecadd',
				'menu_title' => 'alecadd',
				'capability' => 'manage_options',
				'menu_slug' => 'plugin_alecadd',
				'callback' => function() { echo "alecadd Development"; },
				'icon_url' => 'dashicons-external',
				'page_position' => '9'
			),
		);
	} 

	function register()
	{
		//add_action('admin_menu', array($this, 'add_admin_pages' ) );

		$this->settings->addPages( $this->pages )->register();
	}	
	
	// public function add_admin_pages()
	// {
	// 	add_menu_page('pluginDev', 'pluginDev', 'manage_options', 'plugin_Dev', array($this, 'admin_index'), 'dashicons-store', 110);
	// }

	// public function admin_index()
	// {
	// 	require_once $this->plugin_path .'templates/admin.php';
	// }
 
}
