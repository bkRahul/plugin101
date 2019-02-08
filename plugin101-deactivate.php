<?php
/*

 * @package plugin101
 * @version 1.0.0

*/


class pluginDevDeactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
