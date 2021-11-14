<?php
/**
 * Nautilus: Block Styles
 *
 * @since 0.1.0
 */

if ( ! function_exists( 'nautilus_register_block_patterns' ) ) :
 	/**
 	 * Registers block patterns and categories.
 	 *
 	 * @since Twenty Twenty-Two 1.0
 	 */
    function nautilus_register_block_patterns() {
        register_block_style(
        	'core/image',
        	array(
        		'name'  => 'caption-left',
        		'label' => __( 'Caption Left', 'nautilus' ),
        	)
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'caption-right',
                'label' => __( 'Caption Right', 'nautilus' ),
            )
        );
        register_block_style(
        	'core/gallery',
        	array(
        		'name'  => 'caption-left',
        		'label' => __( 'Caption Left', 'nautilus' ),
        	)
        );
        register_block_style(
            'core/gallery',
            array(
                'name'  => 'caption-right',
                'label' => __( 'Caption Right', 'nautilus' ),
            )
        );

        register_block_style(
        	'core/post-terms',
        	array(
        		'name'  => 'outline',
        		'label' => __( 'Outline', 'nautilus' ),
        	)
        );

        register_block_style(
            'core/separator',
            array(
                'name'  => 'waves',
                'label' => __( 'Waves', 'nautilus' ),
            )
        );
    }
endif;
add_action( 'init', 'nautilus_register_block_patterns', 9 );
