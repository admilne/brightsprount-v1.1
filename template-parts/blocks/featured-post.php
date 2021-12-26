<?php
    $title = get_sub_field('title');
    $postItem = get_sub_field('posts');
    $style = get_sub_field('style');
    $blogPage = get_page_by_title('Blog');
    $link = get_sub_field( 'overview_page_link' );
?>



<div class="page-section page-section--<?php echo $style; ?>">
    
    <div class="page-container-wrap">
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
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.page-section -->

