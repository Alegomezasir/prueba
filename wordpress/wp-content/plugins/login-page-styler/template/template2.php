<?php

// Security check to prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**  This is a PHP file that contains CSS rules
 * No file-level documentation comment needed in this context
 *
 * @package Login Page Styler
 */

?>
<style>

html{
	background: none;
}


body{

	text-align:center;
	background: url(
	<?php
	if ( get_option( 'lps_body_bg_img' ) === '' ) {

		echo esc_url( plugins_url( '../images/temp.jpg', __FILE__ ) );

	} else {

		echo esc_attr( get_option( 'lps_body_bg_img' ) );

	}
	?>
	) no-repeat center center fixed !important; 
	background-size: cover !important; 
}

.login h1 a{
	margin: 0 auto;
}

.login form label{
	color: white;
}

.login h1{
	<?php if ( get_option( 'lps_login_form_color' ) !== '' ) { ?>
	background:<?php echo esc_attr( get_option( 'lps_login_form_color' ) ); ?>;
		<?php
	}
	?>
	background:rgba(
	<?php

	if ( get_option( 'lps_login_form_color_opacity' ) !== '' ) {

		echo esc_attr( get_option( 'lps_login_form_color_opacity' ) );
	} else {
		echo '0,0,0,0.2';
	}
	?>
	);
	padding-top: 20px;
		border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	}

.login form{ 
	margin: 0;
	background:rgba(
		<?php

		if ( get_option( 'lps_login_form_color_opacity' ) !== '' ) {

			echo esc_attr( get_option( 'lps_login_form_color_opacity' ) );
		} else {
			echo '0,0,0,0.2';
		}

		?>
)!important; 
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;

}

.login form .input:focus{
	box-shadow: none;
}

.login form .input{

	background-color: transparent;
	border: none;
	border-bottom: 4px solid #ffffff !important;
	color: white;
	font-size: 20px;
	letter-spacing: -1px;
	outline: 0;
	padding: 5px 20px;
	text-align: center;
	transition: all 0.3s;
	width: 190px;
	box-shadow: none;
}

.login .button-primary{

}

#login form p{
	text-align: center;
	display:inline-block;
}

.login label {
	display:inline!important;
	letter-spacing: 2px;
	color: white;
	color: #9B9B9B;
	cursor: text;
	font-size: 20px;
	line-height: 30px;
	text-transform: uppercase;
	-moz-transform: translateY(-34px);
	-ms-transform: translateY(-34px);
	-webkit-transform: translateY(-34px);
	transform: translateY(-34px);
	transition: all 0.3s;
}

.login form .input:focus {
	width: 280px;
}

.login form .input:focus + .login label {
	color: #F0F0F0;
	font-size: 13px;
	-moz-transform: translateY(-74px);
	-ms-transform: translateY(-74px);
	-webkit-transform: translateY(-74px);
	transform: translateY(-74px);
}

.login form .input:valid + .login label {
	font-size: 13px;
	-moz-transform: translateY(-74px);
	-ms-transform: translateY(-74px);
	-webkit-transform: translateY(-74px);
	transform: translateY(-74px);
}


.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
	width: 100%;
	border: none;
	box-shadow: none;
	text-shadow: none;
	background: #75888E;
	height:44px;
	font-size:17px;
	margin-top:	14px;
	transition: all 0.3s ease 0s;
	color:#E4E4E4;
}
.login .button-primary:hover{
	background: #82B1A1;
}

.login #nav {
	width:100%;
	padding:0;
	text-align:center;
	transition: all 0.3s ease 0s;
}

.login #nav a{
	width: 100%;
	border: 
		<?php
		if ( get_option( 'lps_login_button_border_color' ) !== '' ) {
			echo '1px solid';
		}
		?>
	;
	border-color:<?php echo esc_attr( get_option( 'lps_login_button_border_color' ) ); ?>;
	background: 
	<?php
	if ( get_option( 'lps_login_nav_color' ) !== '' ) {
		echo esc_attr( get_option( 'lps_login_nav_color' ) );
	} else {
		echo '#75888E'; }
	?>
	;
	padding: 10px;
	border-radius: 5px;
	transition: all 0.3s ease 0s;
	color:
	<?php
	if ( get_option( 'lps_login_button_text_color' ) !== '' ) {
		echo esc_attr( get_option( 'lps_login_button_text_color' ) );
	} else {
		echo '#E4E4E4'; }
	?>
	!important ;
}

.login #nav a:hover {

	border: 
	<?php
	if ( get_option( 'lps_login_button_border_color_hover' ) !== '' ) {
		echo '1px solid';
	}
	?>
	;
	border-color:<?php echo esc_attr( get_option( 'lps_login_button_border_color_hover' ) ); ?>;
	background: 
	<?php
	if ( get_option( 'lps_login_nav_hover_color' ) !== '' ) {
			echo esc_attr( get_option( 'lps_login_nav_hover_color' ) );
	} else {
			echo '#82B1A1'; }
	?>
	;
	color:
	<?php
	if ( get_option( 'lps_login_button_text_color_hover' ) !== '' ) {
			echo esc_attr( get_option( 'lps_login_button_text_color_hover' ) );
	} else {
			echo 'white'; }
	?>
	!important ;
}

p #reg_passmail{
}

.login #backtoblog a{ 
	width: 100% ;
	border: 
	<?php
	if ( get_option( 'lps_login_button_border_color' ) !== '' ) {
		echo '1px solid';
	}
	?>
	;
	border-color:<?php echo esc_attr( get_option( 'lps_login_button_border_color' ) ); ?>;
	background: 
	<?php
	if ( get_option( 'lps_login_nav_color' ) !== '' ) {
		echo esc_attr( get_option( 'lps_login_nav_color' ) );
	} else {
		echo '#75888E';}
	?>
	!important ;
	padding: 10px;
	border-radius: 5px;
	transition: all 0.3s ease 0s;
	color: 
	<?php
	if ( get_option( 'lps_login_button_text_color' ) !== '' ) {
			echo esc_attr( get_option( 'lps_login_button_text_color' ) );
	} else {
			echo '#E4E4E4'; }
	?>
	!important ;
}

.login #backtoblog a:hover{

	border: 
	<?php
	if ( get_option( 'lps_login_button_border_color_hover' ) !== '' ) {
		echo '1px solid';
	}
	?>
	;
	border-color:<?php echo esc_attr( get_option( 'lps_login_button_border_color_hover' ) ); ?>;
	background: 
	<?php
	if ( get_option( 'lps_login_nav_hover_color' ) !== '' ) {
			echo esc_attr( get_option( 'lps_login_nav_hover_color' ) );
	} else {
			echo '#82B1A1'; }
	?>
	!important ;
	color: 
	<?php
	if ( get_option( 'lps_login_button_text_color_hover' ) !== '' ) {
			echo esc_attr( get_option( 'lps_login_button_text_color_hover' ) );
	} else {
			echo 'white';}
	?>
	!important ;
}

.login #backtoblog{
	width:100%;
	padding:0;
	text-align:center;
	margin-top:30px;
	transition: all 0.3s ease 0s;
}

div#login{
	padding-top:4%;
}

.login form .forgetmenot label{
}

</style>
