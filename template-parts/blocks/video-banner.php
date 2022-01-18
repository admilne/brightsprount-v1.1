<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text', false, false);
    $side = strtolower( get_sub_field('side') );
?>

<div class="video-banner__wrapper">
    <div class="video-banner">
        <div class="videoWrapper">
            <video muted autoplay>
                <source src="movie.mp4" type="video/mp4">
                <source src="<?php echo get_template_directory_uri(); ?>/a/video/hero-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-banner__title-container">
            <div class="page-container">
                <h1 class="video-banner__title">Down to Earth Marketing</h1>
            </div>
        </div>
    </div>
</div>
