<?php
    $title = get_sub_field('title');
    $postData = get_sub_field('content_to_highlight');
    $style = get_sub_field('style');
    $shouldLink = get_sub_field('link_items_through_to_pages');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    <div class="page-container-wrap">
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
                </div><!-- /.content-highlight-grid__grid -->

                

                <!-- <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> -->
            </div><!-- /.content-highlight-grid -->
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.page-section -->
