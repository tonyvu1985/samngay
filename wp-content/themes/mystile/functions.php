<?php

/* Register a search widget */
function search_widgets_init() {
 
	register_sidebar( array(
		'name' => 'Header Search Sidebar',
		'id' => 'header_search__sidebar',
		'before_widget' => '<li class="search">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'search_widgets_init' );
/* end search widget */

add_action( 'wp_enqueue_scripts', 'custom_frontend_scripts' );
function custom_frontend_scripts() {

global $post, $woocommerce;

$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
wp_deregister_script( 'jquery-cookie' );
wp_register_script( 'jquery-cookie', $woocommerce->plugin_url() . '/assets/js/jquery-cookie/jquery_cookie' . $suffix . '.js', array( 'jquery' ), '1.3.1', true );

}



// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Define the theme-specific key to be sent to PressTrends.
define( 'WOO_PRESSTRENDS_THEMEKEY', 'zdmv5lp26tfbp7jcwiw51ix9sj389e712' );

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/theme-functions.php', 		// Custom theme functions
				'includes/theme-actions.php', 			// Theme actions & user defined hooks
				'includes/theme-comments.php', 			// Custom comments/pingback loop
				'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				'includes/sidebar-init.php', 			// Initialize widgetized areas
				'includes/theme-widgets.php',			// Theme widgets
				'includes/theme-install.php',			// Theme installation
				'includes/theme-woocommerce.php',		// WooCommerce options
				'includes/theme-plugin-integrations.php'	// Plugin integrations
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/










/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>
