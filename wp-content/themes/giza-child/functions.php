<?php

add_action( 'wp_enqueue_scripts', 'po_child_theme_styles', PHP_INT_MAX);
function po_child_theme_styles() {
	global $wp_styles;
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'parent-style-ie', get_template_directory_uri().'/css/ie.css', array( 'parent-style' ) );
	$wp_styles->add_data( 'parent-style-ie', 'conditional', 'lte IE 9' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}