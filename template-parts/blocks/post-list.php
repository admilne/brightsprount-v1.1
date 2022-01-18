<?php
    $title = get_sub_field('title');
    $curation = get_sub_field('curation');
    $style = get_sub_field('style');
    $colour = get_sub_field('text_colour');
    $shouldLink = get_sub_field('link_items_through_to_pages');
    $bgColour = $GLOBALS['brightSproutVars']['brandColours'][$style];
    $textColour = $GLOBALS['brightSproutVars']['textColours'][$colour];

    $paddedSection = $style ? 'page-section--padded' : '';
    $postCount = 0;

    if($curation === 'manual') {
        $postItems = get_sub_field('select_posts');
    } else {
        $query = new WP_Query( array(
			// 'posts_per_page'    => 2,
			'post_type'		    => $args,
			'post_status'       => 'publish',
			'paged'             => 1,
        ));

        $postItems = $query->posts;
    }
?>


<?php if($postItems) : ?>

    <div class="post-list">
        <?php if($title) : ?>
            <h2 class="post-list__title"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php foreach($postItems as $postItem) : ?>

            <?php
                $postCount++;
                $styleClass = $postCount % 2 ? 'page-section--padded' : 'none';
                $style = $postCount % 2 ? "style='background-color: $bgColour; color: $textColour;'" : '';
            ?>

            <div class="page-section <?php echo $styleClass; ?>">
                <?php if($postCount % 2) { get_template_part('template-parts/curves', null, ['colour' => $bgColour]); } ?>
                <div class="page-container-wrap" <?php echo $style; ?>>
                    <div class="page-container">

                        <?php get_template_part('template-parts/post-teaser', null, $postItem); ?>
                    
                    </div><!-- /.page-container -->
                </div><!-- /.page-container-wrap -->
                <?php if($postCount % 2) { get_template_part('template-parts/curves', null, ['colour' => $bgColour]); } ?>
            </div><!-- /.page-section -->


        <?php endforeach; ?>
    </div><!-- /.post-list -->

    <!-- <div class="page-section post-list__load-more">
        <a href="#" class="button">Show more blog posts</a>
    </div> -->

<?php endif; ?>





