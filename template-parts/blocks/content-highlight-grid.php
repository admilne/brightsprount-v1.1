<?php
    $title = get_sub_field('title');
    $postData = get_sub_field('content_to_highlight');
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

            <div class="content-highlight-grid">
                <?php if($title) : ?>
                    <h2 class="content-highlight-grid__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <div class="content-highlight-grid__grid">
                    <?php foreach($postData as $highlightedPost) : ?>
                        
                        <?php $thumbnail = get_the_post_thumbnail($highlightedPost->ID, 'large'); ?>
                        
                        <?php if($shouldLink): ?>
                            <a href="<?php echo get_the_permalink($highlightedPost->ID); ?>" class="content-highlight-grid__post">
                        <?php else : ?>
                            <div class="content-highlight-grid__post">
                        <?php endif;?>

                                <?php echo($thumbnail); ?>
                                <h4><?php echo $highlightedPost->post_title;?></h4>
                                <p><?php echo $highlightedPost->post_excerpt;?></p>

                        <?php if($shouldLink): ?>
                            </a>
                        <?php else : ?>
                            </div>
                        <?php endif;?>

                    <?php endforeach; ?>
                </div>
                

                <!-- <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> -->
            </div>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div>
