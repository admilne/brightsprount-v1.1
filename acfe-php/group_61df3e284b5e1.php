<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_61df3e284b5e1',
	'title' => 'Option: Text Colour',
	'fields' => array(
		array(
			'key' => 'field_61df3e2851de9',
			'label' => 'Text colour',
			'name' => 'text_colour',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Black' => 'Black',
				'Blue' => 'Blue',
			),
			'default_value' => 'none',
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'label',
			'allow_custom' => 0,
			'placeholder' => '',
			'search_placeholder' => '',
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
	'modified' => 1642020570,
));

endif;