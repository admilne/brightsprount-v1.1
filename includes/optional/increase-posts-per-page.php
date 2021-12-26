<?
add_filter( 'rest_post_query', 'change_post_per_page', 10, 2 );

function change_post_per_page( $args, $request ) {
    $max = max( (int) $request->get_param( 'custom_per_page' ), 1000 );
    $args['posts_per_page'] = $max;    
    return $args;
}
    