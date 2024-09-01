<?php
/**
 * Title: wp-custom-template-individuelles-1
 * Slug: kameleon/wp-custom-template-individuelles-1
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-2","align":"center"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-content /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:query {"queryId":19,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Füge Text oder Blöcke hinzu, die angezeigt werden, wenn eine Abfrage keine Ergebnisse ausgibt."} -->
<p><?php esc_html_e('', 'kameleon');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer-2"} /-->