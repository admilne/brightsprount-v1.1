<?php

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    
    wp_add_dashboard_widget(
        'adm_custom_widget_1', // ID
        'Widget Title 1', // Title
        'adm_custom_widget_1' // Function that fills in content
    );

    wp_add_dashboard_widget(
        'adm_custom_widget_2', // ID
        'Widget Title 2', // Title
        'adm_custom_widget_2' // Function that fills in content
    );
}
 
function adm_custom_widget_1() {
    echo '<p>Here is the content for widget 1</p>';
}

function adm_custom_widget_2() {
    echo '<p>Here is the content for widget 2</p>';
}