<?php
    $text = get_sub_field('text');
    $title = get_sub_field('title');
    $theme = get_sub_field('style');
    $themeClass = "theme-" . str_replace( " ", "-", strtolower( $theme ) );
    $paddedSection = $theme ? 'page-section--padded' : '';
?>

<div class="page-section <?php echo $paddedSection; ?> <?php echo $themeClass; ?>">
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
    <div class="page-container-wrap">
        <div class="page-container page-container--narrow">

            <?php if($title) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="text">
                <?php echo $text; ?>
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
</div>