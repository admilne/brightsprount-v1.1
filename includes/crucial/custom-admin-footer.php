<?php

function adm_custom_admin_footer () {
	echo '<span id="footer-thankyou">Built by Andrew Milne - Fearless Web Design</span>';
}
add_filter( 'admin_footer_text', 'adm_custom_admin_footer' );
