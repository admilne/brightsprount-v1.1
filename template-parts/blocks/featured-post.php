<?php
    $title = get_sub_field('title');
    $postItem = get_sub_field('posts');
    $blogPage = get_page_by_title('Blog');
    $link = get_sub_field( 'overview_page_link' );
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
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php get_template_part('template-parts/post-teaser', null, $postItem); ?>

            <?php if ( $link ) : ?>
                <?php
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                <div class="featured-posts-readmore">
	                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
                <!-- /.featured-posts-readmore -->
            <?php endif; ?>
        
        </div>
    </div>
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div>

