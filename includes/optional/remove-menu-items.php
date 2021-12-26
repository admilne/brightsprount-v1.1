<?php
function adm_remove_menus() {
	remove_menu_page( 'themes.php' );           // Appearance
	remove_menu_page( 'plugins.php' );          // Plugins
	remove_menu_page( 'users.php' );            // Users
	remove_menu_page( 'tools.php' );            // Tools
	remove_menu_page( 'options-general.php' );  // Settings
    remove_menu_page( 'theme-editor.php' );     // Settings
}
add_action( 'admin_menu', 'adm_remove_menus' );
