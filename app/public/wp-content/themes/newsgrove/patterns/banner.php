<?php
/**
 * Title: Banner
 * Slug: newsgrove/banner
 * Categories: banner, newsgrove
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:query {"queryId":11,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast-2","isUserOverlayColor":true,"minHeight":519,"minHeightUnit":"px","contentPosition":"bottom center","style":{"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;min-height:519px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-2-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"post_tag"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"base-2"} /-->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"height":"150px","style":{"border":{"radius":"0px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-terms {"term":"post_tag"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"15px","bottom":"15px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->