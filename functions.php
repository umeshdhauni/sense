<?php
function add_css_js()
{
	wp_enqueue_style('style12',get_stylesheet_directory_uri().'/lib/css/font-awesome.min.css');
	wp_enqueue_style('style11',get_stylesheet_directory_uri().'/lib/css/camera.css');
	wp_enqueue_style('style6',get_stylesheet_directory_uri().'/lib/css/animate.css');
	wp_enqueue_style('style3',get_stylesheet_directory_uri().'/lib/css/bootstrap.min.css');
	wp_enqueue_script('style9',get_stylesheet_directory_uri().'/lib/js/jquery.min.js');
	wp_enqueue_script('style8',get_stylesheet_directory_uri().'/lib/js/jquery.easing.1.3.js');
	wp_enqueue_script('style4',get_stylesheet_directory_uri().'/lib/js/camera.min.js');
	wp_enqueue_script('style2',get_stylesheet_directory_uri().'/main.js');
	wp_enqueue_script('style5',get_stylesheet_directory_uri().'/lib/js/bootstrap.min.js');
	wp_enqueue_style('style1',get_stylesheet_directory_uri().'/style.css');
	wp_localize_script('style2','image_url',get_stylesheet_directory_uri().'/image/');

}
add_action('wp_enqueue_scripts','add_css_js');

if(!function_exists('menubar'))
{
function menubar()
{
	add_theme_support('menus');
	register_nav_menu('primary','header');
}
}
add_action('init','menubar');