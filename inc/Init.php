<?php
/*

 * @package plugin101
 * @version 1.0.0

*/

namespace Inc;

final class Init {
	/**
	* Store all the classes inside array
	* @return array containing list of all classes
	*/

	public static function get_services() {
		return [
			Pages\Admin::class,
			Base\Enqueue::class,
			Base\SettingsLinks::class
		];
	}


	/*
	* Loop through the classes, initialize them 
	* and call register method if exists
	*/

public static function register_services() {
	foreach ( self::get_services() as $class ) {
		$service = self::instantiate($class);
		if( method_exists($service, 'register') ) {
			$service->register();
		}
	}
}

	/**
	* initialize the class
	* @param class $class from services array 
	* @return class instance new instance of the class
	*/

private static function instantiate( $class ) {
	$service = new $class();
	return $service;
}
}