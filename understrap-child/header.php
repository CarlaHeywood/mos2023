<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

		<!--Topbar Start-->
		<div class="topbar-wrap">
			<div class="container">
				<div class="row topbar">
					<div class="col-lg-6 col-md-6">
						<div class="address pt-3">Hollywood's 1st Mobile Momager for Families in Show Biz</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<ul class="top_right p-0 text-end">
							<li>
								<div class="followus"><span>Follow Us</span>
									<ul class="soclia_media">
										<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</li>
							<li>
								<div class="phone"><a href="tel:+1(310)4029194"><i class="fa fa-phone-alt text-white" aria-hidden="true"></i> (310) 402 9194</a></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--Topbar End-->
			
		<div id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-black" aria-labelledby="main-nav-label">
			<div class="container">
				<!--Header Start-->
				<div class="header-wrap" style="color:white;">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12 navbar-dark">
								<div class="row">
									<div class="col logo align-middle"> 
										<a href="/" class="logo">
											<img alt="" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
										</a>
									</div>
									<button class="col-2 navbar-toggler text-end m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon m-3 p-0"></span>
									</button>
								</div>
							</div>
							<div class="col-lg-8 col-md-12 text-white">
								<div class="navigation-wrap" id="filters">
									<nav class="navbar navbar-expand-lg navbar-dark mt-2"> <a class="navbar-brand" style="color:white;" href="/">Menu</a>
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
											<?php
											wp_nav_menu(
												array(
													'theme_location'  => 'primary',
													'container_class' => 'collapse navbar-collapse',
													'container_id'    => 'navbarNavDropdown',
													'menu_class'      => 'navbar-nav ml-auto',
													'fallback_cb'     => '',
													'menu_id'         => 'main-menu',
													'depth'           => 2,
													'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
												)
											);
											?>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Header End-->
			</div><!-- .container -->
		</div><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
