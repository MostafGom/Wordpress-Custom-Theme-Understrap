<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Sans+Pro:wght@400;700;900&display=swap" rel="stylesheet">
	<?php wp_head();?>
</head>

<body <?php body_class();?> <?php understrap_body_attributes();?>>
<?php do_action('wp_body_open');?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<div class="top-header-holder">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-md-4">
						<a href="/MySites/wp-sites/restaurant-understrap/" class="logo-holder">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/logo2.png" alt="company logo">
						</a>
					</div>

					<div class="col-md-6">
						<div class="reservation-holder">
								<div class="contact-holder">
									<a href="#" class="phone">
										<i class="fa fa-phone"></i>
										202-555-0120
									</a>
									<a href="#" class="address">
										<i class="fa fa-map"></i>
										2225 Clarksburg Park Road
									</a>
									<div class="social-media-holder-tablet">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-facebook"></i></a>
									</div>

									<button class="navbar-toggler md-view" type="button" data-toggle="collapse" 			data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
									<!-- <span class="navbar-toggler-icon"></span> -->
									<div class="menu-title">Menu</div>
									<div>
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>

									</button>
								</div>
						</div>
						<a href="#" class="reservation-btn">Meditate With Us</a>
					</div>

					<div class="col-">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
							<!-- <span class="navbar-toggler-icon"></span> -->
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="menu-title">Menu</div>
						</button>
						<div class="social-media-holder">
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
					</div>

				</div>

			</div>
		</div>
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e('Main Navigation', 'understrap');?>
			</h2>

		<?php if ('container' === $container): ?>
			<div class="container">
		<?php endif;?>



				<!-- The WordPress Menu goes here -->
				<?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navbarNavDropdown',
        'menu_class' => 'navbar-nav',
        'fallback_cb' => '',
        'menu_id' => 'main-menu',
        'depth' => 2,
        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
    )
);
?>
			<?php if ('container' === $container): ?>
			</div><!-- .container -->
			<?php endif;?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	<div class="container">
		<div class="mobile-logo-holder">
						<div>
							<a href="/MySites/wp-sites/restaurant-understrap/" class="logo-holder-mob">
								<img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/logo2.png" alt="company logo">
							</a>
						</div>
						<div>
							<a href="#" class="reservation-btn mobile">Meditate With Us</a>
						</div>
				</div>
		</div>