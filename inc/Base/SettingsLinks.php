<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController {

	public function register() {

echo $this->plugin;
		add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));

	}
	public function settings_link( $links ) {
		$settings_link = '<a href="admin.php?page=plugin_Dev">Settings</a>';
		array_push($links, $settings_link);
		return $links;
	}
	
}