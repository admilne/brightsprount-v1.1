<?php

    $imageGallery = get_field('image_gallery');
    
?>



<h1>Image gallery</h1>
<div class="imageGallery">

    <?php if( have_rows('images')) : ?>

        <?php while( have_rows('images')) : the_row(); ?>

            <?php $image = get_sub_field('image'); ?>

            <div class="imageGallery__imageWrapper" style="flex: <?php echo $image['width'] / $image['height']; ?>">
                <img class="imageGallery__image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
            </div>

        <?php endwhile; ?>

    <?php endif; ?>

</div>


