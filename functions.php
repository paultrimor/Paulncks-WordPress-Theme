<?php

function theme_supports() {
	add_theme_support('custom-logo');	
	add_theme_support( 'post-thumbnails' );
}

function register_menus() {
	register_nav_menu('menu-main', __('Main Menu')); 	
	register_nav_menu('menu-secondary', __('Secondary Menu'));
}

function paulncks_scripts() {
	wp_enqueue_style('paulncks-style', get_stylesheet_uri()); 
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');

	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/scripts/vendor/bootstrap.bundle.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/scripts/vendor/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('functions', get_template_directory_uri().'/scripts/functions.js', array(), '', true);
}

function paulncks_tags_shortcode($atts) {
	extract($atts);
	$items = "<ul class='paulncks-tag-shortcode'>";
	foreach(get_the_tags($postid) as $tag) {
		$items .= "<li class='tagname-".$tag->slug."'>".$tag->name."</li>";
	}
	$items .= "</ul>";
	return $items;
}

function paulncks_menu_shortcode($atts) {
	extract($atts);
	$menu = "<div class='paulncks-menu-shortcode'><ul>";
	foreach(wp_get_nav_menu_items($menuid) as $link) {
		$menu .= "<li><a href='".$link->url."'>".$link->title."</a></li>";
	}
	$menu .= "</ul></div>";
	return $menu;
}

add_shortcode('paulncks-tags', 'paulncks_tags_shortcode');
add_shortcode('paulncks-menu', 'paulncks_menu_shortcode');
add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'paulncks_scripts'); 
add_action('after_setup_theme', 'theme_supports'); 

?>