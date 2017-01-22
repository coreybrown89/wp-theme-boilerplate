<?php

if ( ! function_exists( 'custom_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function custom_theme_setup() {
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'custom_theme' ),
	) );

	// hide WP admin bar on front end.
	show_admin_bar( false ); 
}
endif;
add_action( 'after_setup_theme', 'custom_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function custom_theme_scripts() {
	// add required WP stylesheet ( theme-name -> style.css )
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
	// add main app stylesheet ( theme-name -> public/css/app.css )
	wp_enqueue_style( 'custom-app-syles', get_template_directory_uri().'/public/css/app.css' );
	
	// add main js file to footer
	wp_enqueue_script( 'main-js', get_template_directory_uri().'/public/js/app.js', false, false );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );


