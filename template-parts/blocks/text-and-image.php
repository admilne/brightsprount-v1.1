<?php
    $text = get_sub_field('text');
    $image = get_sub_field('image');
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

            <div class="text-and-media">
                <div class="text-and-media__text"><?php echo $text; ?></div>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div>