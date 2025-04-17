<?php
/**
 * Title: Trending News
 * Slug: newsgrove/trending-news
 * Categories: newsgrove
 * Keywords: trending news
 */
?>
<!-- wp:group {"metadata":{"name":"Trending News"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"}}} -->
<h2 class="wp-block-heading" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Trending Today', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline btn-has-arrow","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button is-style-outline btn-has-arrow"><a class="wp-block-button__link wp-element-button" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'View All', 'newsgrove' ); ?><img class="wp-image-567" style="width: 21px;" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":32,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"250px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->