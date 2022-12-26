<?php

/**
* Plugin Name: NPM Setup
*/


function npm_add_scripts(){
	wp_register_script( 'npm_setup_script', plugins_url( 'dist/script.js', __FILE__ ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'npm_setup_script' );
 
	wp_enqueue_style( 'npm_setup_style', plugins_url( 'dist/style.css', __FILE__ ), '', '1.0' );
}
add_action( 'wp_enqueue_scripts', 'npm_add_scripts' );