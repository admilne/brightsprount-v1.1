<?php 

    // $args is set to the data passed when get_template_part is called
    $testimonials = $args; 
    
?>

<div class="testimonials">
    <div class="page-container-wrap">
        <div class="page-container">
    
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
    
                    <?php foreach( $testimonials as $testimonial) : ?>
    
                        <div class="swiper-slide">
                            <p class="testimonials__quote"><?php echo get_field('quote', $testimonial->ID); ?></p>
                            <p class="testimonials__customer"><?php echo get_field('customer', $testimonial->ID); ?></p>
                        </div>
    
                    <?php endforeach; ?>
                </div>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
    
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
</div><!-- /.testimonials -->

