<?php
// Security check to prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_menu', 'lps_menu' );

/**
 * Summary of lps_menu
 * Function to create menu page for admin pannel
 */
function lps_menu() {
	add_menu_page( 'Login Page Styler', 'Login Page Styler', 'manage_options', 'lps_option', 'lps_settings_page', '', 20 );
	add_action( 'admin_init', 'lps_register_settings' );

}

add_action( 'init', 'lps_load_textdomain' );

/**
 * Summary of lps_load_textdomain
 * Function to load textdomain
 */
function lps_load_textdomain() {
	load_plugin_textdomain( 'login-page-styler', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}


/**
 * Summary of lps_register_settings
 * Funtion to register settings set by user
 */
function lps_register_settings() {

	register_setting( 'lps-settings-group', 'lps_login_logo_hide', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_logo_msg_hide', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_on_off', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_blog_link_hide', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_lang_hide', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_nav_link_hide', 'absint' );
	register_setting( 'lps-settings-group', 'lps_auto_rememberme', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_copyright ', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_login_session_expire', 'absint' );
	register_setting( 'lps-settings-group', 'lps_copyright_color', 'sanitize_hex_color' );

	register_setting( 'lps-settings-group', 'lps_login_logo_link', 'esc_url' );
	register_setting( 'lps-settings-group', 'lps_login_logo_tittle', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_login_logo', 'esc_url' );
	register_setting( 'lps-settings-group', 'lps_login_logo_width', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_logo_height', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_text_logo', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_textlogo_color', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_textlogo_color_hover', 'sanitize_text_field' );

	register_setting( 'lps-settings-group', 'lps_login_bg_repeat', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_body_bg_img', 'esc_url' );
	register_setting( 'lps-settings-group', 'lps_login_background_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_background_image', 'esc_url' );
	register_setting( 'lps-settings-group', 'lps_slideshow_animation_style', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_slideshow_time', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_body_bg_slideshow', 'sanitize_lps_body_bg_slideshow' );

	register_setting( 'lps-settings-group', 'lps_login_form_input_color', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_login_form_input_color_opacity', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_login_form_border_style', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_login_form_input_border_style', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_login_form_input_border_size', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_form_width', 'absint' );
	// register_setting( 'lps-settings-group', 'lps_login_form_height', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_form_border_size', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_form_bg', 'esc_url' );
	register_setting( 'lps-settings-group', 'lps_login_form_color_opacity', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_login_form_border_radius', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_label_size', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_label_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_form_border_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_form_input_feild_border_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_remember_label_size', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_form_position', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_form_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_form_input_feild_border_radius', 'absint' );
	// register_setting('lps-settings-group', 'lps_login_form_label_font');.

	register_setting( 'lps-settings-group', 'lps_box_shadow_vertical', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_box_shadow_horizontal', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_box_shadow_blur', 'absint' );
	register_setting( 'lps-settings-group', 'lps_box_shadow_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_box_shadow_opacity', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_box_shadow_spread', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_animation', 'sanitize_text_field' );

	register_setting( 'lps-settings-group', 'lps_login_nav_size', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_nav_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_nav_hover_color', 'sanitize_hex_color' );

	register_setting( 'lps-settings-group', 'lps_login_captcha', 'absint' );
	register_setting( 'lps-settings-group', 'lps_reg_captcha', 'absin t' );
	register_setting( 'lps-settings-group', 'lps_lost_captcha', 'absint' );
	register_setting( 'lps-settings-group', 'rs_site_key', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'rs_private_key', 'sanitize_text_field' );

	register_setting( 'lps-settings-group', 'lps_login_button_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_border_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_color_hover', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_text_color', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_text_color_hover', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_border_color_hover', 'sanitize_hex_color' );
	register_setting( 'lps-settings-group', 'lps_login_button_border_radius', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_button_size', 'absint' );

	register_setting( 'lps-settings-group', 'lps_gfontlab', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_gfontlink', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_gfontmsg', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_gfontbtn', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_gfonttext_logo', 'sanitize_text_field' );
	register_setting( 'lps-settings-group', 'lps_gfont_copyright', 'sanitize_text_field' );

	register_setting( 'lps-settings-group', 'lps_layout', 'sanitize_text_field' );

	register_setting( 'lps-settings-group', 'lps_enable_private_site', 'absint' );
	register_setting( 'lps-settings-group', 'lps_private_login_url', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_private_login_url2', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_private_login_url3', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_private_login_url4', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_private_login_url5', 'sanitize_key' );

	register_setting( 'lps-settings-group', 'lps_enable_lim', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_attempts', 'absint' );
	register_setting( 'lps-settings-group', 'lps_attempts_within', 'absint' );
	register_setting( 'lps-settings-group', 'lps_lock_time', 'absint' );

	register_setting( 'lps-settings-group', 'lps_loginout_menu', 'absint' );
	register_setting( 'lps-settings-group', 'lps_login_widgetButton', 'absint' );
	register_setting( 'lps-settings-group', 'lps_register_widgetButton', 'absint' );
	register_setting( 'lps-settings-group', 'lps_lostpassword_widgetButton', 'absint' );

	register_setting( 'lps-settings-group', 'lps_redirect_users', 'sanitize_key' );
	register_setting( 'lps-settings-group', 'lps_redirectafter_users', 'sanitize_key' );

	register_setting( 'lps-settings-group', 'lps_login_custom_css', 'sanitize_textarea_field' );

}

/**
 * Sanitize the array of background image URLs set by the user.
 *
 * @param array $input The array of background image URLs.
 * @return array Sanitized array of background image URLs.
 */
function sanitize_lps_body_bg_slideshow( $input ) {
	$sanitized_input = array();

	// Sanitize each input URL.
	foreach ( $input as $url ) {
		$sanitized_input[] = esc_url_raw( $url );
	}

	return $sanitized_input;
}

/**
 * Summary of lps_delete_settings
 * Funtion to delet registered options
 */
function lps_delete_settings() {
	delete_option( 'lps_login_on_off' );
	delete_option( 'lps_login_logo_hide' );
	delete_option( 'lps_login_logo_msg_hide' );
	delete_option( 'lps_login_nav_link_hide' );
	delete_option( 'lps_login_blog_link_hide' );
}

register_deactivation_hook( __FILE__, 'lps_delete_settings' );

add_action( 'admin_enqueue_scripts', 'lps_enqueue_color_picker' );
/**
 * Summary of lps_enqueue_color_picker
 * Function to enqueue color picker, media upload, fonts and css
 */
function lps_enqueue_color_picker() {

	if ( isset( $_GET['page'] ) && 'lps_option' === $_GET['page'] ) {
		wp_enqueue_style( 'wp-color-picker' );
		// wp_enqueue_style( 'thickbox' );
		// wp_enqueue_script( 'thickbox' );
		// wp_enqueue_script( 'media-upload' );

		// wp_enqueue_style( 'custom_wp_admin_css', plugins_url('css/loginPageStylercss.css', __FILE__) );
		wp_enqueue_style( 'custom_wp_admin_css', plugins_url( 'css/style.css', __FILE__ ) );

		wp_enqueue_style( 'font_select', plugins_url( 'fontselect.css', __FILE__ ) );

		wp_enqueue_script( 'wp-color-picker-script', plugins_url( 'loginPageStyler.js', __FILE__ ), array( 'wp-color-picker' ) );
		wp_enqueue_script( 'g-fonts-script', plugins_url( 'jquery.fontselect.js', __FILE__ ) );
	}
}

function enqueue_media_uploader_scripts() {
	if ( is_admin() && isset( $_GET['page'] ) && 'lps_option' === $_GET['page'] ) {
		wp_enqueue_media();
		wp_enqueue_script( 'lps-media-uploader', plugin_dir_url( __FILE__ ) . 'lpsMediauploader.js', array( 'jquery' ), null, true );
	}
}
add_action( 'admin_enqueue_scripts', 'enqueue_media_uploader_scripts' );

/**
 * Summary of lps_settings_page
 * Funtion to make admin settings page
 */
function lps_settings_page() { ?>

<div class="main">

	<input class="tabin" id="tab1" type="radio" name="tabs" checked>
	<label class="tabla" for="tab1">Styling</label>

	<input class="tabin" id="tab2" type="radio" name="tabs">
	<label class="tabla" for="tab2">Template</label>

	<input class="tabin" id="tab3" type="radio" name="tabs">
	<label class="tabla" for="tab3">Google ReCaptcha</label>

	<input class="tabin" id="tab4" type="radio" name="tabs">
	<label class="tabla" for="tab4">Login/Logout Menu Item</label>

	<input class="tabin" id="tab5" type="radio" name="tabs">
	<label class="tabla" for="tab5">Login/Logout Redirect</label>

	<input class="tabin" id="tab6" type="radio" name="tabs">
	<label class="tabla" for="tab6">Login Protected</label>


	<input class="tabin" id="tab7" type="radio" name="tabs">
	<label class="tabla" for="tab7">Limit Login</label>

	<input class="tabin" id="tab8" type="radio" name="tabs">
	<label class="tabla" for="tab8">Blocked IP </label>

<div class="content">  	
	<div id="content1">
		<div class='wrap'> 

		<h1><?php esc_html_e( 'Login Page Styler' ); ?></h1>
		<h2><strong><?php esc_html_e( 'You need to save settings before you click on preview button', 'login-page-styler' ); ?></strong></h2>
		<h3><strong><?php esc_html_e( 'Get Premium Support 24/7 Through E-mail : ziaimtiaz21@gmail.com ', 'login-page-styler' ); ?> </strong></h3>
		<h3><strong><?php esc_html_e( 'If you want to do any feature request or you want us to Style your login page E-mail us : ziaimtiaz21@gmail.com', 'login-page-styler' ); ?></strong></h3>

		<?php settings_errors(); ?>
		<form method="post" action="options.php" >

		<?php settings_fields( 'lps-settings-group' ); ?>
		<div id="headings-data">

			<div id="hed3"><h3><?php esc_html_e( 'Login Settings', 'login-page-styler' ); ?></h3></div>
			<table class="form-table">
			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Enable Plugin :', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_on_off" class="onoffswitch-checkbox"  id="myonoffswitch" value='1'<?php checked( 1, absint( get_option( 'lps_login_on_off' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>

			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Hide Login Logo', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_logo_hide" class="onoffswitch-checkbox"  id="myonoffswitch2" value='1'<?php checked( 1, absint( get_option( 'lps_login_logo_hide' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch2">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Hide Login Error Msg', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_logo_msg_hide" class="onoffswitch-checkbox"  id="myonoffswitch3" value='1'<?php checked( 1, absint( get_option( 'lps_login_logo_msg_hide' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch3">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Hide Lost Password Link', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_nav_link_hide" class="onoffswitch-checkbox"  id="myonoffswitch4" value='1'<?php checked( 1, absint( get_option( 'lps_login_nav_link_hide' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch4">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Hide Back to Blog Link', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_blog_link_hide" class="onoffswitch-checkbox"  id="myonoffswitch5" value='1'<?php checked( 1, absint( get_option( 'lps_login_blog_link_hide' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch5">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>

			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Hide Language switcher on Login ', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_lang_hide" class="onoffswitch-checkbox"  id="myonoffswitch6" value='1'<?php checked( 1, absint( get_option( 'lps_login_lang_hide' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch6">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>

			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Auto Remember me  ', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_auto_rememberme" class="onoffswitch-checkbox"  id="myonoffswitch7" value='1'<?php checked( 1, absint( get_option( 'lps_auto_rememberme' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitch7">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Login Session Expire', 'login-page-styler' ); ?></th>
				<td><label for="lps_login_session_expire">
				<input type="number" disabled id="lps_login_session_expire"  name="lps_login_session_expire" value="<?php echo esc_attr( get_option( 'lps_login_session_expire' ) ); ?>" />
				<p class="description"><?php esc_html_e( 'Set the session expiration time in minutes. e.g: 10 ,Leave empty or 0 for default wp seesion expiration', 'login-page-styler' ); ?></p>
				<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
				</label></td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( ' Copyright / Add your company', 'login-page-styler' ); ?></th>
				<td><label for="lps_login_copyright">
				&copy <?php echo esc_attr( gmdate( 'Y' ) ); ?> <input type="text" id="lps_login_copyright"  name="lps_login_copyright" size="30" placeholder="Your website or Company name " value="<?php echo esc_attr( get_option( 'lps_login_copyright' ) ); ?>" />All rights reserved.
				<p class="description"><?php esc_html_e( ' Shows Copyright in the footer of login page just add your company name  ', 'login-page-styler' ); ?></p>
				</label></td>
			</tr>

			<tr>
			<th scope='row'><?php esc_html_e( 'Copyright Text Color', 'login-page-styler' ); ?></th>
			<td><label for='lps_copyright_color'>
			<input type='color' disabled class='' id='lps_copyright_color' name='lps_copyright_color' value='<?php echo esc_attr( get_option( 'lps_copyright_color' ) ); ?>' />
			<p class='description'><?php esc_html_e( 'Set the color for the Copyright Footor text.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</label></td>
			</tr>

			<tr valign="top">
			<th scope="row"><?php esc_html_e( 'Google font for Copyright ', 'login-page-styler' ); ?></th>
			<td><label for="lps_gfont_copyright">
			<input name="lps_gfont_copyright"  id="lps_gfont_copyright" class="lps_copyrightfont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfont_copyright' ) ); ?>"/>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</label></td>
			</tr>

			</table>
		</div>


<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Logo Settings', 'login-page-styler' ); ?></h3></div>
	<table class="form-table">

	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Logo Link', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_logo_link">
		<input type="text" id="lps_login_logo_link"  name="lps_login_logo_link" size="40" value="<?php echo esc_url( get_option( 'lps_login_logo_link' ) ); ?>"/>
		<p class="description"><?php esc_html_e( 'Enter site url eg: www.google.com ,It will redirect user when logo is clicked', 'login-page-styler' ); ?></p>
		</label>
		</td>
	</tr>


	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Logo Title', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_logo_tittle">
		<input type="text" id="lps_login_logo_tittle"  name="lps_login_logo_tittle" value="<?php echo esc_attr( get_option( 'lps_login_logo_tittle' ) ); ?>" />
		<p class="description"><?php esc_html_e( 'Enter Tittle for logo eg:Powered by abcd. ', 'login-page-styler' ); ?></p>
		</label>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Logo Image', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_logo">
		<input id="lps_login_logo" type="text" name="lps_login_logo" value="<?php echo esc_url( get_option( 'lps_login_logo' ) ); ?>" size="50" />
		<input class="lps-upload-button" type="button" value="Upload Image" />
		<p class='description'><?php esc_html_e( 'Upload or Select Logo Image,Use 84px X 84px logo, default wp logo size is 84px X 84px', 'login-page-styler' ); ?></p>
		</lable>
		</td>
	</tr>


	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Logo Width', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_logo_width">
		<input type='range' disabled id='lps_login_logo_width' name='lps_login_logo_width' min='0'  max='350' value='<?php echo absint( get_option( 'lps_login_logo_width' ) ); ?>' oninput="this.form.amountInputW.value=this.value" /> 
		<input type="number" disabled  name="amountInputW" min="0" max="350" value='<?php echo absint( get_option( 'lps_login_logo_width' ) ); ?>' size='4' oninput="this.form.lps_login_logo_width.value=this.value" />px
		<p class="description"><?php esc_html_e( 'Slide to select  logo width as per your logo width.', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</lable>
		</td>
	</tr>


	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Logo Height', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_logo_height">
		<input type='range' disabled  id='lps_login_logo_height' name='lps_login_logo_height' min='0'  max='200' value='<?php echo absint( get_option( 'lps_login_logo_height' ) ); ?>' oninput="this.form.amountInputH.value=this.value" /> 
		<input type="number" disabled  name="amountInputH" min="0" max="200" value='<?php echo absint( get_option( 'lps_login_logo_height' ) ); ?>' size='4' oninput="this.form.lps_login_logo_height.value=this.value" />px
		<p class="description"><?php esc_html_e( 'Slide to select  logo height as per your logo height', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</lable>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><?php esc_html_e( ' Text Logo ', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_text_logo">
		<input type="text" id="lps_login_text_logo"  name="lps_login_text_logo" value="<?php echo esc_attr( get_option( 'lps_login_text_logo' ) ); ?>" />
		<p class="description"><?php esc_html_e( 'Enter Text if you dont have a logo yet, You can change  the font of the text to ', 'login-page-styler' ); ?></p>
		<p class="description"><?php esc_html_e( 'If you want to use text logo make sure to leave Logo Title empty and Logo Image empty', 'login-page-styler' ); ?></p>
		</label>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Google font for Text Logo ', 'login-page-styler' ); ?></th>
		<td><label for="lps_gfonttext_logo">
		<input name="lps_gfonttext_logo" id="lps_gfonttext_logo" class="lps_textlogofont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfonttext_logo' ) ); ?>"/>
		</label></td>
	</tr>

	<tr>
		<th scope='row'><?php esc_html_e( ' Text Logo Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_textlogo_color'>
		<input type='text' class='color_picker' id='lps_textlogo_color' name='lps_textlogo_color' value='<?php echo esc_attr( get_option( 'lps_textlogo_color' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Set the color for the text logo.', 'login-page-styler' ); ?></p>
		</label></td>
	</tr>

	<tr>
		<th scope='row'><?php esc_html_e( 'Text Logo Color Hover', 'login-page-styler' ); ?></th>
		<td><label for='lps_textlogo_color_hover'>
		<input type='color' disabled class='' id='lps_textlogo_color_hover' name='lps_textlogo_color_hover' value='<?php echo esc_attr( get_option( 'lps_textlogo_color_hover' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Set the color for the text logo on hover .', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
	</tr>

	</table>
</div>



<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Login Background Settings', 'login-page-styler' ); ?></h3></div>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Background Color', 'login-page-styler' ); ?></th>
				<td><label for="lps_login_background_color">
				<input type="text" class="color_picker" id="lps_login_background_color"  name="lps_login_background_color" value="<?php echo esc_attr( get_option( 'lps_login_background_color' ) ); ?>" />
				<p class="description"><?php esc_html_e( 'Change background color', 'login-page-styler' ); ?></p>
				</label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Login Background Image', 'login-page-styler' ); ?></th>
				<td><label for="lps_body_bg_img">
				<input id="lps_body_bg_img" type="text" name="lps_body_bg_img" value="<?php echo esc_url( get_option( 'lps_body_bg_img' ) ); ?>" size="50" />
				<input  class="lps-upload-button" type="button" value="Upload Image"  />
				<p class='description'><?php esc_html_e( 'Upload or Select  Background Image ,' ); ?></p>
				</label></td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Login Body Background Image Repeat', 'login-page-styler' ); ?></th>
				<td><label for="lps_login_bg_repeat">
				<select name='lps_login_bg_repeat' id='lps_login_bg_repeat'>
				<option value='no-repeat' <?php selected( sanitize_key( get_option( 'lps_login_bg_repeat' ) ), 'no-repeat' ); ?> >No Repeat</option>
				<option value='repeat-x' <?php selected( sanitize_key( get_option( 'lps_login_bg_repeat' ) ), 'repeat-x' ); ?> >Repeat X</option>
				<option value='repeat-y' <?php selected( sanitize_key( get_option( 'lps_login_bg_repeat' ) ), 'repeat-y' ); ?> >Repeat Y</option>
				</select>
				<p class="description"><?php esc_html_e( 'Backgroun image repeat', 'login-page-styler' ); ?></p>
				</label></td>
			</tr>

			<tr valign="top">
			<th scope="row"><?php esc_html_e( 'Login Background Slideshow', 'login-page-styler' ); ?></th>
			<td>
			<?php
			// Get the array of background images.
			$background_images = get_option( 'lps_body_bg_slideshow', array() );

			for ( $i = 0; $i < 4; $i++ ) {
				$image_url = isset( $background_images[ $i ] ) ? esc_url( $background_images[ $i ] ) : '';
				?>
			<label for="lps_body_bg_slideshow<?php echo esc_attr( $i + 1 ); ?>">
			Image <?php echo esc_attr( $i + 1 ); ?>:
				<input disabled id="lps_body_bg_slideshow<?php echo esc_attr( $i + 1 ); ?>" type="text" name="lps_body_bg_slideshow[]" value="<?php echo esc_url( $image_url ); ?>" size="50" />
				<input disabled class="lps-upload-button" type="button" value="Upload Image" onclick="uploadMediaImage(this)" />
			</label>
			<br>
				<?php
			}
			?>
			<p class='description'><?php esc_html_e( 'Enter background image URLs for each image (one per line)', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row"><?php esc_html_e( 'Slideshow Animation Style', 'login-page-styler' ); ?></th>
			<td><label for="lps_slideshow_animation_style">
			<select name='lps_slideshow_animation_style' id='lps_slideshow_animation_style'>
				<option value='fade' disabled <?php selected( sanitize_text_field( get_option( 'lps_slideshow_animation_style' ) ), 'fade' ); ?> >Fade</option>
				<option value='slide' disabled <?php selected( sanitize_text_field( get_option( 'lps_slideshow_animation_style' ) ), 'slide' ); ?> >Slide</option>
				<option value='flip' disabled <?php selected( sanitize_text_field( get_option( 'lps_slideshow_animation_style' ) ), 'flip' ); ?> >Flip</option>
				<option value='cube' disabled <?php selected( sanitize_text_field( get_option( 'lps_slideshow_animation_style' ) ), 'cube' ); ?> >Cube</option>
			</select>
			<p class="description"><?php esc_html_e( 'Select animation style for the slideshow', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>

			</label></td>
			</tr>

			<tr valign='top'>
			<th scope='row'><?php esc_html_e( 'Slideshow Time', 'login-page-styler' ); ?></th>
			<td><label for='lps_slideshow_time'>
			<input type='range' disabled id='lps_slideshow_time' name='lps_slideshow_time' min='1' max='10' value='<?php echo absint( get_option( 'lps_slideshow_time' ) ); ?>' oninput="this.form.amountInputSst.value=this.value" /> 
			<input type="number" disabled name="amountInputSst" min="1" max="10" value='<?php echo absint( get_option( 'lps_slideshow_time' ) ); ?>' size='4' oninput="this.form.lps_slideshow_time.value=this.value" />
			<p class='description'> <?php esc_html_e( 'Slide to change time of Slideshow ', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</label></td>
			</tr>

		<table>
	</div>


<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Form Settings', 'login-page-styler' ); ?></h3></div>

	<table class="form-table">
		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Change Login Form Position', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_position'>
		<select id="lps_login_form_position" name="lps_login_form_position">
			<option value='1' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '1' ); ?> >Middle-Center</option> 
			<option value='2' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '2' ); ?> >Middle-Left</option>
			<option value='3' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '3' ); ?> >Middle-Right</option>
			<option value='4' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '4' ); ?> >Top-Center</option>
			<option value='5' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '5' ); ?> >Top-Left</option>
			<option value='6' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '6' ); ?> >Top-Right</option>
			<option value='7' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '7' ); ?> >Bottom-Center</option>
			<option value='8' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '8' ); ?> >Bottom-Left</option>
			<option value='9' <?php selected( absint( get_option( 'lps_login_form_position' ) ), '9' ); ?> >Bottom-Right</option>
		</select>
		<p class="description"> <?php esc_html_e( 'Select option to change Login Form Position', 'login-page-styler' ); ?></p>           
		<p class="description"> <?php esc_html_e( 'While using bottom positioning, Hide error msg  on top of this plugin', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( ' Login Form Animation', 'login-page-styler' ); ?></th>
			<td><label for='lps_login_animation'>
			<select id="lps_login_animation" name="lps_login_animation">
				<option value="fadeIn" <?php selected( get_option( 'lps_login_animation' ), 'fadeIn' ); ?>>Fade In</option>
				<option value="slideInLeft" <?php selected( get_option( 'lps_login_animation' ), 'slideInLeft' ); ?>>Slide In from Left</option>
				<option disabled value="" >Bounce In</option>
				<option disabled value="" >Rotate In</option>
				<option disabled value="" >Zoom In</option>
				<option disabled value="" >Flip In</option >
				<option disabled value="" >Flash</option>
				<option disabled value="" >Pulse</option>
				<option disabled value="" >Shake</option>
				<option disabled value="" >Roll In</option>
				<option disabled value="" >Swing</option>
				<option disabled value="" >Rubber Band</option>
				<option disabled value="" >Tada</option>
				<option disabled value="" >Jello</option>
				<!-- Add more animation options as needed -->
			</select>
			<p class="description"><?php esc_html_e( 'Select login page animation.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( ' 2 animation in free version For more : Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Login Form Background Image', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_form_bg">
		<input id="lps_login_form_bg" type="text" name="lps_login_form_bg" value="<?php echo esc_url( get_option( 'lps_login_form_bg' ) ); ?>" size="50"  />
		<input  class="lps-upload-button" type="button" value="Upload Image"  />
		<p class='description'><?php esc_html_e( 'Upload or Select Form Background Image ', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Width', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_width'>
		<input type='range'  id='lps_login_form_width' name='lps_login_form_width' min='320' max='1000' value='<?php echo absint( get_option( 'lps_login_form_width' ) ); ?>' oninput="this.form.amountInputFw.value=this.value" /> 
		<input type="number"  name="amountInputFw" min="320" max="1000" value='<?php echo absint( get_option( 'lps_login_form_width' ) ); ?>' size='4' oninput="this.form.lps_login_form_width.value=this.value" />px
		<p class='description'> <?php esc_html_e( 'Slide to change form Width . Default width for form is 320', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Label Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_label_color'>
		<input type='text' class='color_picker' id='lps_login_label_color' name='lps_login_label_color' value='<?php echo esc_attr( get_option( 'lps_login_label_color' ) ); ?>' /> 
		<p class='description'> <?php esc_html_e( 'Change form label(Username /Password) color', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr>
		<th scope='row'><?php esc_html_e( 'Login Form Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_color'>
		<input type='text' class='color_picker' id='lps_login_form_color' name='lps_login_form_color' value='<?php echo esc_attr( get_option( 'lps_login_form_color' ) ); ?>'/>
		<p class='description'><?php esc_html_e( 'Change Form color', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr>
		<th scope='row'><?php esc_html_e( 'Login Form Input Field Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_input_color'>
		<input type='text' class='color_picker' id='lps_login_form_input_color' name='lps_login_form_input_color' value='<?php echo esc_attr( get_option( 'lps_login_form_input_color', '#000000' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Set the color for the login form input fields.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Opacity', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_color_opacity'>
		<input type='range' disabled  step='0.1' min='0.1' max='1' id='lps_login_form_color_opacity' name='lps_login_form_color_opacity' value='<?php echo esc_attr( get_option( 'lps_login_form_color_opacity', '1' ) ); ?>' oninput="this.form.amountInputFormOpacity.value=this.value" />
		<input type='number' disabled step='0.1' min='0.1' max='1' name='amountInputFormOpacity' value='<?php echo esc_attr( get_option( 'lps_login_form_color_opacity', '1' ) ); ?>' size='4' oninput="this.form.lps_login_form_color_opacity.value=this.value" />
		<p class='description'><?php esc_html_e( 'Login form Opacity. This option make form transparent', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Input Field Opacity', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_input_color_opacity'>
		<input type='range' disabled step='0.1' min='0' max='1' id='lps_login_form_input_color_opacity' name='lps_login_form_input_color_opacity' value='<?php echo esc_attr( get_option( 'lps_login_form_input_color_opacity', '1' ) ); ?>' oninput="this.form.amountInputInputOpacity.value=this.value" />
		<input type='number' disabled step='0.1' min='0' max='1' name='amountInputInputOpacity' value='<?php echo esc_attr( get_option( 'lps_login_form_input_color_opacity', '1' ) ); ?>' size='4' oninput="this.form.lps_login_form_input_color_opacity.value=this.value" />
		<p class='description'><?php esc_html_e( ' Input-Field Opacity. This option make input field transparent', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>

		</label></td>
		</tr>


		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Label Size', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_label_size'>
		<input type='range' disabled id='lps_login_label_size' name='lps_login_label_size' min='14' max='30' value='<?php echo absint( get_option( 'lps_login_label_size' ) ); ?>' oninput="this.form.amountInput.value=this.value" /> 
		<input type="number" disabled name="amountInput" min="0" max="25" value='<?php echo absint( get_option( 'lps_login_label_size' ) ); ?>' size='4' oninput="this.form.lps_login_label_size.value=this.value" />px
		<p class='description'> <?php esc_html_e( 'Slide to change  Username/Password size ', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form  Remember Me Label Size', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_remember_label_size'>
		<input type='range' disabled id='lps_login_remember_label_size' name='lps_login_remember_label_size'  min='12' max='25' value='<?php echo absint( get_option( 'lps_login_remember_label_size' ) ); ?>' oninput="this.form.amountInput2.value=this.value" /> 
		<input type="number" disabled name="amountInput2" min="12" max="25" value='<?php echo absint( get_option( 'lps_login_remember_label_size' ) ); ?>'  size='4' oninput="this.form.lps_login_remember_label_size.value=this.value" />px 
		<p class='description'> <?php esc_html_e( 'Slide to change login form remember me label size .', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label>
		</td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Border Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_border_color'>
		<input type='text' class='color_picker'  id='lps_login_form_border_color' name='lps_login_form_border_color' value='<?php echo esc_attr( get_option( 'lps_login_form_border_color' ) ); ?>' />
		<p class="description"><?php esc_html_e( 'Change login form  border color .', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Login Form Border Style', 'login-page-styler' ); ?></th>
		<td>
		<label for="lps_login_form_border_size">
		<input type='range'  id='lps_login_form_border_size' name='lps_login_form_border_size' min='0' max='10' value='<?php echo absint( get_option( 'lps_login_form_border_size' ) ); ?>' oninput="this.form.amountInput3.value=this.value"  /> <input type="number"  name="amountInput3" min="0" max="10" value='<?php echo absint( get_option( 'lps_login_form_border_size' ) ); ?>' size='4' oninput="this.form.lps_login_form_border_size.value=this.value" />px  
		<p class="description"><?php esc_html_e( 'Slide to change border width', 'login-page-styler' ); ?></p>
		</label>

		<label for="lps_login_form_border_style">
		<select name='lps_login_form_border_style' id='lps_login_form_border_style'>
		<option  value='none'   <?php selected( sanitize_key( get_option( 'lps_login_form_border_style' ) ), 'none' ); ?>   >None</option>
				<option  value='solid'  <?php selected( sanitize_key( get_option( 'lps_login_form_border_style' ) ), 'solid' ); ?>  >Solid</option>
				<option  value='dashed' <?php selected( sanitize_key( get_option( 'lps_login_form_border_style' ) ), 'dashed' ); ?> >Dashed</option>
				<option  value='dotted' <?php selected( sanitize_key( get_option( 'lps_login_form_border_style' ) ), 'dotted' ); ?> >Dotted</option>
				<option  value='double' <?php selected( sanitize_key( get_option( 'lps_login_form_border_style' ) ), 'double' ); ?> >Double</option>
		</select>
		<p class="description"><?php esc_html_e( 'Select login form border style,', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Border Radius', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_border_radius'>
		<input type='range' disabled  id='lps_login_form_border_radius' name='lps_login_form_border_radius' min='0' max='10' value='<?php echo absint( get_option( 'lps_login_form_border_radius' ) ); ?>' oninput="this.form.amountInput4.value=this.value"  /> 
		<input type="number" disabled name="amountInput4" min="0" max="10" value='<?php echo absint( get_option( 'lps_login_form_border_radius' ) ); ?>' size='4' oninput="this.form.lps_login_form_border_size.value=this.value" />px
		<p class="description"><?php esc_html_e( 'Slide to change Login form border radius', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Input Field Border Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_input_feild_border_color'>
		<input  type='text' class='color_picker' id='lps_login_form_input_feild_border_color' name='lps_login_form_input_feild_border_color' value='<?php echo esc_attr( get_option( 'lps_login_form_input_feild_border_color' ) ); ?>'  />
		<p class="description"><?php esc_html_e( 'Change login form input field border color.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Login Form Input Field Border Style', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_form_input_border_size">
		<input type='range'  id='lps_login_form_input_border_size' name='lps_login_form_input_border_size' min='0' max='10' value='<?php echo absint( get_option( 'lps_login_form_input_border_size' ) ); ?>' oninput="this.form.amountInput5.value=this.value"  /> 
		<input type="number"  name="amountInput5" min="0" max="10" value='<?php echo absint( get_option( 'lps_login_form_input_border_size' ) ); ?>' size='4' oninput="this.form.lps_login_form_border_size.value=this.value" />px  
		<p class="description"><?php esc_html_e( 'Slide to change Login form input-field border size.', 'login-page-styler' ); ?></p>
		</label>

		<label for="lps_login_form_input_border_style">
		<select name='lps_login_form_input_border_style' id='lps_login_form_input_border_style'>
		<option value='none'   <?php selected( sanitize_key( get_option( 'lps_login_form_input_border_style' ) ), 'none' ); ?>   >None</option>
		<option value='solid'  <?php selected( sanitize_key( get_option( 'lps_login_form_input_border_style' ) ), 'solid' ); ?>  >Solid</option>
		<option value='dashed' <?php selected( sanitize_key( get_option( 'lps_login_form_input_border_style' ) ), 'dashed' ); ?> >Dashed</option>
		<option value='dotted' <?php selected( sanitize_key( get_option( 'lps_login_form_input_border_style' ) ), 'dotted' ); ?> >Dotted</option>
		<option value='double' <?php selected( sanitize_key( get_option( 'lps_login_form_input_border_style' ) ), 'double' ); ?> >Double</option>
		</select>
		<p class="description"><?php esc_html_e( 'Select login form input field border style.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Form Input Field Border Radius', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_form_input_feild_border_radius'>
		<input type='range' disabled id='lps_login_form_input_feild_border_radius' name='lps_login_form_input_feild_border_radius' min='0' max='10' value='<?php echo absint( get_option( 'lps_login_form_input_feild_border_radius' ) ); ?>' oninput="this.form.amountInput7.value=this.value"  /> 
		<input type="number" disabled  name="amountInput7" min="0" max="10" value='<?php echo absint( get_option( 'lps_login_form_input_feild_border_radius' ) ); ?>' size='4' oninput="this.form.lps_login_form_input_feild_border_radius.value=this.value" />px
		<p class="description"><?php esc_html_e( 'Slide to change Login form input-field border radius.', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Horizontal Offset', 'login-page-styler' ); ?></th>
		<td><label for='lps_box_shadow_horizontal'>
		<input type='range'  id='lps_box_shadow_horizontal' name='lps_box_shadow_horizontal' min='-10' max='10' value='<?php echo esc_attr( get_option( 'lps_box_shadow_horizontal' ) ); ?>' oninput="this.form.amountInputBSH.value=this.value"  /> <input type="number"  name="amountInputBSH" min="-10" max="10" value='<?php echo esc_attr( get_option( 'lps_box_shadow_horizontal' ) ); ?>' size='4' oninput="this.form.lps_box_shadow_horizontal.value=this.value" />
		<p class="description"><?php esc_html_e( 'Set the horizontal offset for the login box shadow.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Vertical Offset', 'login-page-styler' ); ?></th>
		<td><label for='lps_box_shadow_vertical'>
		<input type='range'  id='lps_box_shadow_vertical' name='lps_box_shadow_vertical' min='-10' max='10' value='<?php echo absint( get_option( 'lps_box_shadow_vertical' ) ); ?>' oninput="this.form.amountInputBSV.value=this.value"  /> <input type="number"  name="amountInputBSV" min="-10" max="10" value='<?php echo absint( get_option( 'lps_box_shadow_vertical' ) ); ?>' size='4' oninput="this.form.lps_box_shadow_vertical.value=this.value" />
		<p class="description"><?php esc_html_e( 'Set the vertical offset for the login box shadow.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>


		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Blur Radius', 'login-page-styler' ); ?></th>
		<td>
		<label for='lps_box_shadow_blur'>
		<input type='range' id='lps_box_shadow_blur' name='lps_box_shadow_blur' min='0' max='50' value='<?php echo absint( get_option( 'lps_box_shadow_blur', '10' ) ); ?>' oninput="this.form.amountInputBSBlur.value=this.value" />
		<input type='number' name='amountInputBSBlur' min='0' max='50' value='<?php echo absint( get_option( 'lps_box_shadow_blur', '10' ) ); ?>' size='4' oninput="this.form.lps_box_shadow_blur.value=this.value" />
		<p class='description'>
		<?php esc_html_e( 'Set the blur radius for the login box shadow.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Spread Radius', 'login-page-styler' ); ?></th>
		<td>
		<label for='lps_box_shadow_spread'>
		<input type='range' id='lps_box_shadow_spread' name='lps_box_shadow_spread' min='0' max='50' value='<?php echo absint( get_option( 'lps_box_shadow_spread', '0' ) ); ?>' oninput="this.form.amountInputBSSpread.value=this.value" />
		<input type='number' name='amountInputBSSpread' min='0' max='50' value='<?php echo absint( get_option( 'lps_box_shadow_spread', '0' ) ); ?>' size='4' oninput="this.form.lps_box_shadow_spread.value=this.value" />
		<p class='description'>
		<?php esc_html_e( 'Set the spread radius for the login box shadow.', 'login-page-styler' ); ?>
		</p>
		</label></td>
		</tr>

		<tr>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_box_shadow_color'>
		<input type='text' class='color_picker' id='lps_box_shadow_color' name='lps_box_shadow_color' value='<?php echo esc_attr( get_option( 'lps_box_shadow_color', '#000000' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Set the color for the login box shadow.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Form Box Shadow Opacity', 'login-page-styler' ); ?></th>
		<td><label for='lps_box_shadow_opacity'>
		<input type='range' step='0.1' min='0' max='1' id='lps_box_shadow_opacity' name='lps_box_shadow_opacity' value='<?php echo esc_attr( get_option( 'lps_box_shadow_opacity', '0.3' ) ); ?>' oninput="this.form.amountInputBSOpacity.value=this.value" />
		<input type='number' step='0.1' min='0' max='1' name='amountInputBSOpacity' value='<?php echo esc_attr( get_option( 'lps_box_shadow_opacity', '0.3' ) ); ?>' size='4' oninput="this.form.lps_box_shadow_opacity.value=this.value" />
		<p class='description'><?php esc_html_e( 'Set the opacity for the login box shadow (between 0 and 1).', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

	</table>
	</div>

<div id="headings-data">

	<div id="hed3"><h3><?php esc_html_e( 'Google Fonts', 'login-page-styler' ); ?></h3></div>
		<table class="form-table">

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Google font Label ', 'login-page-styler' ); ?></th>
		<td><label for="lps_gfontlab">
		<input name="lps_gfontlab" id="lps_gfontlab" class="lps_labfont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfontlab' ) ); ?>"/>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Google font Navigation Links ', 'login-page-styler' ); ?></th>
		<td><label for="lps_gfontlink">
		<input name="lps_gfontlink" id="lps_gfontlink" class="lps_linkfont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfontlink' ) ); ?>"/>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Google font Error Messages ', 'login-page-styler' ); ?></th>
		<td><label for="lps_gfontmsg">
		<input name="lps_gfontmsg" id="lps_gfontmsg" class="lps_msgfont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfontmsg' ) ); ?>"/>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Google font Button ', 'login-page-styler' ); ?></th>
		<td><label for="lps_gfontbtn">
		<input name="lps_gfontbtn" id="lps_gfontbtn" class="lps_btnfont" type="text" value="<?php echo esc_attr( get_option( 'lps_gfontbtn' ) ); ?>"/>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

	</table>
</div>

<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Button Settings', 'login-page-styler' ); ?></h3></div>
	<table class="form-table">

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_color'>
		<input type='text' class='color_picker' id='lps_login_button_color' name='lps_login_button_color' value='<?php echo esc_attr( get_option( 'lps_login_button_color' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Change login button color', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Text Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_text_color'>
		<input type='text' class='color_picker' id='lps_login_button_text_color' name='lps_login_button_text_color' value='<?php echo esc_attr( get_option( 'lps_login_button_text_color' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Change login button text color', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Border Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_border_color'>
		<input type='text' class='color_picker' id='lps_login_button_border_color' name='lps_login_button_border_color' value='<?php echo esc_attr( get_option( 'lps_login_button_border_color' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Change login button border color', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>


		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Color Hover', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_color_hover'>
		<input type='color' class='' id='lps_login_button_color_hover' name='lps_login_button_color_hover' value='<?php echo esc_attr( get_option( 'lps_login_button_color_hover' ) ); ?>' />
		<p class='description'><?php esc_html_e( 'Change login button color hover.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Text Color Hover', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_text_color_hover'>
		<input type='color' class='' id='lps_login_button_text_color_hover' name='lps_login_button_text_color_hover' value='<?php echo esc_attr( get_option( 'lps_login_button_text_color_hover' ) ); ?>' />
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Border Color Hover', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_border_color_hover'>
		<input type='color' class='' id='lps_login_button_border_color_hover' name='lps_login_button_border_color_hover' value='<?php echo esc_attr( get_option( 'lps_login_button_border_color_hover' ) ); ?>' />
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Border Radius', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_border_radius'>
		<input type='range'  id='lps_login_button_border_radius' name='lps_login_button_border_radius' min='0' max='10' value='<?php echo absint( get_option( 'lps_login_button_border_radius' ) ); ?>' oninput="this.form.amountInput6.value=this.value"  /> <input type="number"  name="amountInput6" min="0" max="10" value='<?php echo absint( get_option( 'lps_login_button_border_radius' ) ); ?>' size='4' oninput="this.form.lps_login_button_border_radius.value=this.value" />
		<p class="description"><?php esc_html_e( 'Slide to change login button border radius .', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Login Button Size', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_button_size'>
		<input type='range' step='' min='68' max='272' id='lps_login_button_size' name='lps_login_button_size' value='<?php echo esc_attr( get_option( 'lps_login_button_size' ) ); ?>' oninput="this.form.amountInputButtonsize.value=this.value" />
		<input type='number' step='' min='68' max='400' name='amountInputButtonsize' value='<?php echo esc_attr( get_option( 'lps_login_button_size' ) ); ?>' size='4' oninput="this.form.lps_login_button_size.value=this.value" />px
		<p class='description'><?php esc_html_e( 'Change login button size .68px is default button size 272px matches the size of inputfield .', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

	</table>
</div>

<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Lost password and Back to blog ', 'login-page-styler' ); ?></h3></div>
	<table class="form-table">
 
		<tr vlaign='top'>
		<th scope='row'><?php esc_html_e( 'Navigation Links Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_nav_color'>
		<input type='text' class='color_picker' id='lps_login_nav_color' name='lps_login_nav_color' value='<?php echo esc_attr( get_option( 'lps_login_nav_color' ) ); ?>'/>
		<p class="description"><?php esc_html_e( 'Change navigation link color', 'login-page-styler' ); ?></p>
		</label>
		</td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Navigation Hover Links Color', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_nav_hover_color'>
		<input type='text' class='color_picker' id='lps_login_nav_hover_color' name='lps_login_nav_hover_color' value='<?php echo esc_attr( get_option( 'lps_login_nav_hover_color' ) ); ?>'  />
		<p class="description"><?php esc_html_e( 'Change navigiation link hover color.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Navigation Link Size', 'login-page-styler' ); ?></th>
		<td><label for='lps_login_nav_size'>
		<input type='range' disabled  id='lps_login_nav_size' name='lps_login_nav_size' min='13' max='20' value='<?php echo absint( get_option( 'lps_login_nav_size' ) ); ?>' oninput="this.form.amountInput8.value=this.value"  /> 
		<input type="number"  disabled name="amountInput8" min="13" max="20" value='<?php echo absint( get_option( 'lps_login_nav_size' ) ); ?>' size='4' oninput="this.form.lps_login_nav_size.value=this.value" />
		<p class="description"><?php esc_html_e( 'Slide to change Navigation Link Size .', 'login-page-styler' ); ?></p>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label></td>
		</tr>

	</table>
</div>


<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( 'Custom CSS', 'login-page-styler' ); ?></h3></div>
		<table class="form-table">
		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Custom CSS', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_custom_css">
		<textarea cols="80" rows="7" id="lps_login_custom_css"  name="lps_login_custom_css"  ><?php echo esc_textarea( get_option( 'lps_login_custom_css' ) ); ?> </textarea>
		<p class='description'> <?php esc_html_e( 'Add styling inside this text area.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>
		</table>
</div>

<style>
	.scrollable-buttons {
	position: fixed;
	bottom: 20px;
	right: 20px;
	display: flex;
	justify-content: space-between;
	padding: 10px;
	z-index: 999;
	background-color: #fff; /* Set to your background color */
	border: 1px solid #ccc; /* Add border for better visibility */
	/*width: calc(50% - 40px);*/ /* Adjust the width based on your design */
	}

	.scrollable-buttons button {
	padding: 10px;
	cursor: pointer;
	}


</style>

	<?php
	// You can place this code inside your WP settings page.
	$button_text  = __( 'Save Changes', 'login-page-styler' ); // Button text.
	$button_class = 'button'; // Button class.
	?>

<div class="scrollable-buttons">
	<button id="button1"><input type="submit" id="scrollsubmit" class="<?php echo esc_attr( $button_class ); ?>" value="<?php echo esc_attr( $button_text ); ?>" />
</button>
	<button id="button2">
	<?php
	// Check if the user is an administrator.
	if ( current_user_can( 'administrator' ) ) {
		// Directly link to the login page without using wp_login_url().
		$preview_url = site_url( 'wp-login.php?preview=true' );
		?>
		<a class="button scrollsubmit-preview" target="_blank" href="<?php echo esc_url( $preview_url ); ?>">
			Enter Preview Mode
		</a>
	<?php } ?>
</button>
</div>

		<h3><strong><?php esc_html_e( 'If you want us to Style your login page or want any new Feature Email us : ziaimtiaz21@gmail.com', 'login-page-styler' ); ?></strong></h3>
		<p><b><a href="https://wordpress.org/support/plugin/login-page-styler/reviews/?filter=5" target="_blank">Give it a 5 star rating</a></b> on WordPress.org.</p>
		<p class="submit">
		<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
		</p>  

	</div>
</div>  

	<div id="content2">
		<div class='wrap'> 

		<h1><?php esc_html_e( 'Custom Templates', 'login-page-styler' ); ?></h1>
		<table class="form-table">
		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Select Layout', 'login-page-styler' ); ?></th>
		<td><label for='layout'>
		<p class="pp"style='padding:0px 0px 0px 20px ;'>None <input type="radio" name="lps_layout" id="layout" value="lay0" <?php checked( 'lay0', esc_attr( get_option( 'lps_layout' ) ) ); ?> /></p> 
		</label>
		</br>
		</br>

		<label for='layout1'>
		<p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 1 <input type="radio" name="lps_layout" id="layout1" value="lay1" <?php checked( 'lay1', esc_attr( get_option( 'lps_layout' ) ) ); ?> /></p> 
		<img width='500px' src='<?php echo esc_url( plugins_url( 'images/scrnsht.png', __FILE__ ) ); ?>' /> </label> 
		</br>

		<label for='layout2'>
		<p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 2 
		<input type="radio" disabled name="lps_layout" id="layout2" value="lay2" <?php checked( 'lay2', esc_attr( get_option( 'lps_layout' ) ) ); ?> /></p> 
		<img width='500px' src='<?php echo esc_url( plugins_url( 'images/scrnsht1.png', __FILE__ ) ); ?>' /> </label>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</br>

		<label for='layout3'> 
		<p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 3 <input type="radio" disabled name="lps_layout" id="layout3" value="lay3" <?php checked( 'lay3', esc_attr( get_option( 'lps_layout' ) ) ); ?> /></p> 
		<img width='500px' src='<?php echo esc_url( plugins_url( 'images/scrnsht2.png', __FILE__ ) ); ?>' /> </label>
		<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</br>              
		</td>
		</tr>

		</table>

	<p class="submit">
	<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
	</p>

	</div>

</div>  


	<div id="content3">
		<div class='wrap'>
		<h1><?php esc_html_e( 'Google ReCaptcha V2' ); ?></h1>
		<table class="form-table">
		<p>You need to <a href="https://www.google.com/recaptcha/admin" rel="external">Register you domain for free on google recaptcha</a> and get Site and Secret keys For V2 of Google recaptcha to make ReCaptcha work.</p>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Site Key', 'login-page-styler' ); ?></th>
		<td><label for="rs_site_key">
		<input type="text" id="rs_site_key"  size="50" name="rs_site_key" value="<?php echo esc_attr( get_option( 'rs_site_key' ) ); ?>" />
		<p class="description"><?php esc_html_e( 'Enter Site Key ', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Secret Key', 'login-page-styler' ); ?></th>
		<td><label for="rs_private_key">
		<input type="text" id="rs_private_key" size="50"  name="rs_private_key" value="<?php echo esc_attr( get_option( 'rs_private_key' ) ); ?>" />
		<p class="description"><?php esc_html_e( 'Enter Secret Key ', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Enable Google ReCaptcha On Login', 'login-page-styler' ); ?></th>
		<td>
			<div class="onoffswitch">
				<input type="checkbox" name="lps_login_captcha" class="onoffswitch-checkbox"  id="myonoffswitchcap" value='1'<?php checked( 1, absint( get_option( 'lps_login_captcha' ) ) ); ?> />
				<label class="onoffswitch-label" for="myonoffswitchcap">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
				</label>
			</div>
		</td>
		</tr>


		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Enable Google ReCaptcha On Registration', 'login-page-styler' ); ?></th>
		<td>
			<div class="onoffswitch">
				<input disabled type="checkbox" name="lps_reg_captcha" class="onoffswitch-checkbox"  id="myonoffswitchcap1" value='1'<?php checked( 1, absint( get_option( 'lps_reg_captcha' ) ) ); ?> />
				<label class="onoffswitch-label" for="myonoffswitchcap1">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
				</label>
			</div>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</td>
		</tr>

		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Enable Google ReCaptcha On Lost Password', 'login-page-styler' ); ?></th>
		<td>
			<div class="onoffswitch">
				<input disabled type="checkbox" name="lps_lost_captcha" class="onoffswitch-checkbox"  id="myonoffswitchcap2" value='1'<?php checked( 1, absint( get_option( 'lps_lost_captcha' ) ) ); ?> />
				<label class="onoffswitch-label" for="myonoffswitchcap2">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
				</label>
			</div>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</td>
		</tr>

</table>
	<p class="submit">
	<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
	</p>

	</div>

</div> 


	<div id="content4">
		<div class="wrap">

		<h1><?php esc_html_e( 'Login Logout Menu Item', 'login-page-styler' ); ?></h1>
		<table class="form-table">
		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Show Login/Logout In Menu', 'login-page-styler' ); ?></th>
		<td>
			<div class="onoffswitch">
				<input disabled type="checkbox"  name="lps_loginout_menu" class="onoffswitch-checkbox"  id="myonoffswitchmenu" value='1'<?php checked( 1, absint( get_option( 'lps_loginout_menu' ) ) ); ?> />
				<label class="onoffswitch-label" for="myonoffswitchmenu">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
				</label>
			</div>
			<p class="description"><?php esc_html_e( 'This feature will show a login/logout menu item in your sites menu.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</td>
		</tr>
		</table>

	<div id="headings-data">
	<div id="hed3"><h3><?php esc_html_e( ' Login Short Code  ', 'login-page-styler' ); ?></h3></div>
	<table class="form-table">
		<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Show Logo Button', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_login_widgetButton" class="onoffswitch-checkbox"  id="myonoffswitchWB" value='1'<?php checked( 1, absint( get_option( 'lps_login_widgetButton' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitchWB">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span> 
					</label>
				</div>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Show Register Button', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_register_widgetButton" class="onoffswitch-checkbox"  id="myonoffswitchWB2" value='1'<?php checked( 1, absint( get_option( 'lps_register_widgetButton' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitchWB2">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php esc_html_e( 'Show Lost Password Button', 'login-page-styler' ); ?></th>
				<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_lostpassword_widgetButton" class="onoffswitch-checkbox"  id="myonoffswitchWB3" value='1'<?php checked( 1, absint( get_option( 'lps_lostpassword_widgetButton' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitchWB3">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				</td>
			</tr>

			<tr valign='top'>
			<th scope='row'><?php esc_html_e( 'Login ShortCode', 'login-page-styler' ); ?></th>
			<td><label for='lps_login_shortcode'>
			<p class='description'><?php esc_html_e( '[lps_login_widget]' ); ?></p>
			<p class="description"><?php esc_html_e( 'Select button which you want to show then save settings and use the  short code ' ); ?></p>
			</label></td>
			</tr>

	</table>
	</div>

	<p class="submit">
	<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
	</p>

		</div>   
	</div>


	<div id="content5">
		<div class="wrap">

		<h1><?php esc_html_e( 'Login Redirect', 'login-page-styler' ); ?></h1>
		<table class="form-table">

<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Redirect user after login', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_redirect_users">
			<select name="lps_redirect_users" id="lps_redirect_users">
				<option selected="selected" value=""><?php echo esc_attr( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_redirect_users' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = $page->post_name;
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want user to land on after login.', 'login-page-styler' ); ?></p>
		</label>
	</td>
</tr>


<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Redirect user after logout', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_redirectafter_users">
			<select name="lps_redirectafter_users" id="lps_redirectafter_users">
				<option disabled selected="selected" value=""><?php echo esc_attr( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_redirectafter_users' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option disabled value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want user to land on after logout', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</label>
	</td>
</tr>
		</table>
	<p class="submit">
	<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
	</p>

		</div>   
	</div>   

		<div id="content6">
			<div class="wrap">
			<h1><?php esc_html_e( 'Login Protected Site', 'login-page-styler' ); ?></h1>
			<table class="form-table">


<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Block Page Access 1', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_private_login_url">
			<select name="lps_private_login_url" id="lps_private_login_url">
				<option selected="selected" value="<?php echo esc_attr( '' ); ?>"><?php echo esc_html( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_private_login_url' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want to be login protected ', 'login-page-styler' ); ?></p>
		</label>
	</td>
</tr>





<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Block Page Access 2 ', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_private_login_url2">
			<select name="lps_private_login_url2" id="lps_private_login_url2">
				<option selected="selected" value="<?php echo esc_attr( '' ); ?>"><?php echo esc_html( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_private_login_url2' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want to be login protected ', 'login-page-styler' ); ?></p>
		</label>
	</td>
</tr>




<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Block Page Access 3', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_private_login_url3">
			<select name="lps_private_login_url3" id="lps_private_login_url3">
				<option disabled selected="selected" value="<?php echo esc_attr( '' ); ?>"><?php echo esc_html( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_private_login_url3' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option disabled value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want to be login protected.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label>
	</td>
</tr>



<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Block Page Access 4', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_private_login_url4">
			<select name="lps_private_login_url4" id="lps_private_login_url4">
				<option disabled selected="selected" value="<?php echo esc_attr( '' ); ?>"><?php echo esc_html( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_private_login_url4' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option disabled value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want to be login protected.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label>
	</td>
</tr>




<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Block Page Access 5', 'login-page-styler' ); ?></th>
	<td>
		<label for="lps_private_login_url5">
			<select name="lps_private_login_url5" id="lps_private_login_url5">
				<option disabled selected="selected" value="<?php echo esc_attr( '' ); ?>"><?php echo esc_html( __( 'None' ) ); ?></option>
				<?php
				$selected_page = get_option( 'lps_private_login_url5' );
				$pages         = get_pages();
				foreach ( $pages as $page ) {
					$option_value = esc_attr( $page->post_name );
					$option_label = esc_html( $page->post_title );
					$selected     = selected( $selected_page, $page->post_name, false );
					?>
					<option disabled value='<?php echo esc_attr( $option_value ); ?>' <?php echo esc_attr( $selected ); ?>><?php echo esc_html( $option_label ); ?></option>
				<?php } ?>
			</select>
			<p class="description"><?php esc_html_e( 'Select page which you want to be login protected.', 'login-page-styler' ); ?></p>
			<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
		</label>
	</td>
</tr>

<tr valign='top'>
			<th scope='row'><?php esc_html_e( 'Enable Private Site', 'login-page-styler' ); ?></th>
			<td>
				<div class="onoffswitch">
					<input type="checkbox" name="lps_enable_private_site" class="onoffswitch-checkbox"  id="myonoffswitchprivatesite" value='1'<?php checked( 1, absint( get_option( 'lps_enable_private_site' ) ) ); ?> />
					<label class="onoffswitch-label" for="myonoffswitchprivatesite">
					<span class="onoffswitch-inner"></span>
					<span class="onoffswitch-switch"></span>
					</label>
				</div>
				<p class="description"><?php esc_html_e( 'This feature will make your whole site login protected site', 'login-page-styler' ); ?></p>
				<p class="description"><?php echo ' <a href="https://web-settler.com/login-page-styler/" target="_blank">' . esc_html__( 'This is premium feature Update to pro', 'login-page-styler' ) . '</a>.'; ?></p>
			</td>
			</tr>


			</table>

		<p class="submit">
		<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
		</p>

		</div>
	</div>

  
	<div id="content7">
		<div class="wrap">
		<h1><?php esc_html_e( 'Limit Login Security' ); ?></h1>
		
		<table class="form-table">
		<tr valign='top'>
		<th scope='row'><?php esc_html_e( 'Enable Limit Login Security', 'login-page-styler' ); ?></th>
		<td>
		<div class="onoffswitch">
			<input type="checkbox"  name="lps_enable_lim" class="onoffswitch-checkbox"  id="myonoffswitchl" value='1'<?php checked( 1, absint( get_option( 'lps_enable_lim' ) ) ); ?> />
			<label class="onoffswitch-label" for="myonoffswitchl">
			<span class="onoffswitch-inner"></span>
			<span class="onoffswitch-switch"></span>
			</label>
		</div>
		<p class="description"><?php esc_html_e( 'Select Yes to Enable limit login on your login page ', 'login-page-styler' ); ?></p>
		</td>
		</tr>   


		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Login Attempts', 'login-page-styler' ); ?></th>
		<td><label for="lps_login_attempts">
		<input type="number" id="lps_login_attempts" placeholder="2" name="lps_login_attempts" size="40" value="<?php echo esc_attr( get_option( 'lps_login_attempts' ) ); ?>"/> Attempts.
		<p class="description"><?php esc_html_e( 'Number of Attempts before login lockdown.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>


		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Attempts With In ', 'login-page-styler' ); ?></th>
		<td><label for="lps_attempts_within">
		<input type="number" id="lps_attempts_within" placeholder="1"  name="lps_attempts_within" size="40" value="<?php echo esc_attr( get_option( 'lps_attempts_within' ) ); ?>"/> Minutes
		<p class="description"><?php esc_html_e( ' Failed Attempts within this time period will be blocked.', 'login-page-styler' ); ?></p>
		</label></td>
		</tr>


		<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Lockdown Time', 'login-page-styler' ); ?></th>
		<td><label for="lps_lock_time">
		<input type="number" id="lps_lock_time" placeholder="2"  name="lps_lock_time" size="40" value="<?php echo esc_attr( get_option( 'lps_lock_time' ) ); ?>"/> Minutes
		<p class="description"><?php esc_html_e( ' Time period to block an IP to rety the Login Attempts  ' ); ?></p>
		</label></td>
		</tr>

		</table>

	<p class="submit">
	<input type="submit" class="button-primary" id="lpsbutton-primary" value="<?php esc_html_e( 'Save Changes', 'login-page-styler' ); ?>" />
	</p>

		</form>

		</div>   
	</div>




	<div id="content8">
   
<div class="wrap">
	<h1><?php esc_html_e( 'Limit Login Blocked Ip', 'login-page-styler' ); ?></h1>

	<?php
	global $wpdb;
	$table_name = $wpdb->prefix . 'lps_lockdowns';

	if ( isset( $_POST['release_lockdowns'] ) ) {
		$nonce = isset( $_POST['release_lockdowns_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['release_lockdowns_nonce'] ) ) : '';

		if ( empty( $nonce ) || ! wp_verify_nonce( $nonce, 'release_lockdowns_nonce' ) ) {
			echo 'Nonce verification failed.';
		} else {
			if ( isset( $_POST['releaseme'] ) ) {
				$releaseme = isset( $_POST['releaseme'] ) ? array_map( 'sanitize_text_field', wp_unslash( $_POST['releaseme'] ) ) : array();
				$released  = array_map( 'intval', $releaseme );

				if ( ! empty( $released ) ) {
					foreach ( $released as $release_id ) {
						$releasequery = "UPDATE $table_name SET lpsrelease_date = now() WHERE lpslockdown_ID = %d";
						$releasequery = $wpdb->prepare( $releasequery, $release_id );
						$results      = $wpdb->query( $releasequery );
					}

					echo 'IPs released successfully.';
				} else {
					echo 'No IPs selected for release.';
				}
			}
		}
	}
	?>

	<?php
		$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
	?>

<form method="post" action="<?php echo esc_url( $request_uri ); ?>">

		<h3>
			<?php
			$dalist        = lps_listLockedDown();
			$num_lockedout = count( $dalist );

			if ( $num_lockedout == 1 ) {
				/* translators: %d is the number of locked out IP addresses */
				printf( esc_html__( 'There is currently %d locked out IP address.', 'login-page-styler' ), esc_html( $num_lockedout ) );
			} else {
				/* translators: %d is the number of locked out IP addresses */
				printf( esc_html__( 'There are currently %d locked out IP addresses.', 'login-page-styler' ), esc_html( $num_lockedout ) );
			}
			?>
		</h3>

		<?php
		if ( $num_lockedout == 0 ) {
			echo '<p>No IP currently locked out.</p>';
		} else {
			foreach ( $dalist as $key => $option ) {
				?>
				<li><input type="checkbox" name="releaseme[]" value="<?php echo esc_attr( $option['lpslockdown_ID'] ); ?>"> <?php echo esc_attr( $option['lpslockdown_IP'] ); ?> Country: (<?php echo esc_attr( $tags ); ?> ) (<?php echo esc_attr( $option['minutes_left'] ); ?> minutes left)</li>
				<?php
			}
		}
		?>

		<p class="submit">
			<?php wp_nonce_field( 'release_lockdowns_nonce', 'release_lockdowns_nonce' ); ?>
			<input type="submit" id="lpsbutton-primary" class="button button-primary" name="release_lockdowns" value="<?php esc_html_e( 'Release Selected', 'login-page-styler' ); ?>" />
		</p>
	</form>
</div>

</div>  

</div>

</div>

<?php }; ?>
