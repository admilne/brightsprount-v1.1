<?php

    $title = get_sub_field('title');
    $imageGallery = get_sub_field('gallery');
    $style = get_sub_field('style');
    
?>



<?php if( have_rows('gallery')) : ?>

    <div class="page-section page-section--<?php echo $style; ?>">
        <div class="page-container-wrap">
            <div class="page-container">

                <?php if($title) : ?>
                    <h2 class="image-gallery__title"><?php echo $title; ?></h2>
                <?php endif; ?>
                
                <div class="image-gallery">

                    <?php $imageIndex = 1; ?>

                    <?php while( have_rows('gallery')) : the_row(); ?>
                
                        <?php $images = get_sub_field('images'); ?>

                        <div class="image-gallery__row">
                            <?php foreach($images as $image) : ?>
                                <div class="image-gallery__imageWrapper" style="flex: <?php echo $image['width'] / $image['height']; ?>">
                                    <img class="image-gallery__image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" data-imageindex="<?php echo $imageIndex; ?>">
                                </div>

                                <?php $imageIndex++; ?>
                            <?php endforeach; ?>
                        </div><!-- /.image-gallery__row -->

                    <?php endwhile; ?>
                </div>
            </div><!-- /.page-container -->
        </div><!-- /.page-container-wrap -->
    <!-- Slider main container -->
    <div class="gallery-lightbox">
        <div id="gallery-lightbox__close" class="gallery-lightbox__close">
            <div class="bar bar--top"></div>
            <div class="bar bar--bottom"></div>
        </div>
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <?php while( have_rows('gallery')) : the_row(); ?>
                    
                <?php $images = get_sub_field('images'); ?>

                <?php foreach($images as $image) : ?>

                    <div class="swiper-slide gallery-lightbox__slide">
                        <div class="gallery-lightbox__image">
                            <?php //dd($image); ?>
                            <img src="<?php echo $image['url']; ?>"/>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php endwhile; ?>
        
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination2"></div>
        
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    </div><!--pageSection -->


<?php endif; ?>

