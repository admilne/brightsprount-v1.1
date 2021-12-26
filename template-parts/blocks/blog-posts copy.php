<?php
    $title = get_sub_field('title');
    $curation = get_sub_field('curation');
    $posts = get_sub_field('select_posts');
    $style = get_sub_field('style');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    

            <?php if($title) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="post-list">
                <?php foreach($posts as $postItem) : ?>
                    <?php 
                        $thumbnail = get_the_post_thumbnail($postItem->ID, 'large');
                        $permalink = get_the_permalink($postItem->ID);
                    ?>


                    <div class="post">
                        <div class="page-container-wrap post__container-wrap">
                            <div class="page-container post__wrapper">
                                <div class="post__teaser">
                                    <h4 class="post__title"><a href="<?php echo $permalink; ?>"><?php echo $postItem->post_title; ?></a></h4>
                                    <p class="post__excerpt"><?php echo $postItem->post_excerpt; ?></p>
                                    <a href="<?php echo $permalink; ?>" class="post__link">Read more</a>
                                </div><!-- /.post__teaser -->
                                
                                <a class="post__image" href="<?php echo $permalink; ?>"><?php echo($thumbnail); ?></a>
                            </div>
                        </div>
                    </div><!-- /.post -->


                <?php endforeach; ?>
            </div><!-- /.post-list -->
        
        
</div><!-- /.page-section -->