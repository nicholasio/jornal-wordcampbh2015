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

		add_image_size( 'post-default', 320, 150, true );

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

/**
 * Só quero que esta configuração tenha efeito se o multisite estiver habilitado e
 * se estiver no site principal (cujo id é 1)
 */
if ( is_multisite() && 1 == get_current_blog_id() ) {
	add_filter('wpcpn_posts_section', 'jornal_wpcpn_posts_section');
}


function jornal_wpcpn_posts_section() {

    return array(
        //the key of this array defines a group, each group creates a tab
        'home_posts' => array( 
            //the name of the group
            'name'  => 'Home Posts', 
            'sections'  => array( //the sections arrays holds all sections definitions
                    'news' => array( //the key is the slug of the sections
                         'name'               => 'News', //The Name
                         'description'        => 'News section', //Descriptions
                         'max_posts'          => 6, //Max Posts in this sections
                         //sites => array(2, 3, 4) //'all' or specify the blogs_id that you canpull posts
                         'sites'              => 'all',
                         //should posts of main site be included?
                         'include_main_site'  => false 
                    )
                 ), //sections
        )

    );
}

