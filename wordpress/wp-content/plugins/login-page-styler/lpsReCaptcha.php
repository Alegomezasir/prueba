<?php

// Security check to prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// For more information about the usage of Google ReCAPTCHA, refer to the readme file.
// See the "Usage of Google ReCAPTCHA" section in the readme for details.
// Google ReCAPTCHA script registration.
function login_recaptcha_script() {
	wp_register_script( 'recaptcha_login', 'https://www.google.com/recaptcha/api.js', array(), null, true );
	wp_enqueue_script( 'recaptcha_login' );

}
add_action( 'login_enqueue_scripts', 'login_recaptcha_script' );



if ( get_option( 'lps_login_captcha' ) == 1 ) {

	function lps_display_login_captcha() {
		$site_key = get_option( 'rs_site_key' );
		if ( $site_key ) {
			echo '<div style="margin-bottom: 10px; transform: scale(.94); transform-origin: 0 0" class="g-recaptcha" data-theme="dark" data-sitekey="' . esc_attr( $site_key ) . '"></div>';
			wp_nonce_field( 'lps_login_captcha_nonce', 'lps_login_captcha_nonce' );
		}
	}
	add_action( 'login_form', 'lps_display_login_captcha' );

	function lps_verify_login_captcha( $user, $password ) {
		if ( isset( $_POST['g-recaptcha-response'] ) && isset( $_POST['lps_login_captcha_nonce'] ) && check_admin_referer( 'lps_login_captcha_nonce', 'lps_login_captcha_nonce' ) ) {
			$recaptcha_secret   = get_option( 'rs_private_key' );
			$recaptcha_response = isset( $_POST['g-recaptcha-response'] ) ? sanitize_text_field( wp_unslash( $_POST['g-recaptcha-response'] ) ) : '';

			if ( empty( $recaptcha_secret ) ) {
				return new WP_Error( 'Captcha Invalid', __( 'reCAPTCHA secret key is not configured.' ) );
			}

			if ( empty( $recaptcha_response ) ) {
				return new WP_Error( 'Captcha Invalid', __( 'Please complete the reCAPTCHA.' ) );
			}

			$response = wp_remote_get( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response );

			if ( is_wp_error( $response ) ) {
				return new WP_Error( 'Captcha Invalid', __( 'Error while verifying reCAPTCHA.' ) );
			}

			$response_body = wp_remote_retrieve_body( $response );
			$response_data = json_decode( $response_body, true );

			if ( isset( $response_data['success'] ) && $response_data['success'] ) {
				return $user;
			} else {
				return new WP_Error( 'Captcha Invalid', __( 'reCAPTCHA verification failed. You might be a bot.' ) );
			}
		} else {
			return new WP_Error( 'Captcha Invalid', __( 'Please complete the reCAPTCHA.' ) );
		}
	}

	add_filter( 'authenticate', 'lps_verify_login_captcha', 40, 2 );

}
