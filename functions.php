<?php

function register_menus() {
	register_nav_menu('menu-main', __('Main Menu')); 	
}

function paulncks_scripts() {
	wp_enqueue_style('paulncks-style', get_stylesheet_uri()); 
}

add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'paulncks_scripts'); 

?>