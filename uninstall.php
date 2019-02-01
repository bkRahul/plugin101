<?php
/**
 * @package plugin101
 * @version 1.0.0
**/


if( !defined('WP_UNINSTALL_PLUGIN') ) {
	die;
}

//Clear Database stored data
$books = get_posts( array('post_type' => 'book', 'numberposts'=> -1 ) );

foreach ($books as $book) {
	wp_delete_post( $book->ID, true );
}


//delete via database



