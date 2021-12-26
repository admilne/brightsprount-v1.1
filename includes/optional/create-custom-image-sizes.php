<?php

/*
Parameters:
- Name: Image size identifier
- Width: Image width in pixels
- Height: Image height in pixels
- Crop: Whether to crop images to specified width and height or resize. An array can specify position of the crop area

Soft crop means WordPress will try to get as much of the image inside the the dimensions specified.
Hard crop means WordPress will simply chop off any of the image that appears outside the dimensions.
*/

add_image_size( 'banner', 3000, 1250, true );

/* Display custom image sizes in admin */
add_filter('image_size_names_choose', 'adm_custom_image_sizes');
function adm_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'banner'         => 'Banner',
    ));
}
