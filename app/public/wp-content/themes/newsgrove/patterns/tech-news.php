<?php
/**
 * Title: Tech News
 * Slug: newsgrove/tech-news
 * Categories: newsgrove
 * Keywords: tech news
 */
?>
<!-- wp:group {"metadata":{"name":"Tech News"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-5","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|accent-5","width":"1px"},"left":[]}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-7-background-color has-background" style="border-top-color:var(--wp--preset--color--accent-5);border-top-width:1px;border-bottom-color:var(--wp--preset--color--accent-5);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Technology', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline btn-has-arrow","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button is-style-outline btn-has-arrow"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'View All', 'newsgrove' ); ?><img class="wp-image-567" style="width: 21px;" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":32,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"black","isUserOverlayColor":true,"contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->