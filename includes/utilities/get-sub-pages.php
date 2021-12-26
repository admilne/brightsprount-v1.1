<?php

function get_sub_pages($page_id) {

	$args = array(
		'sort_order' => 'DESC',
		'sort_column' => 'post_date',
		'child_of' => $page_id,
		'post_type' => 'page',
		'post_status' => 'publish'
    );
    
	return get_pages($args);
}