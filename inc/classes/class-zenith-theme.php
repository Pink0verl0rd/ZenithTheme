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
        // Load Class
        $this->set_hooks();
    }
    protected function set_hooks(){
        // Actions and filters
    }
}