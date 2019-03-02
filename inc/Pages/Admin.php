<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController {

	function register() {

		add_action('admin_menu', array($this, 'add_admin_pages' ) );
	}	
	
	public function add_admin_pages() {
		add_menu_page('pluginDev', 'pluginDev', 'manage_options', 'plugin_Dev', array($this, 'admin_index'), 'dashicons-store', 110);
	}

	public function admin_index() {
		require_once $this->plugin_path .'templates/admin.php';
	}
 
}
