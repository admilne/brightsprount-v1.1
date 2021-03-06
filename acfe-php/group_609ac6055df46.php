<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_609ac6055df46',
	'title' => 'Block: Featured post',
	'fields' => array(
		array(
			'key' => 'field_609ac60565bea',
			'label' => 'Title',
			'name' => 'title',
			'type' => 'text',
			'instructions' => '(optional)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_609ac60565bff',
			'label' => 'Select post',
			'name' => 'posts',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'case-study',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'save_custom' => 0,
			'save_post_status' => 'publish',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'ui' => 1,
		),
		array(
			'key' => 'field_609ac63f68978',
			'label' => 'Theme',
			'name' => 'style',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array(
				0 => 'group_6097d72758a9c',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
			'choices' => array(
				'Yellow' => 'Yellow',
				'Green 1' => 'Green 1',
				'Green 2' => 'Green 2',
				'Green 3' => 'Green 3',
				'Grey' => 'Grey',
				'Dark' => 'Dark',
			),
		),
		array(
			'key' => 'field_60a81f081a6af',
			'label' => 'Overview page link',
			'name' => 'overview_page_link',
			'type' => 'link',
			'instructions' => 'This is optional, but it was designed to be a link to the case studies overview page or the blog overview page depending on the content you\'ve selected to be featured but you could link it to whatever page you like.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1642805140,
));

endif;