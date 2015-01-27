<?php

/**
* Enqueue scripts
*/

function my_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', includes_url(). 'js/jquery/jquery.js', null, '1.10.2',true);
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.14&(key=AIzaSyBIiiFbPAKfTIqOC8K4sKqf1DB39Uh1hZc)&sensor=false', array('jquery'), '1.0', false);
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array('jquery'), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>