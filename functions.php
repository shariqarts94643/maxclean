<?php

function maxclean_script_enqueue() {
     wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
     wp_enqueue_style('navigation', get_template_directory_uri() . '/css/navigation-menu.css', array(), '1.0.0', 'all');
     wp_enqueue_style('plugins', get_template_directory_uri() . '/css/plugins.css', array(), '1.0.0', 'all');
     wp_enqueue_style('shortcode', get_template_directory_uri() . '/css/shortcode.css', array(), '1.0.0', 'all');
     wp_enqueue_style('woocommerce', get_template_directory_uri() . '/css/woocommerce.css', array(), '1.0.0', 'all');
     wp_enqueue_style('Poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all');
     wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', array(), '1.0.0', 'all');
     wp_enqueue_style('settings', get_template_directory_uri() . '/revolution/css/settings.css', array(), '1.0.0', 'all');
     wp_enqueue_style('layers', get_template_directory_uri() . '/revolution/css/layers.css', array(), '1.0.0', 'all');
     wp_enqueue_style('navigation', get_template_directory_uri() . '/revolution/css/navigation.css', array(), '1.0.0', 'all');
     wp_enqueue_style('lib', get_template_directory_uri() . '/libraries/lib.css', array(), '1.0.0', 'all');

     wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);
     wp_enqueue_script('libraries', get_template_directory_uri() . '/libraries/lib.js', array(), '1.0.0', true);
     wp_enqueue_script('tools', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true);
     wp_enqueue_script('revolution', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true);
     wp_enqueue_script('video', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.video.min.js', array(), '1.0.0', true);
     wp_enqueue_script('slideanims', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', true);
     wp_enqueue_script('slideanims', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', true);
     wp_enqueue_script('navigation', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', true);
     wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE', array(), '1.0.0', true);
     wp_enqueue_script('function', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'maxclean_script_enqueue');

function maxclean_theme_setup() {

     add_theme_support( 'menus');

     register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}
add_action( 'init', 'maxclean_theme_setup');


add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'header-image' );
add_theme_support('post-formats', array('aside', 'image', 'video'));
