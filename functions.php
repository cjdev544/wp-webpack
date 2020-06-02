<?php
/**
* CjTheme: Wordpress Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basic/theme-functions/	
*
* @package WordPress
* @subpackage cjtheme
* @since 1.0.0		
* @version 1.0.0 	
*/

if( !isset($content_width)){
	$content_width=800;
}

if( !function_exists('cjtheme_scripts')):
	function cjtheme_scripts() {
		// Styles
		// Google Fonts
		wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,700', array(), '1.0.0', 'all');
		wp_enqueue_style('fonts');
		// Custom Style
		wp_register_style('custom-style', get_stylesheet_uri(), array('fonts'), '1.0.0', 'all');
		wp_enqueue_style('custom-style');

    		// Scripts
		// Jquery
		wp_enqueue_script('jquery');
        // Custom Scripts
		wp_register_script('custom-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('custom-script');
    }
    
endif;
	add_action('wp_enqueue_scripts', 'cjtheme_scripts');
