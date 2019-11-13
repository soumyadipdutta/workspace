<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
		<header>
		
			<div class="top-header">
				<div class="container">
					<div class="col-md-9 pull-right">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>
						<p class="contact-no">(407) 295-3888</p>
						<a href="#" class="btn">Information Request</a>
					</div>
				</div>
			</div>

			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 site-logo">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Logo" />
						</div>

						<div class="col-md-9 main-menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
							<div class="header toggle-link"><a href="#menu"></a></div>
						</div>
					</div>
				</div>
			</div>
		</header>
