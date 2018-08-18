<?php
/**
* Unite Theme Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Unite Child
* @since Unite Child 2.0
*/

// Enqueue scripts and styles
function unite_child_scripts(){
	wp_enqueue_style( 'unite-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'unite-style' ));
}
add_action( 'wp_enqueue_scripts', 'unite_child_scripts' );
