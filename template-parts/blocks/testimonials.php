<?php 

    // $args is set to the data passed when get_template_part is called
    $testimonials = $args; 

    $theme = get_field('bgstyle');
    $themeClass = "theme-" . str_replace( " ", "-", strtolower( $theme['style'] ) );
    $paddedSection = $theme ? 'page-section--padded' : '';
?>

<div class="testimonials <?php echo $themeClass; ?>">
    <?php get_template_part('template-parts/curves', null, ['theme' => $theme['style']]); ?>
    <div class="page-container-wrap">
<!-- <div class="testimonials"> -->
    
    <!-- <div class="page-container-wrap" style="background-color: <?php echo $bgColour; ?>; color: <?php echo $textColour; ?>"> -->
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
    
        </div>
    </div>
</div>

