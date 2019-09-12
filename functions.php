<?php

function theme_supports() {
	add_theme_support('custom-logo');	
}

function register_menus() {
	register_nav_menu('menu-main', __('Main Menu')); 	
	register_nav_menu('menu-secondary', __('Secondary Menu'));
}

function paulncks_scripts() {
	wp_enqueue_style('paulncks-style', get_stylesheet_uri()); 
	wp_enqueue_script('script', get_template_directory_uri() . '/scripts/functions.js');
}

add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'paulncks_scripts'); 
add_action('after_setup_theme', 'theme_supports'); 

?>