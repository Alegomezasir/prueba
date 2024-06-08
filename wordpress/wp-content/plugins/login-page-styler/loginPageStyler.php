<?php

/*
 * Plugin Name: Custom Login Page Styler For WordPress
 * Plugin URI:http://web-settler.com/login-page-styler/
 * Description: Custom Login Page Styler to  Customize, Brand, Theme, Secure Your Login Page, Customize login logo and so much more.
 * Author: Zia Imtiaz
 * Version:           6.2.5
 *
 * Requires at least: 4.0
 * Requires PHP:      5.3
 * Author URI:http://web-settler.com/login-page-styler/
 * License: GPLv2
 * Text Domain: login-page-styler
 * Domain Path: /languages
 */


/**
 * Summary of lps_login_template_design
 * Function to select templete design for login page
 */

// Security check to prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Summary of lps_login_template_design
 *
 * Adding login template
 */
function lps_login_template_design() {
	if ( get_option( 'lps_layout' ) == 'lay1' ) {
		include 'template/template1.php';
	}
}

if ( get_option( 'lps_layout' ) !== '' ) {
	/**
	 * Summary of lps_login_function
	 * function to add filter for changing text of input label for a selected templete
	 */
	function lps_login_function() {
		add_filter( 'gettext', 'username_change', 20, 3 );

		/**
		 * Summary of username_change
		 *
		 * @param mixed $translated_text Translated text.
		 * @param mixed $text Original text.
		 * @param mixed $domain Text domain.
		 * @return mixed Modified translated text.
		 */
		function username_change( $translated_text, $text, $domain ) {
			if ( $text == 'Username or Email Address' ) {
				$translated_text = 'Username';
			}
			return $translated_text;
		}
	}
	add_action( 'login_head', 'lps_login_function' );
}

/**
 * Summary of lps_login_background_color
 * function to change background color of login page
 */
function lps_login_background_color() {

	if ( ! empty( get_option( 'lps_login_background_color' ) ) ) {
		echo '<style> body {  background-color: ' . esc_attr( get_option( 'lps_login_background_color' ) ) . '!important; } </style>';
	}
}


/**
 * Summary of lps_login_label_color
 * function to change label color of login form
 */
function lps_login_label_color() {

	echo '<style> .login label{ color: ' . esc_attr( get_option( 'lps_login_label_color' ) ) . '!important;  } </style > ';
}


/**
 * Summary of lps_login_form_input_color_opacity
 * function to change  login form input fields opacity with color
 */

/*
Function lps_login_form_input_color_opacity() {

	echo ' < style > . login form . input{background: rgba( ' . esc_attr( get_option( 'lps_login_form_input_color_opacity' ) ) . ' ) ! important;} < / style > ';
}
*/
/**
 * Summary of lps_login_nav_size
 *
 * Nav links font size change
 */
function lps_login_nav_size() {

	echo '<style> .login #nav,
.login #backtoblog{font-size:' . esc_attr( get_option( 'lps_login_nav_size' ) ) . 'px !important;}</style>';
}

/**
 * Summary of lps_login_nav_color
 * function to change color of login nav link
 */
function lps_login_nav_color() {

	echo '<style> .login #backtoblog a, 
	.login #nav a{ color : ' . esc_attr( get_option( 'lps_login_nav_color' ) ) . '!important;}</style>';
}

/**
 * Summary of lps_login_nav_hover_color
 * function to change color on hover over nav links
 */
function lps_login_nav_hover_color() {

	echo '<style> .login #backtoblog a:hover, .login #nav a:hover{ color : ' . esc_attr( get_option( 'lps_login_nav_hover_color' ) ) . '!important;}</style>';
}

/**
 * Summary of lps_login_form_border_radius
 * function to change border radius of login form
 */
function lps_login_form_border_radius() {

	echo '<style> .login form{ border-radius:' . esc_attr( get_option( 'lps_login_form_border_radius' ) ) . 'px !important;}</style>';
}

/**
 * Summary of lps_login_label_size
 * function to change size of  input label
 */
function lps_login_label_size() {
	if ( get_option( 'lps_login_label_size' ) !== '' ) {
		echo '<style> .login label { font-size:' . esc_attr( get_option( 'lps_login_label_size' ) ) . 'px !important;}</style>';
	}
}

/**
 * Summary of lps_login_remember_label_size
 * function to change the size of label for remember me checkbox
 */
function lps_login_remember_label_size() {

	echo '<style>  .login form .forgetmenot label {font-size:' . esc_attr( get_option( 'lps_login_remember_label_size' ) ) . 'px !important ;} </style>';
}


/**
 * Summary of lps_login_nav_link_hide
 * Function to hide nav link on login page
 */
function lps_login_nav_link_hide() {

	if ( get_option( 'lps_login_nav_link_hide' ) == 1 ) {

		echo '<style> .login #nav {display:none !important;}</style>';
	} else {
		echo '<style> .login #nav {display:block !important;}</style>';
	}
}


/**
 * Summary of lps_login_logo_hide
 * Function to hide login logo
 */
function lps_login_logo_hide() {

	if ( get_option( 'lps_login_logo_hide' ) === '1' ) {

		echo '<style> .login h1 a {display:none !important;}</style>';
	} else {
		echo '<style> .login h1 a {display:block !important;}</style>';
	}
}

/**
 * Summary of lps_login_form_position
 * Function to change position of login form
 */
function lps_login_form_position() {
	$position = get_option( 'lps_login_form_position' );
	$style    = '';

	switch ( $position ) {
		case 1:
			$style = 'top: 0; right: 0; bottom: 0; left: 0; padding: 10% 0 0 0 !important;';
			break;
		case 2:
			$style = 'top: 0; right: auto; bottom: 0; left: 0; padding: 10% 70% 0 0 !important;';
			break;
		case 3:
			$style = 'top: 0; right: 0; bottom: 0; left: auto; padding: 10% 0 0 70% !important;';
			break;
		case 4:
			$style = 'top: 0; right: auto; bottom: auto; left: auto; padding: 1% 0 0 0 !important;';
			break;
		case 5:
			$style = 'top: 0; right: auto; bottom: 0; left: 0; padding: 1% 70% 0 0 !important;';
			break;
		case 6:
			$style = 'top: 0; right: 0; bottom: 0; left: 0; padding: 1% 0 0 70% !important; overflow: hidden;';
			break;
		case 7:
			if ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( ' lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 23.5% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 32% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 30% 0 0 0 !important;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 29% 0 0 0 !important;';
			}
			break;
		case 8:
			if ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 23.5% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 32% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 30% 70% 0 0;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 29% 70% 0 0;';
			}
			break;
		case 9:
			if ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 23.5% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 36% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 32% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 26% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) != 1 && get_option( 'lps_login_nav_link_hide' ) != 1 && get_option( 'lps_login_logo_hide' ) == 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 30% 0 0 70%;';
			} elseif ( get_option( 'lps_login_blog_link_hide' ) == 1 && get_option( 'lps_login_nav_link_hide' ) == 1 && get_option( 'lps_login_logo_hide' ) != 1 ) {
				$style = 'top: auto; right: auto; bottom: auto; left: auto; padding: 29% 0 0 70%;';
			}
			break;
		default:
			$style = 'padding: 8% 0 0 0 !important;';
			break;
	}

	echo '<style>div#login { ' . esc_attr( $style ) . '}</style>';
}

/**
 * Summary of lps_login_form_color
 * function to add login form color
 */
function lps_login_form_color() {
	// Get hex color value from options.
	$hex_color = get_option( 'lps_login_form_color' );

	// Get opacity value from options or use default of 1.
	// Get opacity value from options or use default of 1.
	$opacity = 1;

	// Convert hex color to RGBA format with opacity.
	$rgba_color = hex_to_rgba( $hex_color, $opacity );

	echo '<style> .login form { background: ' . esc_attr( $rgba_color ) . ' !important; }</style>';

}


/**
 * Summary of lps_login_form_input_color_opacity
 *
 * Adding input field opacity
 */
function lps_login_form_input_color_opacity() {
	// Get hex color value from options.
	$hex_color = get_option( 'lps_login_form_input_color', '#000000' );

	// Get opacity value from options or use default of 1.
		$opacity = 1;

	// Convert hex color to RGBA format with default opacity of 1.
	$rgba_color = hex_to_rgba( $hex_color, $opacity );

	echo '<style> .login form input { background: ' . esc_attr( $rgba_color ) . ' !important; }</style>';
}


/**
 * Summary of lps_login_logo_msg_hide
 * function to hide login error msg
 */
function lps_login_logo_msg_hide() {

	if ( get_option( 'lps_login_logo_msg_hide' ) === 1 ) {
		echo '<style> #login_error,.login .message{display:none !important;}</style>';
	} else {

		echo '<style> #login_error,.login .message{display:block !important ;}</style>';
	}

}

/**
 * Summary of lps_login_blog_link_hide
 * function to hide login back to blog link
 */
function lps_login_blog_link_hide() {

	if ( get_option( 'lps_login_blog_link_hide' ) == 1 ) {
		echo '<style> .login #backtoblog{ display:none !important;}</style>';
	} else {
		echo '<style> .login #backtoblog{ display:block !important;}</style>';
	}
}

/**
 * Summary of lps_login_form_input_feild_border_radius
 * adding border radius for input field
 */
function lps_login_form_input_feild_border_radius() {

	echo '<style> .login form .input {border-radius:' . esc_attr( get_option( 'lps_login_form_input_feild_border_radius' ) ) . 'px !important;}</style>';
}


/**
 * Summary of lps_copyright_color
 * adding color for login copyright set by user
 */
function lps_copyright_color() {

	echo '<style> .login .copyright{ color:snow;}</style>';
}

/**
 * Summary of lps_login_custom_css
 * adding custom css  set by user
 */
function lps_login_custom_css() {

	echo '<style>' . esc_attr( get_option( 'lps_login_custom_css' ) ) . '</style>';
}


/**
 * Summary of lps_login_button_border_radius
 * login button border radius set by user
 */
function lps_login_button_border_radius() {

	echo '<style> .login .button-primary{ border-radius:' . esc_attr( get_option( 'lps_login_button_border_radius' ) ) . 'px !important; } </style>';
}


/**
 * Summary of lps_login_form_input_feild_border_color
 * changing border color of input field set by user
 */
function lps_login_form_input_feild_border_color() {

	echo '<style> .login form .input{border-color:' . esc_attr( get_option( 'lps_login_form_input_feild_border_color' ) ) . '!important;}</style>';
}

/**
 * Summary of lps_login_logo_link
 * changing link for login logo set by user
 */
function lps_login_logo_link() {

	return esc_url( get_option( 'lps_login_logo_link' ) );
}


/**
 * Summary of lps_login_logo_tittle
 * changing title for login logo
 */
function lps_login_logo_tittle() {

	return esc_attr( get_option( 'lps_login_logo_tittle' ) );

}


/**
 * Summary of lps_body_bg_img
 * adding bg img to login page body
 */
function lps_body_bg_img() {

	echo '<style> body{ background-image:url(' . esc_url( get_option( 'lps_body_bg_img' ) ) . ')!important;background-position: center top !important;
	background-repeat: ' . esc_attr( get_option( 'lps_login_bg_repeat' ) ) . '!important; display:block;   background-attachment: fixed !important; background-size:100% 100% !important; }</style>';
}


/**
 * Summary of lps_login_logo
 * adding backgroung image to for logo with height and width
 */
function lps_login_logo() {
	if ( get_option( 'lps_login_logo' ) !== '' ) {
			echo '<style> .login h1 a{ background-size:contain ; width: 100%;  background-image:url(' . esc_url( get_option( 'lps_login_logo' ) ) . ') !important;} </style>';
	}

}

/**
 * Summary of lps_login_logo_width
 * changing logo width
 */
function lps_login_logo_width() {

	if ( get_option( 'lps_login_logo_width' ) !== '' ) {
		echo '<style> .login h1 a{ width:' . esc_attr( get_option( 'lps_login_logo_width' ) ) . 'px !important;}</style>';
	}
}

/**
 * Summary of lps_login_logo_height
 * changing login logo height
 */
function lps_login_logo_height() {
	if ( get_option( 'lps_login_logo_height' ) !== '' ) {
		echo '<style> .login h1 a{ height:' . esc_attr( get_option( 'lps_login_logo_height' ) ) . 'px !important;}</style>';
	}
}


/**
 * Summary of lps_login_button_color
 * Changing login button color
 */
function lps_login_button_color() {

	echo '<style> .login .button-primary{background-color:' . esc_attr( get_option( 'lps_login_button_color' ) ) . '!important;

    border-color:' . esc_attr( get_option( 'lps_login_button_border_color' ) ) . '!important; border:1px solid ' . esc_attr( get_option( 'lps_login_button_border_color' ) ) . '!important;

    color:' . esc_attr( get_option( 'lps_login_button_text_color' ) ) . '!important;
 

    }</style>';
}


/**
 * Summary of lps_login_button_color_hover
 * Changing login button hover color
 */
function lps_login_button_color_hover() {

	echo '<style> .login .button-primary:hover {background-color:' . esc_attr( get_option( 'lps_login_button_color_hover' ) ) . '!important;

    border-color:' . esc_attr( get_option( 'lps_login_button_border_color_hover' ) ) . '!important; border:1px solid ' . esc_attr( get_option( 'lps_login_button_border_color_hover' ) ) . '!important;

    color:' . esc_attr( get_option( 'lps_login_button_text_color_hover' ) ) . '!important;

    }</style>';
}


/**
 * Summary of lps_login_form_border_style
 * Changing login form border color size and style
 */
function lps_login_form_border_style() {

	echo '<style> .login form{border-style:' . esc_attr( get_option( 'lps_login_form_border_style' ) ) . '!important;
     border-width:' . esc_attr( get_option( 'lps_login_form_border_size' ) ) . 'px !important;
     border-color:' . esc_attr( get_option( 'lps_login_form_border_color' ) ) . ' !important;}</style>';
}


/**
 * Summary of lps_login_form_input_border_style
 *
 * Changing border style of input field
 */
function lps_login_form_input_border_style() {

	echo '<style> .login form .input{border-style:' . esc_attr( get_option( 'lps_login_form_input_border_style' ) ) . '!important;
	 border-width:' . esc_attr( get_option( 'lps_login_form_input_border_size' ) ) . 'px !important;}</style>';
}

/**
 * Summary of lps_login_form_bg
 *
 * Adding Login form background image
 */
function lps_login_form_bg() {

	echo '<style> .login form {background-image:url(' . esc_attr( get_option( 'lps_login_form_bg' ) ) . ')!important; display:block !important;}</style>';

}

/**
 * Summary of form width
 *
 * Adding form width
 */
function lps_login_form_width() {
	// Get the value from the option, or use default value.
	$login_form_width = get_option( 'lps_login_form_width' );

	// Output the custom styles if the value is greater than 0.
	if ( $login_form_width > 320 ) {
		echo '<style>';
		echo '#login { width: ' . esc_attr( $login_form_width ) . 'px !important; }';
		echo '</style>';
	}
}


/**
 * Summary of lps_font_textlogo
 *
 * Adding fonts to login text logo
 */
function lps_font_textlogo() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfonttext_logo' ) ) );
	echo '<style> 

@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );

.login h1 a {
font-family:' . esc_attr( get_option( 'lps_gfonttext_logo' ) ) . '!important;


	</style>';
}

/**
 * Summary of lps_font_copyright
 *
 * Adding fonts to copyright
 */
function lps_font_copyright() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfont_copyright' ) ) );
	echo '<style> 

@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );

.login .copyright {
font-family:' . esc_attr( get_option( 'lps_gfont_copyright' ) ) . '!important;


	</style>';
}

/**
 * Summary of lps_font_label
 *
 * Adding fonts to login form labels
 */
function lps_font_label() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfontlab' ) ) );
	echo '<style> 

@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );

.login label {
font-family:' . esc_attr( get_option( 'lps_gfontlab' ) ) . '!important;


	</style>';
}

/**
 * Summary of lps_font_btn
 *
 * Adding fonts to login button
 */
function lps_font_btn() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfontbtn' ) ) );

	echo '<style> 
	@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );
.login .button-primary {
	font-family:' . esc_attr( get_option( 'lps_gfontbtn' ) ) . '!important;
}
</style>';

}

/**
 * Summary of lps_font_link
 *
 * Adding fonts to login page nav links
 */
function lps_font_link() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfontlink' ) ) );

	echo '<style> 
	@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );
	.login #nav,
	.login #backtoblog{
	font-family:' . esc_attr( get_option( 'lps_gfontlink' ) ) . '!important;
}
</style>';

}

/**
 * Summary of lps_font_msg
 *
 * Adding fonts to login message , error
 */
function lps_font_msg() {
	$font = str_replace( ' ', '+', esc_attr( get_option( 'lps_gfontmsg' ) ) );

	echo '<style> 
	@import url(https://fonts.googleapis.com/css?family=' . esc_attr( $font ) . ' );
	.login #login_error, 
	.login .message, 
	.login .success{
	font-family:' . esc_attr( get_option( 'lps_gfontmsg' ) ) . '!important;
}
</style>';

}


/**
 * Summary of lps_redirect_to_login
 *
 * Check if no user logged in and private site option is selected redirect to selected page
 */
function lps_redirect_to_login() {
	/*
	Commented code
	if ( ! is_user_logged_in() && get_option( 'lps_enable_private_site' ) == 1 ) {
		wp_redirect( home_url( '/wp-login.php/?redirect_to =' . $_SERVER['REQUEST_URI'] ) );
		exit;
	}
	*/

	if ( ! is_user_logged_in() && get_option( 'lps_enable_private_site' ) == 1 ) {
		$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
		if ( ! empty( $request_uri ) ) {
			$redirect_url = home_url( '/wp-login.php/?redirect_to=' . rawurlencode( $request_uri ) );
			wp_safe_redirect( esc_url( $redirect_url ) );
			exit;
		}
	}
}

// Array of option keys to check.
$option_keys = array(
	'lps_private_login_url',
	'lps_private_login_url2',
	'lps_private_login_url3',
	'lps_private_login_url4',
	'lps_private_login_url5',
);

// Check if any of the option values is not empty.
$should_redirect = false;
foreach ( $option_keys as $option_key ) {
	$option_value = get_option( $option_key );
	if ( ! empty( $option_value ) ) {
		$should_redirect = true;
		break; // Exit the loop if any option value is not empty.
	}
}


/**
 * Summary of lps_redirectpage_to_login
 *
 * Check if no user is logged in and any of the login URL options are set, then redirect to the selected page
 */
function lps_redirectpage_to_login() {
	if ( ! is_user_logged_in() ) {
		$login_urls = array(
			'lps_private_login_url',
			'lps_private_login_url2',
			'lps_private_login_url3',
			'lps_private_login_url4',
			'lps_private_login_url5',
		);

		foreach ( $login_urls as $option_key ) {
			$option_value = get_option( $option_key );

			if ( ! empty( $option_value ) && is_page( $option_value ) ) {
				$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';

				if ( ! empty( $request_uri ) ) {
					$redirect_url = home_url( '/wp-login.php/?redirect_to=' . rawurlencode( $request_uri ) );
					wp_safe_redirect( esc_url( $redirect_url ) );
					exit;
				}
			}
		}
	}
}


/**
 * Custom function to process items with additional arguments.
 *
 * @param array $items An array of items to process.
 * @param array $args  Additional arguments for processing.
 * @return array       Processed items.
 */
function lps_login_logout_link( $items, $args ) {
	if ( 'primary' == $args->theme_location ) {
			$loginoutlink = wp_loginout( 'index.php', false );
			$items       .= '<li class="menu-item">' . $loginoutlink . '</li>';
			return $items;
	}
		return $items;
}

/**
 * Summary of lps_login_redirect_user
 *
 * @param mixed $redirect_to The original redirect URL.
 * @param mixed $request     The login request.
 * @param mixed $user        The user object.
 * @return mixed             The modified redirect URL.
 */
function lps_login_redirect_user( $redirect_to, $request, $user ) {
	// is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		// check for admins.
		if ( in_array( 'administrator', $user->roles, true ) ) {
			// redirect them to the default place.
			return admin_url();
		} else {
			return home_url( get_option( 'lps_redirect_users' ) );
		}
	} else {
		return $redirect_to;
	}
}

/**
 * Summary of lps_logout_redirect_user  on logout
 */
function lps_logout_redirect_user() {
	wp_safe_redirect( home_url( get_option( 'lps_redirectafter_users' ) ) );
	exit;
}



/**
 * Summary of lps_action_links
 *
 * @param array  $links An array of existing plugin action links.
 * @param string $file Path to the plugin file.
 * @return array Modified array of plugin action links.
 */
function lps_action_links( $links, $file ) {
	if ( plugin_basename( dirname( __FILE__ ) . '/loginPageStyler.php' ) == $file ) {
		$links[] = '<a href="' . get_bloginfo( 'url' ) . '/wp-admin/admin.php?page=lps_option">Settings</a>';

	}
	return $links;
}

/**
 * Summary of lps_loginLockdown_install
 * Function to create database tabeles  for limit login attempts
 */
function lps_login_lockdown_install() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'lps_login_fails';

	// Check if the table exists in the cache.
	$table_exists = wp_cache_get( $table_name, 'lps_login_fails' );
	if ( false === $table_exists ) {
		// If not in cache, check in the database.
		$table_exists = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ) );
		// Store in cache for future checks.
		wp_cache_set( $table_name, $table_exists, 'lps_login_fails' );
	}

	if ( $table_exists !== $table_name ) {
		$sql = 'CREATE TABLE ' . $table_name . " (
			`lpslogin_attempt_ID` bigint(20) NOT NULL AUTO_INCREMENT,
			`lpsuser_id` bigint(20) NOT NULL,
			`lpslogin_attempt_date` datetime NOT NULL default '0000-00-00 00:00:00',
			`lpslogin_attempt_IP` varchar(100) NOT NULL default '',
			PRIMARY KEY  (`lpslogin_attempt_ID`)
			);";

			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
			dbDelta( $sql );

			// Update cache after creating table.
			wp_cache_set( $table_name, $table_name, 'lps_login_fails' );
	}

	$table_name = $wpdb->prefix . 'lps_lockdowns';

	// Check if the table exists in the cache.
	$table_exists = wp_cache_get( $table_name, 'lps_lockdowns' );

	if ( false === $table_exists ) {
		// If not in cache, check in the database.
		$table_exists = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ) );

		// Store in cache for future checks.
		wp_cache_set( $table_name, $table_exists, 'lps_lockdowns' );
	}

	if ( $table_exists !== $table_name ) {
		$sql = 'CREATE TABLE ' . $table_name . " (
            `lpslockdown_ID` bigint(20) NOT NULL AUTO_INCREMENT,
            `lpsuser_id` bigint(20) NOT NULL,
            `lpslockdown_date` datetime NOT NULL default '0000-00-00 00:00:00',
            `lpsrelease_date` datetime NOT NULL default '0000-00-00 00:00:00',
            `lpslockdown_IP` varchar(100) NOT NULL default '',
            PRIMARY KEY  (`lpslockdown_ID`)
            );";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql );

		// Update cache after creating table.
		wp_cache_set( $table_name, $table_name, 'lps_lockdowns' );
	}

}

register_activation_hook( __FILE__, 'lps_login_lockdown_install' );


/**
 * Summary of lps_login_text_logo
 *
 * Adding text logo for login page
 */
function lps_login_text_logo() {
	$text_logo            = get_option( 'lps_login_text_logo' );
	$text_logocolor       = get_option( 'lps_textlogo_color' );
	$text_logocolor_hover = get_option( 'lps_textlogo_color_hover' );

	if ( ! empty( $text_logo ) ) {
		// Output custom CSS to display the text logo and hide the default WordPress logo.
		echo '<style>.login h1 a { background: none !important; text-indent: 0; color: ' . esc_attr( $text_logocolor ) . ' !important; font-size: 50px !important; height: auto !important; width: auto !important; }
            .login h1 a img { display: none !important; }
			 .login h1 a:hover:after { color:' . esc_attr( $text_logocolor_hover ) . '; }
            .login h1 a:after { content: "' . esc_attr( $text_logo ) . '" !important; line-height: normal; }</style>';
	}
}


/**
 * Summary of lps_auto_remember_me
 *
 * Adding auto auto remember
 */
function lps_auto_remember_me() {
	if ( ! is_user_logged_in() && get_option( 'lps_auto_rememberme' ) == '1' ) {
		?>
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			var rememberMe = document.getElementById('rememberme');
			if (rememberMe) {
				rememberMe.checked = true;
			}
		});
		</script>
		<?php
	}
}


/**
 * Summary of lps_copyright_notice
 *
 * Adding copyright notice  to loin page
 */
function lps_copyright_notice() {
	$lpscompanyname = esc_html( get_option( 'lps_login_copyright' ) );
	if ( get_option( 'lps_login_copyright' ) !== '' ) {
		echo '<div class="copyright">&copy; ' . esc_html( gmdate( 'Y' ) ) . ' ' . esc_html( $lpscompanyname ) . '. All rights reserved.</div>';
	}
}

/**
 * Summary of lps_copyright_textalign
 *
 * Adding copyright notice  text align
 */
function lps_copyright_textalign() {
	echo ' <style>   .login .copyright{ 
            text-align: center !important; 
            font-size: 13px; 
            position: absolute; 
            left: 50%; 
            transform: translateX(-50%); 
        }</style>';
}
add_action( 'login_head', 'lps_copyright_textalign' );


/**

 * Adjusts the user session timeout based on the settings.
 *
 * @param int $expirein The default session timeout value in seconds.
 *
 * @return int The adjusted session timeout value in seconds.
 */

/*
function lps_user_session_timeout( $expirein ) {
	$session_timeout = get_option( 'lps_login_session_expire' ); // Get the lps session timeout from your settings.

	if ( ! empty( $session_timeout ) && is_numeric( $session_timeout ) && $session_timeout > 0 ) {
		return $session_timeout * 60; // Convert minutes to seconds.
	}

	return $expirein; // Use default if  session timeout is not set or invalid.
}
*/
/**
 * Summary of lps_boxshadow_style
 *
 * Adding box shadow style to form
 */
function lps_boxshadow_styles() {
	// Get box shadow properties from options.
	$box_shadow_horizontal = get_option( 'lps_box_shadow_horizontal', '0' );
	$box_shadow_vertical   = get_option( 'lps_box_shadow_vertical', '0' );
	$box_shadow_blur       = get_option( 'lps_box_shadow_blur', '10' );  // Original blur value.
	$box_shadow_spread     = get_option( 'lps_box_shadow_spread', '0' );   // Corrected spread value.
	$box_shadow_color_hex  = get_option( 'lps_box_shadow_color', ' 000000' );
	$box_shadow_opacity    = get_option( 'lps_box_shadow_opacity', '1' );

	// Convert hex color to rgba.
	$box_shadow_color_rgba = hex_to_rgba( $box_shadow_color_hex, $box_shadow_opacity );

	echo '<style type="text/css">';

	// Set box shadow style.
	echo '.login form {';
	echo '  box-shadow: ' . esc_attr( $box_shadow_horizontal ) . 'px ' . esc_attr( $box_shadow_vertical ) . 'px ' . esc_attr( $box_shadow_blur ) . 'px ' . esc_attr( $box_shadow_spread ) . 'px ' . esc_attr( $box_shadow_color_rgba ) . ';';
	echo '}';

	echo '</style>';
}


/**
 * Convert a hex color code to RGBA format.
 *
 * @param string $color   The hex color code to convert.
 * @param float  $opacity The opacity value, a float between 0 and 1.
 *
 * @return string|false The RGBA color code on success, or false on failure.
 */
function hex_to_rgba( $color, $opacity = 1 ) {
	$color = str_replace( '#', '', $color );

	if ( strlen( $color ) == 6 ) {
		list($r, $g, $b) = str_split( $color, 2 );
	} elseif ( strlen( $color ) == 3 ) {
		list($r, $g, $b) = str_split( $color, 1 );
		$r              .= $r;
		$g              .= $g;
		$b              .= $b;
	} else {
		return false;
	}

	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );

	return "rgba($r, $g, $b, $opacity)";
}


/**
 * Enqueue styles and add custom animation to the login form based on the selected animation option.
 */
function lps_login_page_animation() {
	// Get the selected animation option from the WordPress options.
	$selected_animation = get_option( 'lps_login_animation', 'fadeIn' );

	// Enqueue the necessary stylesheets based on the selected animation.
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), '3.7.2' );

	// Add a custom style to apply the selected animation to the login form.
	echo '<style>';
	echo '#login {';
	echo '    animation-name: ' . esc_attr( $selected_animation ) . ';';
	echo '    animation-duration: 1.2s;';
	echo '    animation-fill-mode: both;';
	echo '}';
	echo '</style>';
}

/**
 * Enqueue styles  for changing login button width.
 */
function lps_login_button_size() {
	$button_width = get_option( 'lps_login_button_size' );

	echo '<style> .login .button-primary{margin-top:2px; width:' . esc_attr( $button_width ) . 'px; } </style> ';

}

require 'loginPageStylerOption.php';

require 'loginPageStylerLim.php';

require 'loginPageStylerBgSlideShow.php';

if ( get_option( 'lps_login_on_off' ) == 1 ) {
	require 'lpsReCaptcha.php';
}

if ( get_option( 'lps_login_on_off' ) == '1' ) {
	require 'lpsFiltersAndActions.php';
}

$login_widget        = get_option( 'lps_login_widgetButton', 0 );
$register_widget     = get_option( 'lps_register_widgetButton', 0 );
$lostpassword_widget = get_option( 'lps_lostpassword_widgetButton', 0 );

// Check if at least one of the options is 1.
if ( $login_widget == 1 || $register_widget == 1 || $lostpassword_widget == 1 ) {
	require 'loginPageStylerWidget.php';
}
