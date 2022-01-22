<?php
    $title = get_sub_field('title');
    $curation = get_sub_field('curation');
    $shouldLink = get_sub_field('link_items_through_to_pages');
    $theme = "";
    $theme = get_sub_field('style');
    $themeClass = "theme-" . str_replace( " ", "-", strtolower( $theme ) );
    
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
                $styleClass = $postCount % 2 ? "page-section--padded $themeClass" : 'none';
            ?>

            <div class="page-section <?php echo $styleClass; ?>">
                <?php if($postCount % 2 && $theme) { get_template_part('template-parts/curves', null, ['theme' => 'true']); } ?>
                <div class="page-container-wrap">
                    <div class="page-container">

                        <?php get_template_part('template-parts/post-teaser', null, $postItem); ?>
                    
                    </div>
                </div>
                <?php if($postCount % 2 && $theme) { get_template_part('template-parts/curves', null, ['theme' => 'true']); } ?>
            </div>


        <?php endforeach; ?>
    </div>

    <!-- <div class="page-section post-list__load-more">
        <a href="#" class="button">Show more blog posts</a>
    </div> -->

<?php endif; ?>





