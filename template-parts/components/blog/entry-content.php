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
    }
    else {
        zenith_the_excerpt(200);
    }
    ?>
</div>