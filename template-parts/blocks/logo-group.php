<?php
    $title = get_sub_field('title');
    $images = get_sub_field('images');
    $style = get_sub_field('style');
    $colour = get_sub_field('text_colour');
    $shouldLink = get_sub_field('link_items_through_to_pages');
    $bgColour = $GLOBALS['brightSproutVars']['brandColours'][$style];
    $textColour = $GLOBALS['brightSproutVars']['textColours'][$colour];

    $paddedSection = $style ? 'page-section--padded' : '';
?>

<div class="page-section <?php echo $paddedSection; ?>">
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
    <div class="page-container-wrap" style="background-color: <?php echo $bgColour; ?>; color: <?php echo $textColour; ?>">
        <div class="page-container">

            <div class="logo-group">
                <?php if($title) : ?>
                    <h2 class="logo-group__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <!-- <div class="logo-group__logos">
                    <?php foreach($images as $image) : ?>

                        <?php if($image['url']): ?>
                            <a href="<?php echo $image['url']['url']; ?>" target="<?php echo $image['url']['target']; ?>">
                                <img src="<?php echo $image['image']['sizes']['large']; ?>" alt="<?php echo $image['image']['alt']; ?>">
                            </a>
                        <?php else : ?>
                            <img src="<?php echo $image['image']['sizes']['large']; ?>" alt="<?php echo $image['image']['alt']; ?>">
                        <?php endif;?>
                        
                        <?php //dd($image['url']); ?>

                    <?php endforeach; ?>
                </div> -->
                <!-- /.logo-group__logos -->




                 <!-- Slider main container -->
                <div class="logo-group__logos">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
        
                        <?php foreach($images as $image) : ?>
        
                            <div class="swiper-slide">
                                <?php if($image['url']): ?>
                                    <a href="<?php echo $image['url']['url']; ?>" target="<?php echo $image['url']['target']; ?>">
                                        <img src="<?php echo $image['image']['sizes']['large']; ?>" alt="<?php echo $image['image']['alt']; ?>">
                                    </a>
                                <?php else : ?>
                                    <img src="<?php echo $image['image']['sizes']['large']; ?>" alt="<?php echo $image['image']['alt']; ?>">
                                <?php endif;?>
                            </div>
        
                        <?php endforeach; ?>
                    </div>
                </div>

                

            </div><!-- /.logo-group -->
        
        </div><!-- /.page-container -->
    </div><!-- /.page-container-wrap -->
    <?php get_template_part('template-parts/curves', null, ['colour' => $bgColour]); ?>
</div><!-- /.page-section -->
