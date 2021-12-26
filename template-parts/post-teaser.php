<?php 
    // $thumbnail = get_the_post_thumbnail($args->ID, 'large');
    $thumbnail = get_the_post_thumbnail($args->ID);
    $permalink = get_the_permalink($args->ID);
    $tags = wp_get_post_tags($args->ID);
?>


<div class="post-teaser__wrapper">
    <div class="post-teaser">
        <div class="post-teaser__excerpt">
            <h3 class="post-teaser__title"><a href="<?php echo $permalink; ?>"><?php echo $args->post_title; ?></a></h3>
            <?php echo get_field('excerpt', $args->ID); ?> 

            <?php if($tags) :?>
                <div class="post-teaser__tags">
                    <?php foreach( $tags as $tag ) : ?>
                        <span class="post-teaser__tag"><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                </div><!-- /.post-teaser__tags -->
            <?php endif; ?>

            <div class="post-teaser__link-wrapper">
                <a href="<?php echo $permalink; ?>" class="post-teaser__link">Read more</a>
            </div>
        </div>
        
        
        <a class="post-teaser__image" href="<?php echo $permalink; ?>"><?php echo($thumbnail); ?></a>
        
    </div><!-- /.post-teaser__teaser -->
    
</div><!-- /.post -->