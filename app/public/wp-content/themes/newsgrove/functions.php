<?php


/**
 * NewsGrove functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage NewsGrove
 * @since NewsGrove 1.0
 */

 if (!function_exists('newsgrove_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function newsgrove_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
        //post format support
        add_theme_support( 'post-formats', array('gallery', 'image', 'video', 'audio') );

    }

endif;
add_action('after_setup_theme', 'newsgrove_support');



/**
 * Enqueue assets scripts for both backend and frontend
 */
function newsgrove_block_assets(){

     // Enqueue theme stylesheet for the front-end.
	 wp_enqueue_style( 'newsgrove-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	 wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );  
	 wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
	 wp_enqueue_script('newsgrove-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true);

}

add_action('enqueue_block_assets', 'newsgrove_block_assets');

// register own theme pattern

function newsgrove_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'newsgrove' => array( 'label' => __( 'NewsGrove', 'newsgrove' ) )
	);

	$block_pattern_categories = apply_filters( 'newsgrove_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'newsgrove_register_pattern_category');

// Admin Info
require get_template_directory() . '/class/admin-info.php';
