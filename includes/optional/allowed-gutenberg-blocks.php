<?php

// Remove theme support for the core block patterns
remove_theme_support( 'core-block-patterns' );

function register_custom_theme_block_types() {

    if( function_exists('acf_register_block_type') ) {

        // acf_register_block_type(array(
        //     'name'              => 'testimonial',
        //     'title'             => __('Testimonial'),
        //     'description'       => __('A custom testimonial block.'),
        //     'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
        //     'category'          => 'formatting',
        //     'icon'              => 'admin-comments',
        //     'keywords'          => array( 'testimonial', 'quote' ),
        // ));

		// acf_register_block_type(
		// 	array(
		// 		'name' 				=> 'toaster',
		// 		'title'				=> __('Toaster'),
		// 		'description'		=> __('A custom toaster block.'),
		// 		'render_template'	=> get_template_directory_uri() . '/template-parts/blocks/toaster/toaster.php',
		// 		'icon'				=> 'editor-paste-text',
		// 		'keywords'			=> array('toaster', 'product'),
		// 		'example'			=> array(
		// 			'attributes'		=> array(
		// 				'mode'				=> 'preview',
		// 				'data'				=> array(
		// 					'name'				=> 'Andrew',
		// 					'price'				=> 12
		// 				)
		// 			)
		// 		)
		// 	)
		// );

		acf_register_block_type(
			array(
				'name' 				=> 'textandmedia',
				'title'				=> __('Text & media'),
				'description'		=> __('Text on the left and an image or video on the right'),
				'icon'				=> 'editor-paste-text',
				'mode'				=> 'auto',
				'keywords'			=> array('intro', 'text', 'image'),
				'render_template'	=> get_template_directory() . '/template-parts/blocks/textandmedia/textandmedia.php',
				'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/textandmedia/textandmedia.css',
			)
		);

		acf_register_block_type(
			array(
				'name' 				=> 'pagetitle',
				'title'				=> __('Page title'),
				'description'		=> __('Main title at the top of the page'),
				'icon'				=> 'editor-paste-text',
				'mode'				=> 'auto',
				'keywords'			=> array('title', 'h1'),
				'render_template'	=> get_template_directory() . '/template-parts/blocks/pagetitle/pagetitle.php',
				'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/pagetitle/pagetitle.css',
			)
		);
    }
	
}

function adm_allowed_block_types( $allowed_block_types, $post ) {
	$allowedBlocks = array(
		// 'core/paragraph',
		'core/image',
		// 'core/heading',
	);

	// Allow all ACF made blocks
	$acf_blocks = acf_get_block_types();
	
	if( ! empty( $acf_blocks ) ) {
		foreach( $acf_blocks as $acf_block ) {
			$allowedBlocks[] = $acf_block['name'];
		}
	}

	return $allowedBlocks;
}

add_action('acf/init', 'register_custom_theme_block_types');
// add_filter( 'allowed_block_types', 'adm_allowed_block_types', 10, 2);
