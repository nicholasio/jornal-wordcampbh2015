<?php 

function jornal_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'jornal' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'jornal' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'jornal_widgets_init' );