<?php
    $title = get_sub_field('title');
    $keyPoints = get_sub_field('key_points');
    $style = get_sub_field('style');
    $colour = get_sub_field('text_colour');
    $shouldLink = get_sub_field('link_items_through_to_pages');
    $bgColour = $GLOBALS['brightSproutVars']['brandColours'][$style];
    $textColour = $GLOBALS['brightSproutVars']['textColours'][$colour];

    $paddedSection = $style ? 'page-section--padded' : '';
?>

<div class="page-section <?php echo $paddedSection; ?>">
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
    <div class="page-container-wrap" style="background-color: <?php echo $bgColour; ?>; color: <?php echo $textColour; ?>">
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
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div>