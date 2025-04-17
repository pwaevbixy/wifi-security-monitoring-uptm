<?php
/**
 * Title: Featured News
 * Slug: newsgrove/featured-news
 * Categories: newsgrove
 * Keywords: featured news
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Featured News"},"style":{"border":{"top":{"color":"var:preset|color|accent-5","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|accent-5","width":"1px"},"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-top-color:var(--wp--preset--color--accent-5);border-top-width:1px;border-bottom-color:var(--wp--preset--color--accent-5);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"hide-post-format","layout":{"type":"constrained"}} -->
<div class="wp-block-group hide-post-format"><!-- wp:query {"queryId":3,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"150px","height":"120px","className":"image-width","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->