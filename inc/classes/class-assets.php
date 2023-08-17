<?php
/**
 * Enqueue theme assets
 * 
 * @package Zenith
 */

namespace ZENITH_THEME\Inc;
use ZENITH_THEME\Inc\Traits\Singleton;

class Assets {

    use Singleton;

    protected function __construct(){
        // Load Class
        $this->set_hooks();
        $this->register_scripts();
        $this->register_style();
    }
    protected function set_hooks(){

        /**
         * Actions
         */ 
        add_action('wp_enqueue_scripts',[$this, 'register_scripts']);
        add_action('wp_enqueue_scripts',[$this, 'register_style']);

    }
    public function register_style(){

        // Register Styles
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(ZENITH_DIR_PATH . '/style.css'), 'all');
        wp_register_style( 'bootstrap-css', ZENITH_URI_PATH . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        // Enqueue Styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');

    }
    public function register_scripts(){

        // Register Scripts
        wp_register_script('main-js', ZENITH_URI_PATH . '/assets/main.js', [], filemtime(ZENITH_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', ZENITH_URI_PATH . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        // Enqueue Scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');

    }
}