<?php
/**
 * Title: Header
 * Slug: one-business-blocks/header
 * Categories: one-business-blocks, header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"0"}}},"backgroundColor":"heading","className":"upper-header ","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group upper-header has-heading-background-color has-background" style="margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"bottom":{"color":"var:preset|color|white","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"inner-upper-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-upper-header" style="border-bottom-color:var(--wp--preset--color--white);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"wow fadeInLeftBig"} -->
<div class="wp-block-column is-vertically-aligned-center wow fadeInLeftBig" style="flex-basis:66.66%"><!-- wp:columns {"verticalAlignment":"center","className":"header-details"} -->
<div class="wp-block-columns are-vertically-aligned-center header-details"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/telephone.png'); ?>" alt="" class="wp-image-27"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family"><?php esc_html_e('1(868) 225-6155','one-business-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/envelope.png'); ?>" alt="" class="wp-image-29"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family"><?php esc_html_e('support@example.com','one-business-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"wow fadeInRightBig"} -->
<div class="wp-block-column is-vertically-aligned-center wow fadeInRightBig" style="flex-basis:33.33%"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"google"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0"}}},"backgroundColor":"heading","className":"menu-header","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header has-heading-background-color has-background" style="margin-top:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:25%"><!-- wp:group {"textColor":"primary","className":"logodiv","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group logodiv has-primary-color has-text-color"><!-- wp:site-logo {"width":43,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"textTransform":"capitalize","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"barlow"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"className":"nav-block wow rubberBand"} -->
<div class="wp-block-column is-vertically-aligned-center nav-block wow rubberBand" style="padding-left:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"primary","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"barlow"} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Project","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"search-block"} -->
<div class="wp-block-column is-vertically-aligned-center search-block" style="flex-basis:10%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"button-block"} -->
<div class="wp-block-column is-vertically-aligned-center button-block" style="flex-basis:15%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"heading","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"has-source-sans-3-font-family","fontSize":"extra-small","fontFamily":"barlow"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-barlow-font-family has-extra-small-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Let’s Talk','one-business-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->