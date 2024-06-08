<?php
/**
 * One Business Blocks functions and definitions
 *
 * @package One Business Blocks
 */

if ( ! function_exists( 'one_business_blocks_setup' ) ) :
function one_business_blocks_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
endif; // one_business_blocks_setup
add_action( 'after_setup_theme', 'one_business_blocks_setup' );

function one_business_blocks_scripts() {
	wp_enqueue_style( 'one-business-blocks-basic-style', get_stylesheet_uri() );

	//animation
	wp_enqueue_script( 'one-business-blocks-wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'one-business-blocks-animate-css', get_template_directory_uri().'/assets/css/animate.css' );

	//font-awesome
	wp_enqueue_style( 'one-business-blocks-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('one-business-blocks-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'one_business_blocks_scripts' );

// Get start function
function one_business_blocks_custom_admin_notice() {
    // Check if the notice is dismissed
    if (!get_user_meta(get_current_user_id(), 'dismissed_admin_notice', true)) {
        // Check if not on the theme documentation page
        $one_business_blocks_current_screen = get_current_screen();
        if ($one_business_blocks_current_screen && $one_business_blocks_current_screen->id !== 'appearance_page_one-business-blocks-guide-page') {
            $one_business_blocks_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($one_business_blocks_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'one-business-blocks'); ?></p>
                    </div>
                    <a class="button-primary" href="themes.php?page=one-business-blocks-guide-page"><?php _e('Theme Documentation', 'one-business-blocks'); ?></a>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'one_business_blocks_custom_admin_notice');
// Dismiss notice function
function one_business_blocks_dismiss_admin_notice() {
    update_user_meta(get_current_user_id(), 'dismissed_admin_notice', true);
}
add_action('wp_ajax_one_business_blocks_dismiss_admin_notice', 'one_business_blocks_dismiss_admin_notice');
// Enqueue scripts and styles
function one_business_blocks_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('one-business-blocks-admin.js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
	
	wp_localize_script('one-business-blocks-admin.js', 'one_business_blocks_scripts_localize', array(
        'ajax_url' => esc_url(admin_url('admin-ajax.php'))
    ));
}
add_action('admin_enqueue_scripts', 'one_business_blocks_enqueue_admin_script');
// Reset the dismissed notice status when the theme is switched
function one_business_blocks_after_switch_theme() {
    delete_user_meta(get_current_user_id(), 'dismissed_admin_notice');
}
add_action('after_switch_theme', 'one_business_blocks_after_switch_theme');
//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );