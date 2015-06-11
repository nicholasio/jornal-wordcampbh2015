<?php

require_once get_template_directory() . '/inc/class-bootstrap-nav.php';

if ( ! function_exists('jornal_setup_features') ) {
	
	function jornal_setup_features() {

		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'jornal' )
			)
		);


		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'title-tag' );

	}

}

add_action('after_setup_theme', 'jornal_setup_features');

function jornal_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	wp_enqueue_style( 'bootstrap-css', $template_url . '/css/bootstrap.min.css', array(), null, 'all');
	wp_enqueue_style( 'jornal-style', $template_url . '/css/jornal.css', array('bootstrap-css'), null, 'all' );

	wp_enqueue_script( 'boostrap-js', $template_url . '/js/bootstrap.min.js', array('jquery'), true, 'all');

}

add_action('wp_enqueue_scripts', 'jornal_enqueue_scripts');

