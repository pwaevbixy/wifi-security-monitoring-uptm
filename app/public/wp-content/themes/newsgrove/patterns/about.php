<?php
/**
 * Title: About
 * Slug: newsgrove/about
 * Categories: newsgrove
 * Keywords: about
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0px;padding-bottom:var(--wp--preset--spacing--50);padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"accent-7"} -->
<div class="wp-block-columns are-vertically-aligned-center has-accent-7-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"%","className":"o-anim-value-delay-0.8s"} -->
<div class="wp-block-column is-vertically-aligned-center o-anim-value-delay-0.8s"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( ' Sed magna purus fermentum eu', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( ' Phasellus nec sem in justo pellentesque facilisis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Morbi mattis ullamcorper velit. In hac habitasse platea dictumst. Quisque id odio.', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( ' Phasellus nec sem in justo pellentesque facilisis. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Morbi mattis ullamcorper velit. In hac habitasse platea dictumst. Quisque id odio.', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( ' Proin magna. Ut leo. Etiam rhoncus. Nullam quis ante. Morbi ac felis.', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Read More', 'newsgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","className":"has-border-radius"} -->
<div class="wp-block-column is-vertically-aligned-center has-border-radius has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"id":330,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-330" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":310,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-310" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":287,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-3.jpg" alt="" class="wp-image-287" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":286,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/about-us.jpg" alt="" class="wp-image-286" style="border-radius:8px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->