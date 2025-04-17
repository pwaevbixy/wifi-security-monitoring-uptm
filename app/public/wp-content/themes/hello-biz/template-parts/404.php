<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloBiz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main">

	<?php if ( apply_filters( 'hello-plus-theme/page_title', true ) ) : ?>
		<div class="page-header">
			<h1 class="entry-title"><?php echo esc_html__( 'The page can&rsquo;t be found.', 'hello-biz' ); ?></h1>
		</div>
	<?php endif; ?>

	<div class="page-content">
		<p><?php echo esc_html__( 'It looks like nothing was found at this location.', 'hello-biz' ); ?></p>
	</div>

</main>
