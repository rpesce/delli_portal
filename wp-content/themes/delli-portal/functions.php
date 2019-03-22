<?php 

// Include custom navwalker
// require_once('bs4navwalker.php');

function themebs_enqueue_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Oswald:200,300,400');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'delli-portal-style', get_template_directory_uri() . '/style.css', NULL, microtime());
}

add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


function themebs_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );

}

add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');


function delli_features() {
	register_nav_menu('top', 'Top menu');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'delli_features');