<?php

add_action( 'admin_menu', 'one_business_blocks_gettingstarted' );
function one_business_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'one-business-blocks'), esc_html__('Theme Documentation', 'one-business-blocks'), 'edit_theme_options', 'one-business-blocks-guide-page', 'one_business_blocks_guide');
}

function one_business_blocks_admin_theme_style() {
   wp_enqueue_style('one-business-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'one_business_blocks_admin_theme_style');

if ( ! defined( 'ONE_BUSINESS_BLOCKS_SUPPORT' ) ) {
define('ONE_BUSINESS_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/one-business-blocks/','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_REVIEW' ) ) {
define('ONE_BUSINESS_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/one-business-blocks/reviews/','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_LIVE_DEMO' ) ) {
define('ONE_BUSINESS_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/ovation-one-login-business-pro/','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_BUY_PRO' ) ) {
define('ONE_BUSINESS_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/wordpress-business-theme/','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_PRO_DOC' ) ) {
define('ONE_BUSINESS_BLOCKS_PRO_DOC',__('https://ovationthemes.com/docs/ot-one-login-business-pro/','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_FREE_DOC' ) ) {
define('ONE_BUSINESS_BLOCKS_FREE_DOC',__('https://ovationthemes.com/docs/ot-one-business-blocks-free-doc','one-business-blocks'));
}
if ( ! defined( 'ONE_BUSINESS_BLOCKS_THEME_NAME' ) ) {
define('ONE_BUSINESS_BLOCKS_THEME_NAME',__('Premium One Business Blocks Theme','one-business-blocks'));
}

/**
 * Theme Info Page
 */
function one_business_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'one-business-blocks'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'one-business-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'one-business-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','one-business-blocks'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','one-business-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','one-business-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','one-business-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','one-business-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','one-business-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','one-business-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','one-business-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','one-business-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','one-business-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(ONE_BUSINESS_BLOCKS_THEME_NAME); ?></h3>
				<img class="one_business_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'one-business-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'one-business-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( ONE_BUSINESS_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'one-business-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'one-business-blocks');?> </li>                 
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'one-business-blocks');?> </li>
					<li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'one-business-blocks');?> </li>
               <li class="upsell-one_business_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'one-business-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>