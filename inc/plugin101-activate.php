<?php
/*

 * @package plugin101
 * @version 1.0.0

*/


class pluginDevActivate {
	public static function activate() {
		echo "HIIII";
		flush_rewrite_rules();
	}
}
