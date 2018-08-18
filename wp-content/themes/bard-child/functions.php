<?php
/**
* Bard Theme Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Bard Child
* @since Bard Child 2.0
*/

// Enqueue scripts and styles
function bard_child_scripts(){
	wp_enqueue_style( 'bard-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'bard-style' ));
	wp_enqueue_style('bard-child-google-fonts', '//fonts.googleapis.com/css?family=Poiret+One|Yeseva+One');
}
add_action( 'wp_enqueue_scripts', 'bard_child_scripts' );
