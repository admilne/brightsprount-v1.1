<?php

function get_latest_blog_posts($number_of_posts = 1) {
	$args = array(
		'orderby'          => 'date',
		'posts_per_page'   => $number_of_posts,
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => array('publish'),
		'suppress_filters' => true
	);
	$posts = get_posts( $args );

	return $posts;
}
