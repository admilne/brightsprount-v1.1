<?php

function adm_custom_welcome_panel() {
	?>
	<div class="welcome-panel-content">
		<h2>Welcome Andrew!</h2>
		<p>How are you today?</p>
	</div>
	<?php
}
remove_action('welcome_panel', 'wp_welcome_panel');
add_action( 'welcome_panel', 'adm_custom_welcome_panel' );