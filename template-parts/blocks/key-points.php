<?php
    $title = get_sub_field('title');
    $keyPoints = get_sub_field('key_points');
    $theme = get_sub_field('style');
    $themeClass = "theme-" . str_replace( " ", "-", strtolower( $theme ) );
    $paddedSection = $theme ? 'page-section--padded' : '';
?>

<div class="page-section <?php echo $paddedSection; ?> <?php echo $themeClass; ?>">
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
    <div class="page-container-wrap">
        <div class="page-container">

            <?php if($title) : ?>
                <h2 class="image-gallery__title"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if($keyPoints) : ?>
                <div class="key-points">
                    <?php foreach($keyPoints as $keyPoint): ?>
                        <?php $keyPointText = $keyPoint['text']; ?>

                        <p class="key-point">
                            <?php foreach($keyPointText as $textElement) : ?>
                                <?php $layout = $textElement['acf_fc_layout']; ?>

                                <?php if($layout === 'large') : ?>
                                    <span class="key-point__text key-point__text--large"><?php echo $textElement['large']; ?></span>
                                <?php else : ?>
                                    <span class="key-point__text key-point__text--standard"><?php echo $textElement['standard']; ?></span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </p>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme]); ?>
</div>