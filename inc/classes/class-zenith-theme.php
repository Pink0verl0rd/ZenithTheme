<?php 
/**
 * Bootstraps the Theme.
 * 
 * @package Zenith
 */

namespace ZENITH_THEME\Inc;

use ZENITH_THEME\Inc\Traits\Singleton;

class ZENITH_THEME {

    use Singleton;

    protected function __construct(){
        // Load Classes
        Assets::get_instance();
        $this->set_hooks();
    }
    protected function set_hooks(){

        /**
         * Actions
         */ 
        

        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag'); // Expects WordPress to provide the title tag instead
        add_theme_support('custom-logo', [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => [ 'site-title', 'site-description' ],
            'unlink-homepage-logo' => true, 
        ]); // Expects WordPress to provide the title tag instead
    }
}