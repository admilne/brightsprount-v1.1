<?php

$thumbnailWidth = 600;
$aspectRatio = array(
    'width'     => 16,
    'height'    => 9
);
$thumbnailHeight = ($thumbnailWidth / $aspectRatio['width']) * $aspectRatio['height'];
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( $thumbnailWidth, $thumbnailHeight, true );
