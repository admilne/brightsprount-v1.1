<?php
    $text = get_sub_field('text');
    $video = get_sub_field('video');
    $style = get_sub_field('style');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    <div class="page-container-wrap">
        <div class="page-container">

            <div class="text-and-media">
                <div class="text-and-media__text"><?php echo $text; ?></div>
                <div class="text-and-media__embed videoWrapper">
                    <?php echo $video; ?>
                </div>
            </div><!-- /.text-and-media -->
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.page-section -->