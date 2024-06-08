<?php
/**
 * Title: Latest News
 * Slug: one-business-blocks/latest-news
 * Categories: one-business-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"white","className":"blog-section","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group blog-section has-white-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"19px"} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":" wow bounceInUp"} -->
<h3 class="wp-block-heading has-text-align-center wow bounceInUp has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('LATEST NEWS','one-business-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"regular"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color has-regular-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit','one-business-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"radius":"10px"}},"backgroundColor":"white","className":"blog-box wow shake","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-box wow shake has-white-background-color has-background" style="border-radius:10px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"customOverlayColor":"#000e0d","className":"blog-box","layout":{"type":"constrained"}} -->
<div class="wp-block-cover blog-box"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#000e0d"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"blog-date-box","layout":{"type":"default"}} -->
<div class="wp-block-group blog-date-box"><!-- wp:post-date {"textAlign":"right","format":"M y","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","className":"blog-date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"textAlign":"center","excerptLength":25} /-->

<!-- wp:read-more {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','one-business-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->