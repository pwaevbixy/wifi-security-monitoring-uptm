<?php
/**
 * Title: Photo News
 * Slug: newsgrove/photo-news
 * Categories: newsgrove
 * Keywords: photo news
 */
?>
<!-- wp:group {"metadata":{"name":"Photo of the Day"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-5","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|accent-5","width":"1px"},"left":[]}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-7-background-color has-background" style="border-top-color:var(--wp--preset--color--accent-5);border-top-width:1px;border-bottom-color:var(--wp--preset--color--accent-5);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( "Photo's Of The Day", 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline btn-has-arrow","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button is-style-outline btn-has-arrow"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'View All ', 'newsgrove' ); ?><img class="wp-image-567" style="width: 21px;" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:gallery {"columns":6,"randomOrder":true,"linkTo":"none","sizeSlug":"medium"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped"><!-- wp:image {"id":515,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-515"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":518,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-3.jpg" alt="" class="wp-image-518"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":512,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-512"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":509,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-509"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":506,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-506"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":503,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-3.jpg" alt="" class="wp-image-503"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->