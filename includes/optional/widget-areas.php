<?php

function create_widget( $name, $id, $description, $before_widget = '', $after_widget = '', $before_title = '', $after_title = '' ) {
    $args = array(
        'name'          => __( $name ),
        'id'            => $id,
        'description'   => __( $description ),
        'before_widget' => $before_widget, // this allows you to add html content before the widget
        'after_widget'  => $after_widget, // this allows you to add html content after the widget
        'before_title'  => $before_title, // this allows you to add html content before the widget title
        'after_title'   => $after_title, // this allows you to add html content before the widget title
    );

    // This bit of code will then use your arguments to register your widget. Its called a sidebar
    // in WordPress because of its history with blogs
    register_sidebar( $args );
}

// This can now be called as many times as you like to create as many widgets as you need
// PLEASE NOTE THE ID MUST BE IN LOWECASE
create_widget( 'Footer text', 'footer_text', 'Text area in the footer', '', '', '<h4>', '</h4>');
create_widget( 'Copyright', 'copyright', 'Copyright text area in footer below social media icons', '', '', '<h4>', '</h4>');
