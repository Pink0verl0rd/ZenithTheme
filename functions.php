<?php
/**
 * Theme Functions.
 * 
 * @package Zenith
 */

// Define Constants
if ( !defined( 'ZENITH_DIR_PATH' ) ) {
    define( 'ZENITH_DIR_PATH', untrailingslashit(get_template_directory()));
}

if ( !defined( 'ZENITH_URI_PATH' ) ) {
    define( 'ZENITH_URI_PATH', untrailingslashit(get_template_directory_uri()));
}

// Include Auto Loader
require_once ZENITH_DIR_PATH . '/inc/helpers/autoloader.php';

// Create new instance of the main theme class
function zenith_get_theme_instance(){
    \ZENITH_THEME\Inc\ZENITH_THEME::get_instance();
}

zenith_get_theme_instance();

?>

