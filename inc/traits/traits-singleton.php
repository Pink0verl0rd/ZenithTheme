<?php 

namespace ZENITH_THEME\Inc\Traits;

trait Singleton {
    public function __construct() {

    }
    public function __clone(){

    }
    final public static function get_instance(){

        static $instance = [];

        $calledClass = get_called_class();

        if ( !isset( $instance[$calledClass] )  ) {
            $instance[$calledClass] = new $calledClass();
            
            do_action( sprintf( 'zenith_theme_singleton_init%s', $calledClass ) ); // Hook for any addtional functionalitiy 
        }
        return $instance[$calledClass];
    }
}