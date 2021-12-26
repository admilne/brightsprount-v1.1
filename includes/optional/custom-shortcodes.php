<?php

function brightsprout_button_shortcode($atts) {
    extract(shortcode_atts(array(
        'title' => 'Contact us',
        'url' => '#footer-contact-form',
        'target' => '',
    ), $atts));

    return '<a class="button" href="' . $url . '" target="' . $target . '">' . $title . '</a>';
}
add_shortcode('button', 'brightsprout_button_shortcode');
