<?php

function adm_create_taxonomies() {
	register_taxonomy(
		'genre', // Taxonomy key (must by lowercase, not contain capital letters or spaces)
		'book', // The post type the taxonomy is to be associated with (can be an array of post types)
		array(
			'public'			=> true, // Intended for public use either via admin interface or by front-end users?
			'hierarchical'      => false,
			'show_in_rest'		=> true, // Included in REST API?
			'meta_box_cb'		=> false, // Set to false if you want to use ACF for single select - post_categories_meta_box - post_tags_meta_box
			'labels'            => [
				'name'			=> 'Genres',
				'singular_name'	=> 'genres',
				'add_new_item'	=> 'Add new genre'
			]
		)
	);
}
add_action( 'init', 'adm_create_taxonomies');

?>
