<?php

/* THEME CONSTANTS */

define('THEME_IMAGES', get_template_directory_uri() . "/a/img/");



/* CRUCIAL THEME FILES
------------------------------------------------------------------------------------ */

/* Load theme resources - CSS and JavaScript files */
require_once(dirname(__FILE__) . "/includes/crucial/theme-resources.php");

/* Add style sheet for WordPress text editor */
require_once(dirname(__FILE__) . "/includes/crucial/editor-styles.php");

/* Custom menus */
require_once(dirname(__FILE__) . "/includes/crucial/custom-menus.php");

/* Enable thumbnail support */
require_once(dirname(__FILE__) . "/includes/crucial/thumbnail-support.php");

/* Prevent images linking to themselves by default when inserting in to a page */
require_once(dirname(__FILE__) . "/includes/crucial/no-link-images.php");

/* Customise admin footer */
require_once(dirname(__FILE__) . "/includes/crucial/custom-admin-footer.php");

/* Custom login logo */
require_once(dirname(__FILE__) . "/includes/crucial/custom-login-logo.php");

/* Editable site logo */
require_once(dirname(__FILE__) . "/includes/crucial/editable-site-logo.php");



/* OPTIONAL THEME FILES
------------------------------------------------------------------------------------ */

/* Create custom post types */
require_once(dirname(__FILE__) . "/includes/optional/custom-post-types.php");

/* Create custom taxonomies */
// require_once(dirname(__FILE__) . "/includes/optional/custom-taxonomies.php");

/* Create widget areas */
require_once(dirname(__FILE__) . "/includes/optional/widget-areas.php");

/* Enable excerpt support */
// require_once(dirname(__FILE__) . "/includes/optional/excerpt-support.php");

/* Enable selection of front end styles to be selected in post / page editor */
require_once(dirname(__FILE__) . "/includes/optional/customise-mce-editor.php");

/* Add colours to TinyMCE editor */
// require_once(dirname(__FILE__) . "/includes/optional/tiny-mce-colours.php");

/* Remove dashboard widgets */
// require_once(dirname(__FILE__) . "/includes/optional/remove-dashboard-widgets.php");

/* Custom welcome message on WordPress dashboard */
// require_once(dirname(__FILE__) . "/includes/optional/custom-welcome-message.php");

/* Custom welcome message on WordPress dashboard */
// require_once(dirname(__FILE__) . "/includes/optional/custom-dashboard-widgets.php");

/* Remove non essential admin menu items */
// require_once(dirname(__FILE__) . "/includes/optional/remove-menu-items.php");

/* Allow specific block types in Gutenberg */
// require_once(dirname(__FILE__) . "/includes/optional/allowed-gutenberg-blocks.php");

/* Increase the max number of posts per page */
// require_once(dirname(__FILE__) . "/includes/optional/increase-posts-per-page.php");

/* Create custom image sizes */
require_once(dirname(__FILE__) . "/includes/optional/create-custom-image-sizes.php");

/* Create custom WYSIWYG editor toolbars */
require_once(dirname(__FILE__) . "/includes/optional/create-custom-wysiwyg-toolbars.php");

/* Custom shortcodes */
require_once(dirname(__FILE__) . "/includes/optional/custom-shortcodes.php");

/* ACF options page */
require_once(dirname(__FILE__) . "/includes/optional/custom-options-page.php");

/* ACF options page */
require_once(dirname(__FILE__) . "/includes/optional/dynamically-populate-colour-selections.php");



/* UTILITY FUNCTIONS
------------------------------------------------------------------------------------ */

// Function to limit the number of words in a string
require_once(dirname(__FILE__) . "/includes/utilities/limit-words.php");

// Get all sub pages
require_once(dirname(__FILE__) . "/includes/utilities/get-sub-pages.php");

// Get meta information about an image when provided with the id
require_once(dirname(__FILE__) . "/includes/utilities/get-image-meta.php");

// Get the latest blog posts
require_once(dirname(__FILE__) . "/includes/utilities/get-latest-posts.php");

// Dump data
require_once(dirname(__FILE__) . "/includes/utilities/dd.php");


?>