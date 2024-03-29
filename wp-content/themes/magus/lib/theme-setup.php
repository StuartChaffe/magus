<?php

/**
 * Add theme support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'align-wide' );
add_theme_support( 'disable-custom-font-sizes' );



/**
 * Tidy up head
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2  );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link') ;	
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

/**
 * Editor styles
 */
add_theme_support( 'editor-styles' );
add_editor_style( 'assets/css/editor-style.css' );

/**
 * Add no-js class to body
 */
 
function origin_no_js_body_classes( $classes ) {
    return array_merge( $classes, array( 'no-js' ) );
}
add_filter( 'body_class', 'origin_no_js_body_classes', 20 );



/**
 * Tidy up body classes
 */
function origin_clean_body_classes( $classes ) {
    $allowed_classes = [
        'single',
        'page',
        'archive',
        'admin-bar',
        'no-js',
    ];
    return array_intersect( $classes, $allowed_classes );
}
add_filter( 'body_class', 'origin_clean_body_classes', 20 );


/**
 * Editor formats
 */
function add_style_select_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );
function my_custom_styles( $init_array ) {  
	$style_formats = array(  
		array(  
			'title' => 'List style',  
			'selector' => 'ul',  
			'classes' => 'li-style',
		), 
		array(  
			'title' => 'Small font',  
			'block' => 'h1',  
			'classes' => 'small',
			'wrapper' => false,
		),  
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  

	return $init_array;  

	} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );