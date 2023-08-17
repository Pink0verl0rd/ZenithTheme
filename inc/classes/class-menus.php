<?php
/**
 * Register menus
 * 
 * @package Zenith
 */

namespace ZENITH_THEME\Inc;
use ZENITH_THEME\Inc\Traits\Singleton;

class Menus {

    use Singleton;

    protected function __construct(){
        // Load Class
        $this->set_hooks();
    }
    protected function set_hooks(){

        /**
         * Actions
         */ 
        add_action('init',[$this, 'register_menus']);

    }

    public function register_menus(){
        register_nav_menu( 'zenith-header-menu', __( 'Header Menu', 'zenith' ) );
        register_nav_menu( 'zenith-footer-menu', __( 'Footer Menu', 'zenith' ) );
    }

    public function get_menu_id($location){
        // Get all menus
        $locations = get_nav_menu_locations();

        // Get menu by ID
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }
}