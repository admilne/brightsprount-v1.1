<?php

function wp_get_attachment( $attachment_id ) {
	if( $attachment_id ) {
		$attachment = get_post( $attachment_id );
		$thumbnail = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' );
		return array(
			'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption' => $attachment->post_excerpt,
			'description' => $attachment->post_content,
			'href' => get_permalink( $attachment->ID ),
			'src' => $attachment->guid,
			'title' => $attachment->post_title,
			'thumbnail_src' => $thumbnail[0]
		);
	} else {
		return false;
	}
}
