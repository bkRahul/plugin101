<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc;

class Activate {
	public static function activate() {
		flush_rewrite_rules();
	}
}
