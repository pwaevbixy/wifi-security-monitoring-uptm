<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Newsxo
 */

if ( ! is_active_sidebar( 'front-page-left' ) ) { return; }

$sticky_sidebar = get_theme_mod('sticky_sidebar_toggle', true) == true ? ' bs-sticky' : '';

if ( is_active_sidebar( 'front-page-right' ) ) { ?>
	<aside class="col-lg-3">
		<div id="sidebar-left" class="bs-sidebar<?php echo esc_attr($sticky_sidebar); ?>">
			<?php dynamic_sidebar( 'front-page-left' ); ?>
		</div>
	</aside><!-- #secondary -->
<?php } else { ?>
	<aside class="col-lg-4">
		<div id="sidebar-left" class="bs-sidebar<?php echo esc_attr($sticky_sidebar); ?>">
			<?php dynamic_sidebar( 'front-page-left' ); ?>
		</div>
	</aside><!-- #secondary -->
<?php } ?>
