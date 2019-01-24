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


if ( !defined( 'ABSPATH' ) ): die(); endif;

defined('ABSPATH') or die('You are not allowed here');

if ( ! function_exists( 'add_action' ) ) {
	echo 'Hey, you cant access this file';
	exit;
}

?>