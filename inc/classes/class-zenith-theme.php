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
        Menus::get_instance();
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
        ]); // Logo
        add_theme_support('custom-background',[
            'default-color'      => '#fff',
            'default-image'      => '',

        ]);
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');   
        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script' 
        ]);
        add_editor_style(); //  Includes the Editor style sheet
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        add_image_size( 'featured-thumbnail', 350, 233, true);

        // Max width will be set all over the place 
        global $content_width;
        if ( !isset($content_width)){
            $content_width = 1240;
        }
    }   
}