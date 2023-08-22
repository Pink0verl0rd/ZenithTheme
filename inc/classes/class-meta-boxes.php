<?php
/**
 * Register Meta Boxes
 * 
 * @package Zenith
 */


namespace ZENITH_THEME\Inc;

use ZENITH_THEME\Inc\Traits\Singleton;

class Meta_Boxes {

    use Singleton;

    protected function __construct(){
        // Load Class
        $this->set_hooks();
    }
    protected function set_hooks(){

        /**
         * Actions
         */ 
        add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_boxes' ] );

    }

    
	/**
	 * Add custom meta box.
	 *
	 * @return void
	 */
    function add_custom_meta_boxes($post){
        $screens = [ 'post' ];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'hide-page-title',                 // Unique ID
                __( 'Hide page title', 'zenith'),      // Box title
                [$this, 'custom_meta_box_html'],  // Content callback, must be of type callable
                $screen,                            // Post type
                'side' // context
            );
        }
    }

    /**
	 * Custom meta box HTML( for form )
	 *
	 * @param object $post Post.
	 *
	 * @return void
	 */
    public function custom_meta_box_html( $post ) {
        $value = get_post_meta( $post->ID, '_hide_page_title', true );
        ?>
        <label for="zenith-field"><?php esc_html_e('Hide the page title','zenith'); ?></label>
        <select name="zenith-field" id="zenith-field" class="postbox">
            <option value=""><?php esc_html_e('Select','zenith'); ?></option>
            <option value="yes">
                <?php selected($value,'yes'); ?>
                <?php esc_html_e('Yes','zenith'); ?>
            </option>
            <option value="no">
                <?php selected($value,'no'); ?>
                <?php esc_html_e('No','zenith'); ?></option>
        </select>
        <?php
    }
}