<?php

add_filter( 'block_categories_all', 'magus_block_categories', 10, 2 );
function magus_block_categories( $categories, $post )
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'magus-blocks',
                'title' => __( 'Magus Blocks', 'magusblocks-master' ),
            ),
        )
    );
}

add_action('acf/init', 'magus_acf_blocks');
function magus_acf_blocks() {
	if( function_exists('acf_register_block') ) {
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('Add testimonial'),
			'render_callback'	=> 'magus_acf_block_render_callback',
			'category'			=> 'magus-blocks',
			'icon'				=> 'format-status',
			'align' 			=> 'wide',
			'keywords'			=> array( 'testimonial, quote' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
	}
}

function magus_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types_all', 'magus_allowed_block_types' );
 
function magus_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/testimonial',
	);
 
}
  
// add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
// function add_default_value_to_image_field($field) {
// 	acf_render_field_setting( $field, array(
// 		'label'			=> 'Default Image',
// 		'instructions'		=> 'Appears when creating a new post',
// 		'type'			=> 'image',
// 		'name'			=> 'default_value',
// 	));
// }
// add_action('acf/render_field_settings/type=file', 'add_default_value_to_file_field');
// function add_default_value_to_file_field($field) {
// 	acf_render_field_setting( $field, array(
// 		'label'			=> 'Default File',
// 		'instructions'		=> 'Appears when creating a new post',
// 		'type'			=> 'file',
// 		'name'			=> 'default_value',
// 	));
// }