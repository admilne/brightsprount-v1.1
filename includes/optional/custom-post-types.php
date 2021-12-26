<?php

add_action( 'init', 'adm_create_post_types');

// Function to create the custom post type. 
// Copy everything inside register_post_type to create multiple custom post types
function adm_create_post_types() {
	register_post_type(
		
		'service',

		array(
            'labels'                => adm_generate_cpt_labels('Service', 'Services'), // Single, Plural
            'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
            // 'rewrite'               => array( 'slug' => 'services' ),
            'rewrite'               => false,
            'menu_icon'             => 'dashicons-portfolio', // See more here - https://developer.wordpress.org/resource/dashicons/
            'has_archive'           => false,
            'hierarchical'          => false,
            'public'                => true,
			'publicly_queryable'	=> true,
            'show_ui'               => true,
            'show_in_rest'          => true,
            'show_in_menu'          => true, // true is own top level menu. Supply existing level menu ('tools.php') to appear as sub menu of that item
            'menu_position'         => null, // null goes at the bottom
            'capability_type'       => 'page'
        )
	);

	register_post_type(
		
		'testimonial',

		array(
            'labels'                => adm_generate_cpt_labels('Testimonial', 'Testimonials'), // Single, Plural
            'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
            // 'rewrite'               => array( 'slug' => 'testimonials' ),
            'rewrite'               => false,
            'menu_icon'             => 'dashicons-format-quote', // See more here - https://developer.wordpress.org/resource/dashicons/
            'has_archive'           => true,
            'hierarchical'          => false,
            'public'                => false,
			'publicly_queryable'	=> false,
            'show_ui'               => true,
            'show_in_rest'          => true,
            'show_in_menu'          => true, // true is own top level menu. Supply existing level menu ('tools.php') to appear as sub menu of that item
            'menu_position'         => null, // null goes at the bottom
            'capability_type'       => 'page'
        )
	);

    register_post_type(
		
		'case-study',

		array(
            'labels'                => adm_generate_cpt_labels('Case study', 'Case studies'), // Single, Plural
            'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
            // 'rewrite'               => array( 'slug' => 'case-studies' ),
            'rewrite'               => false,
            'menu_icon'             => 'dashicons-search', // See more here - https://developer.wordpress.org/resource/dashicons/
            'has_archive'           => true,
            'hierarchical'          => false,
            'public'                => true,
			'publicly_queryable'	=> true,
            'show_ui'               => true,
            'show_in_rest'          => true,
            'show_in_menu'          => true, // true is own top level menu. Supply existing level menu ('tools.php') to appear as sub menu of that item
            'menu_position'         => null, // null goes at the bottom
            'capability_type'       => 'page'
        )
	);
}


/* Helper function to create the labels required for the custom post type
------------------------------------------------------------------------------------ */

function adm_generate_cpt_labels($single, $multiple) {
    return array(
		'name'                  => __( $multiple ), // general name for the post type, usually plural.
		'singular_name'         => __( $single ), // name for one object of this post type. Defaults to value of 'name'.
		'add_new'               => 'Add New ' . $single, //  the add new text.
		'add_new_item'          => 'Add New ' . $single, // the add new item text. Default is Add New Post/Add New Page
		'new_item'              => 'New ' . $single, // the new item text. Default is "New Post" for non-hierarchical and "New Page" for hierarchical post types.
		'edit_item'             => 'Edit ' . $single, // the edit item text. In the UI, this label is used as the main header on the post's editing panel. Default is "Edit Post" for non-hierarchical and "Edit Page" for hierarchical post types.
		'view_item'             => 'View ' . $single, // the view item text. Default is View Post/View Page
		'all_items'             => 'All ' . $multiple, // the all items text used in the menu. Default is the value of 'name'.
		'search_items'          => 'Search ' . $multiple, // the search items text. Default is Search Posts/Search Pages
		'parent_item_colon'     => 'Parent ' . $single . ':', // the parent text. This string is used only in hierarchical post types. Default is "Parent Page".
		'not_found'             => 'No ' . $multiple . ' found.', // the not found text. Default is No posts found/No pages found
		'not_found_in_trash'    => 'No ' . $multiple . ' found in Trash.' // the not found in trash text. Default is No posts found in Trash/No pages found in Trash.
	);
}

?>
