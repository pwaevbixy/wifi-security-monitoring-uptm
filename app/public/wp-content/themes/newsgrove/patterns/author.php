<?php
/**
 * Title: Author
 * Slug: newsgrove/author
 * Categories: newsgrove
 * Keywords: author
 * Block Types: core/post-content
 * Post Types: page, wp_template 
 */
?>
<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"link-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-link-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"id":515,"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-515" style="border-radius:100%;object-fit:cover;width:150px;height:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px"},"spacing":{"margin":{"bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:0;font-size:24px;font-style:normal;font-weight:700"><?php echo esc_html__( 'John Doe', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><em><?php echo esc_html__( 'Senior Editor', 'newsgrove' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Aliquam eu nunc. Nam eget dui. Ut non enim eleifend felis pretium feugiat. Donec quam felis, ultricies nec,', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->