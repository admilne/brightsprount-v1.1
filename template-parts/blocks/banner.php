<?php
    $image = get_sub_field('image');
    $text = get_sub_field('text', false, false);
    $side = strtolower( get_sub_field('side') );
?>

<div class="banner">
    <img src="<?php echo $image['sizes']['banner']; ?>" alt="<?php echo $image['alt']; ?>">

    <div class="banner__textArea <?php echo "banner__textArea--$side"; ?>">
        <div class="banner__textContent">
            <?php echo $text; ?>
        </div>
    </div>

    <div class="banner__overlay"></div>
</div>
