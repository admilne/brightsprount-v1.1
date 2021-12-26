<?php
    $title = get_sub_field('title');
    $images = get_sub_field('images');
    $style = get_sub_field('style');
?>

<div class="page-section page-section--<?php echo $style; ?>">
    <div class="page-container-wrap">
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
</div><!-- /.page-section -->
