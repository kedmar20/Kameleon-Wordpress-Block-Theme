<?php
/**
 * Title: front-page
 * Slug: kameleon/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"uncategorized"} /-->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-content /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('', 'kameleon');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Das ist HomePage Template', 'kameleon');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Titel diese Posts:', 'kameleon');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->