<?php
    $text = get_sub_field('text');
    $title = get_sub_field('title');
    $style = get_sub_field('style');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    <div class="page-container-wrap">
        <div class="page-container page-container--narrow">

            <?php if($title) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="text">
                <?php echo $text; ?>
            </div><!-- /.text-and-media -->
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.page-section -->