<?php get_header(); ?>
<!-- PAGE.PHP -->

<div class="page-blocks">
        
    <?php if ( have_rows( 'blocks' ) ) : ?>
        <?php while ( have_rows('blocks' ) ) : the_row(); ?>
        
            <?php get_template_part('template-parts/display-block'); ?>
        
        <?php endwhile; ?>
    <?php endif; ?>
        
</div><!-- /.page-blocks -->	

<?php get_footer(); ?>

