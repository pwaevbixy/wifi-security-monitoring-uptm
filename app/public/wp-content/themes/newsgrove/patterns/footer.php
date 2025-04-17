<?php
/**
 * Title: Footer
 * Slug: newsgrove/footer
 * Categories: footer,newsgrove
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'NewsGrove', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html__( 'Maecenas egestas arcu quis ligula mattis placerat. Cras dapibus. In auctor lobortis lacus. Nulla porta dolor. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor.', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"lineHeight":"0.5"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;line-height:0.5"><!-- wp:paragraph {"className":"footer-ph","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="footer-ph has-base-color has-text-color has-link-color"><?php echo esc_html__( '+01-123-245-678', 'newsgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"0.5"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:16px;line-height:0.5"><!-- wp:paragraph {"className":"footer-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="footer-mail has-base-color has-text-color has-link-color"><?php echo esc_html__( 'Example@example.com', 'newsgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-small-icon-size","align":"left","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"5px"},"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links alignleft has-small-icon-size has-visible-labels is-style-default" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Useful Links', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"base","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( "Photo's", 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":2,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-2 is-cropped"><!-- wp:image {"id":518,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-518"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":515,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-515"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":512,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-3.jpg" alt="" class="wp-image-512"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":509,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/about-us.jpg" alt="" class="wp-image-509"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":506,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-506"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Read This', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":27,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:columns {"style":{"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"color":{"background":"#fafafa59"}},"borderColor":"primary"} -->
<div class="wp-block-columns has-border-color has-primary-border-color has-background" style="border-width:1px;border-radius:6px;background-color:#fafafa59;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"90px","style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","bottom":"6px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:tag-cloud {"numberOfTags":2} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"top","style":{"border":{"top":{"color":"var:preset|color|base","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top" style="border-top-color:var(--wp--preset--color--base);border-top-width:1px;padding-top:var(--wp--preset--spacing--10)"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"footer-newsletter","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group footer-newsletter"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600"}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="font-size:21px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Suscribe to us now and stay updated with the latest news!', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Add Your Form Shortcode Here', 'newsgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size">
<?php echo esc_html__( 'Designed with', 'newsgrove' ); ?><a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="nofollow"> <?php echo esc_html__( 'WordPress ', 'newsgrove' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html__( 'Developed By ', 'newsgrove' ); ?> <a href="#"><?php echo esc_html__( 'Themegrove.com', 'newsgrove' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"newsgrove-scrool-top"} -->
<p class="newsgrove-scrool-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->