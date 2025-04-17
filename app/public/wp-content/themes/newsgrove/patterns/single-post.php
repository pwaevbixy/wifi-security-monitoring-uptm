<?php
 /**
  * Title: Single Post
  * Slug: newsgrove/single-post
  * Inserter: no
  */
?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":232,"minHeightUnit":"px","tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}}},"textColor":"link-color"} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-color"}}}},"textColor":"link-color"} /--></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-accent-7-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-content /-->

<!-- wp:post-terms {"term":"category","prefix":"\u003cstrong\u003eCategories\u003c/strong\u003e: "} /-->

<!-- wp:post-terms {"term":"post_tag"} /-->

<!-- wp:post-comments-form {"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"15px","right":"15px"}}},"backgroundColor":"primary","textColor":"base-2"} -->
<h2 class="wp-block-heading has-base-2-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px;font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Related Articles', 'newsgrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":0.74,"y":0.52},"minHeight":250,"contentPosition":"bottom center","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--10);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'No Posts Found', 'newsgrove' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"sticky-sidebar","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column sticky-sidebar" style="padding-left:0;flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"newsgrove","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->