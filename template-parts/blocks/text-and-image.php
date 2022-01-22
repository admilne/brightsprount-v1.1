<?php
    $text = get_sub_field('text');
    $image = get_sub_field('image');
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
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
</div>