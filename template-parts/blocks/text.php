<?php
    $text = get_sub_field('text');
    $title = get_sub_field('title');
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
        <div class="page-container page-container--narrow">

            <?php if($title) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="text">
                <?php echo $text; ?>
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div>