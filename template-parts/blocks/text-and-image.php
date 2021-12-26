<?php
    $text = get_sub_field('text');
    $image = get_sub_field('image');
    $style = get_sub_field('style');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    <div class="page-container-wrap">
        <div class="page-container">

            <div class="text-and-media">
                <div class="text-and-media__text"><?php echo $text; ?></div>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
            </div><!-- /.text-and-media -->
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.page-section -->