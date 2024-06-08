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

body { 

	background-color:#f5683d ; 

} 

#login form p {
	text-align:center;
}

.login h1 a{

	margin: 0 auto;
}

.login h1{

	<?php

	if ( get_option( 'lps_login_form_color_opacity' ) !== '' ) {
		?>
		background:rgba(<?php echo esc_attr( get_option( 'lps_login_form_color_opacity' ) ); ?>);
			<?php
	} else {
			echo 'white';
	}
	?>

	<?php if ( get_option( 'lps_login_form_color' ) !== '' ) { ?>
		background:<?php echo esc_attr( get_option( 'lps_login_form_color' ) ); ?>;
		<?php
	}
	?>
	padding-top: 20px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}

.login form{ 
	margin: 0;
	background:white;
	border-top-left-radius: 0px !important;
	border-top-right-radius: 0px !important;
	border-bottom-left-radius: 5px !important;
	border-bottom-right-radius: 5px !important;
}

.login form .input{
	background: #EFEFEF;
	box-shadow: none;
	color: #616161;
	text-align: center;
	padding: 10px;
}

.login .button-primary{

}

.login label{
	color:#616161;
}

.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
	width: 100%;
	border: none;
	box-shadow: none;
	text-shadow: none;
	height:44px;
	font-size:17px;
	margin-top:	14px;
	transition: all 0.3s ease 0s;
	color:white;

}

.login .button-primary:hover{
	background:#478ffb;
	color:white;
}

.login #nav {
	width:100%;
	padding:0;
	text-align:center;
	transition: all 0.3s ease 0s;
}

.login #nav a{
	width: 100%;
	background:75888E;
	padding: 10px;
	border-radius: 5px;
	transition: all 0.3s ease 0s;
	color:white;
}

.login #nav a:hover{
	background: #0085BA;
	color:white;
}

p #reg_passmail{
}

.login #backtoblog a{
	transition: all 0.3s ease 0s;
	color:#948376;
}

.login #backtoblog a:hover{
	color:#6F7273;
}

.login #backtoblog{
	width:100%;
	padding:0;
	text-align:center;
	transition: all 0.3s ease 0s;
}

div#login{
	padding-top:4%;
}
.login form .forgetmenot label{
}
.login form .forgetmenot label{
}


</style>
