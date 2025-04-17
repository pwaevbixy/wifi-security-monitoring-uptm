<?php /**
 * AJAX handler to store the state of dismissible notices.
 */
function newsxo_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

add_action( 'wp_ajax_newsxo_dismissed_notice_handler', 'newsxo_ajax_notice_handler' );

function newsxo_deprecated_hook_admin_notice() {
    // Check if it's been dismissed...
    if ( ! get_option('dismissed-get_started', FALSE ) ) {
        // Added the class "notice-get-started-class" so jQuery pick it up and pass via AJAX,
        // and added "data-notice" attribute in order to track multiple / different notices
        // multiple dismissible notice states ?>
        <div class="newsxo-notice-started updated notice notice-get-started-class is-dismissible" data-notice="get_started">
            <div class="newsxo-notice clearfix">
                <div class="newsxo-notice-content">
                    <div class="newsxo-notice_text">
                        <div class="newsxo-hello">
                            <?php esc_html_e( 'Hello, ', 'newsxo' ); 
                            $current_user = wp_get_current_user();
                            echo esc_html( $current_user->display_name );
                            ?>
                            <img draggable="false" role="img" class="emoji" alt="👋🏻" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f44b-1f3fb.svg">                
                        </div>
                        <h1>
                            <?php $theme_info = wp_get_theme();
                            printf( esc_html__('Welcome to %1$s', 'newsxo'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
                        </h1>
                        <p>
	                            <?php
 		                            echo wp_kses(
 		                                sprintf(
 		                                    esc_html__("Thank you for choosing Newsxo theme. To take full advantage of the complete features of this theme, click the Import Demo and Install and Activate the %s Plugin, then use the demo importer and install the Newsxo Demo according to your need.", "newsxo"),
 		                                    '<a href="https://wordpress.org/plugins/ansar-import">Ansar Import</a>'
 		                                ),
 		                                array( 'a' => array( 'href' => array() ) ) // Allow the 'a' tag with 'href' attribute
 		                            );
 		                            ?>
 	                        </p>
                        <div class="panel-column-6">
                            <a class="newsxo-btn-get-started button button-primary button-hero newsxo-button-padding" href="#" data-name="" data-slug="">
                                <?php esc_html_e( 'Import Demo', 'newsxo' ) ?>
                            </a>
                            <a class="newsxo-btn-get-started-customize button button-primary button-hero newsxo-button-padding" href="<?php echo esc_url( admin_url( '/customize.php' ) ); ?>" data-name="" data-slug=""><?php esc_html_e( 'Customize Site', 'newsxo' ) ?></a>
                            <div class="newsxo-documentation">
                                <span aria-hidden="true" class="dashicons dashicons-external"></span>
                                <a class="newsxo-documentation" href="<?php echo esc_url('https://docs.themeansar.com/docs/newsxo-pro')?>" data-name="" data-slug="">
                                    <?php esc_html_e( 'View Documentation', 'newsxo' ) ?>
                                </a>
                            </div>
                            <div class="newsxo-demos">
                                <span aria-hidden="true" class="dashicons dashicons-external"></span>
                                <a class="newsxo-demos" href="<?php echo esc_url('https://demos.themeansar.com/newsxo-demos/')?>" data-name="" data-slug="">
                                    <?php esc_html_e( 'View Demos', 'newsxo' ) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="newsxo-notice_image">
                        <img class="newsxo-screenshot" src="<?php echo esc_url( get_theme_file_uri() . '/assets/images/customize.webp' ); ?>" alt="<?php esc_attr_e( 'Newsxo', 'newsxo' ); ?>" />
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'newsxo_deprecated_hook_admin_notice' );

/* Plugin Install */

add_action( 'wp_ajax_install_act_plugin', 'newsxo_admin_info_install_plugin' );

function newsxo_admin_info_install_plugin() {
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/ansar-import' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'ansar-import' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }

    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'ansar-import/ansar-import.php' );
    }
}