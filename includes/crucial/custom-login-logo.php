<?php
function adm_custom_login_logo_url() {
	return esc_url( home_url( '/' ) );
}
add_filter( 'login_headerurl', 'adm_custom_login_logo_url' );

function adm_custom_login_logo_title() {
	return get_bloginfo( 'description' );;
}
add_filter( 'login_headertext', 'adm_custom_login_logo_title' );

function adm_custom_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo THEME_IMAGES; ?>logo.png );
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'adm_custom_login_logo' );
