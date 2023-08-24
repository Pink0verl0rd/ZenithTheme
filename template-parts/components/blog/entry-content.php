<?php
/**
 * Content Template
 * 
 * To be used in Wordpress The Loop
 * 
 * @package zenith
 */

?>


<div class="entry-content">
    <?php
    if ( is_single() ) {
        the_content( 
            sprintf(
                wp_kses( // We do kses for security 
                    __('Continue reading %s <span class="meta-nav">&rarr;</span>','zenith'),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title( '<span class="screen-reader-text">"', '"</span>',false)
            )
        );
        wp_link_pages( [
            'before'      		=> '<div class="page-links-zenith">' . esc_html__('Pages:','zenith'),
            'after'       		=> '</div>',
        ] );    
    }
    else {
        zenith_the_excerpt(200);
    }
    echo zenith_excerpt_more();
    ?>
</div>