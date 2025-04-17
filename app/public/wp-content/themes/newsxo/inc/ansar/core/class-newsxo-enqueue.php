<?php
/**
 * Enqueue and register scripts and styles.
 */
class Newsxo_Enqueue_Scripts {

	/**
	 * Check if debug is on
	 *
	 * @var boolean
	 */
	private $is_debug;

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		add_action('wp_enqueue_scripts',  array( $this, 'newsxo_scripts_n_styles',) );

		add_action('admin_enqueue_scripts',  array( $this, 'newsxo_admin_scripts',) );

		add_action('wp_footer', array( $this, 'newsxo_custom_js',) );

		add_action('wp_print_footer_scripts',  array( $this, 'newsxo_skip_link_focus_fix',) );
		
		add_action('customize_controls_print_footer_scripts',  array( $this, 'newsxo_customizer_scripts',) );
	}

	/**
	 * Enqueue styles and scripts.
	 *
	 * @since 1.0.0
	 */

	public function newsxo_scripts_n_styles() {

		wp_enqueue_style('all-css',get_template_directory_uri().'/assets/css/all.css');
	
		wp_enqueue_style('dark', get_template_directory_uri() . '/assets/css/colors/dark.css');
		
		wp_enqueue_style('default-color', get_template_directory_uri() . '/assets/css/colors/default-color.css');
	
		wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/sass/core.css');
		
		wp_style_add_data('core', 'rtl', 'replace' );
		
		wp_enqueue_style('newsxo-style', get_stylesheet_uri() );
		
		wp_style_add_data('newsxo-style', 'rtl', 'replace' );
		
		wp_enqueue_style('wp-core', get_template_directory_uri() . '/assets/css/sass/wp-core.css');
	
		wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css');
		
		wp_enqueue_style('menu-core-css', get_template_directory_uri() . '/assets/css/sm-core-css.css');
		
		wp_enqueue_style('smartmenus',get_template_directory_uri().'/assets/css/sm-clean.css');	 
	
		/* Js script */
	
		wp_enqueue_script('newsxo-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'));
	
		wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'));
	
		wp_enqueue_script('sticky-js', get_template_directory_uri() . '/assets/js/hc-sticky.js' , array('jquery'));
	
		wp_enqueue_script('sticky-header-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js' , array('jquery'));
	
		wp_enqueue_script('smartmenus-js', get_template_directory_uri() . '/assets/js/jquery.smartmenus.js');
	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	
		wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.min.js', array('jquery'));
	}
	
	public function newsxo_admin_scripts() {
	
		wp_enqueue_script( 'media-upload' );
	
		wp_enqueue_media();
	
		wp_enqueue_style('newsxo-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css' );

		wp_enqueue_script('newsxo-admin-script', get_template_directory_uri() . '/inc/ansar/customizer-admin/js/admin-script.js', array( 'jquery' ), '', true );
		
		wp_localize_script('newsxo-admin-script', 'newsxo_ajax_object',
			array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
		);
		
		wp_enqueue_style('newsxo-admin-style-css', get_template_directory_uri() . '/assets/css/customizer-controls.css');
	}
	
	//Custom Color
	public function newsxo_custom_js() {
	
		wp_enqueue_script('newsxo_custom-js', get_template_directory_uri() . '/assets/js/custom.js' , array('jquery'));	
		
		wp_enqueue_script('newsxo-dark', get_template_directory_uri() . '/assets/js/dark.js' , array('jquery'));
	
		theme_options_color();
	
		theme_options_dark_color();
	}

	/**
	 * Fix skip link focus in IE11.
	 *
	 * This does not enqueue the script because it is tiny and because it is only for IE11,
	 * thus it does not warrant having an entire dedicated blocking script being loaded.
	 *
	 * @link https://git.io/vWdr2
	 */
	public function newsxo_skip_link_focus_fix() {
		// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
		</script>
		<?php
	}

	public function newsxo_customizer_scripts() {
		wp_enqueue_style( 'newsxo-customizer-styles', get_template_directory_uri() . '/assets/css/customizer-controls.css' );
		wp_enqueue_style('newsxo-custom-controls-css', get_template_directory_uri() . '/inc/ansar/customize/css/customizer.css');
	}
}
