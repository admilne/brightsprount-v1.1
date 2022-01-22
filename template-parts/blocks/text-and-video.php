<?php
    $text = get_sub_field('text');
    $video = get_sub_field('video');
    $theme = get_sub_field('style');
    $themeClass = "theme-" . str_replace( " ", "-", strtolower( $theme ) );
    $paddedSection = $theme ? 'page-section--padded' : '';
?>

<div class="page-section <?php echo $paddedSection; ?> <?php echo $themeClass; ?>">
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
    <div class="page-container-wrap">
        <div class="page-container">

            <div class="text-and-media">
                <div class="text-and-media__text"><?php echo $text; ?></div>
                <div class="text-and-media__embed videoWrapper">
                    <?php echo $video; ?>
                </div>
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
</div>