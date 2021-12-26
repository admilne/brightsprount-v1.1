<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6097d72758a9c',
	'title' => 'Option: Style',
	'fields' => array(
		array(
			'key' => 'field_6097d738a2527',
			'label' => 'Style',
			'name' => 'style',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'none' => 'White',
				'primary' => 'Green',
				'secondary' => 'Dark',
			),
			'default_value' => 'none',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'allow_custom' => 0,
			'search_placeholder' => '',
			'placeholder' => '',
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
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1620564123,
));

endif;