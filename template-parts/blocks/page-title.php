<?php
    $title = get_sub_field('title');
    $caption = get_sub_field('caption');
    $image = get_sub_field('image');
    $display_author = get_field( 'display_author' );
?>

<div class="page-section">
    <div class="page-container page-title__wrapper">

        <div class="page-title <?php echo $image ? 'page-title--hasImage' : ''; ?>">
            <?php if($title) : ?>
                <h1 class="page-title__title">
                    <?php echo $title; ?>
                    <?php if($image) : ?>
                        <!-- <img src="<?php echo($image['sizes']['large']); ?>" alt="<?php echo($image['alt']); ?>" class="page-title__image"> -->
                    <?php endif; ?>
                </h1>
            <?php endif; ?>
                    
            <?php if($caption) : ?>
                <p class="page-title__caption"><?php echo $caption; ?></p>
            <?php endif; ?>
            
            <?php if($image) : ?>
                <img src="<?php echo($image['sizes']['large']); ?>" alt="<?php echo($image['alt']); ?>" class="page-title__image">
            <?php endif; ?>

            <?php if($display_author) : ?>
                <p class="page-title__author"><?php echo get_field('author_intro', 'option'); ?> <?php echo get_the_author_meta('display_name'); ?></p>
            <?php endif; ?>
        </div><!-- /.page-title -->
    
    </div><!-- /.page-container -->
</div><!-- /.page-section -->