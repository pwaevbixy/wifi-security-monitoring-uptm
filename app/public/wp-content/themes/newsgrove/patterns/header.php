<?php
/**
 * Title: Header
 * Slug: newsgrove/header
 * Categories: header, newsgrove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:site-title {"level":0,"textAlign":"center","style":{"spacing":{"margin":{"right":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"64px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"playfair"} /-->

<!-- wp:site-tagline {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"italic","fontWeight":"500"}},"textColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-secondary-background-color has-background" id="sticky-header" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"base-2","icon":"menu","overlayTextColor":"contrast","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base-2","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|10","right":"var:preset|spacing|10","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:8px;padding-right:var(--wp--preset--spacing--10);padding-bottom:8px;padding-left:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'Suscribe Us!', 'newsgrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->