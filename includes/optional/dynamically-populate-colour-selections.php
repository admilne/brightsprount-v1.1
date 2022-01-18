<?php

$GLOBALS['brightSproutVars'] = array();

function acf_load_brand_colour_choices( $field ) {
    // reset choices
    $field['choices'] = array();

    // if has rows
    if( have_rows('brand_colours', 'option') ) {
        
        // while has rows
        while( have_rows('brand_colours', 'option') ) {
            
            // instantiate row
            the_row();
            
            // vars
            $value = get_sub_field('colour');
            $label = get_sub_field('name');
            
            // append to choices
            $field['choices'][ $label ] = $label;
            $GLOBALS['brightSproutVars']['brandColours'][$label] = $value;
        }
    }

    // return the field
    return $field;    
}
add_filter('acf/load_field/name=style', 'acf_load_brand_colour_choices');


function acf_load_text_colour_choices( $field ) {
    // reset choices
    $field['choices'] = array();

    // if has rows
    if( have_rows('text_colours', 'option') ) {
        
        // while has rows
        while( have_rows('text_colours', 'option') ) {
            
            // instantiate row
            the_row();
            
            // vars
            $value = get_sub_field('colour');
            $label = get_sub_field('name');
            
            // append to choices
            $field['choices'][ $label ] = $label;
            $GLOBALS['brightSproutVars']['textColours'][$label] = $value;
        }
    }

    // return the field
    return $field;    
}
add_filter('acf/load_field/name=text_colour', 'acf_load_text_colour_choices');
?>