<?php
// Define paths
define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('THEME_FUN', THEME_DIR . '/assets/php');
define('THEME_IMG', trailingslashit(esc_url(get_template_directory_uri().'/assets/img')));
// Disable block editor
add_filter('use_block_editor_for_post','__return_false');
// Disable text editor on Pages and Posts
add_action( 'init', function() {
	// remove_post_type_support( 'post', 'editor' );
	remove_post_type_support( 'page', 'editor' );
	add_theme_support( 'post-thumbnails' );
	}, 99);
// Register Scripts (Assets)
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts(){
	wp_enqueue_style( 'tailwind', THEME_URI.'assets/compiled/tailwind.css');
	wp_enqueue_style( 'theme', THEME_URI.'assets/compiled/theme.css');
	wp_enqueue_script('theme', THEME_URI.'assets/compiled/theme.js', '', '', true);
}
// Theme Functions
add_action( 'after_setup_theme', 'theme_functions');
function theme_functions(){
	// Remove useless JQuery Migrate script
	require THEME_FUN . '/wp-remove-jquery-migrate.php';
	// Register WP Menus : primary-left, primary-right, mobile
	require THEME_FUN . '/wp-register-menus.php';
	// Allow SVG via media upload
	require THEME_FUN . '/wp-php-allow-svg.php';
	// Function to get menu items with subitems (if exist)
	require THEME_FUN . '/wp-menu-array.php';
	// Register "Apartaments" WP Post type
	require THEME_FUN . '/post-type-apartaments.php';
	// Register "Locations" WP Post type
	require THEME_FUN . '/post-type-locations.php';
	// Register "Building" taxonomy for "Apartaments" WP Post type
	require THEME_FUN . '/taxonomy-building.php';
	// ACF Options Page + Subpages
	require THEME_FUN . '/php-acf-options-page.php';
	// AJAX fetch locations
	require THEME_FUN . '/php-ajax-locations.php';
	// AJAX fetch apartaments talbe
	// Apartaments TABLE template
	require THEME_FUN . '/php-ajax-apartaments-table.php';
	// AJAX fetch apartaments list
	// Apartaments LIST template
	require THEME_FUN . '/php-ajax-apartaments-list.php';
}