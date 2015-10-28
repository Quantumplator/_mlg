<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marchese
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_mlg' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', '_mlg' ); ?></span><i class="fa fa-bars"></i></button>
			<div class="site-top-extra-container">
<!-- 				<span class="site-action" href="">need a</span>
				<span class="site-phone" href="">FRESH START?</span>
				<span class="site-email" href=""></span> -->
			</div>
			<!-- When you have time, hook custom search function to set id #search and add aria-controls="search" to this button. Semantics.  -->
      <button class="search-toggle" aria-expanded="false"><span class="screen-reader-text"><?php // esc_html_e( 'Search', '_mlg' ); ?></span><i class="fa fa-search"></i></button>
			<?php get_search_form(); ?>			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<div class="site-branding-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="http://localhost:8888/marchese/wp-content/themes/_mlg/img/logo.png" title="Marchese Law Group" />
				</a><h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description">
					<div><span>C</span>ENTRAL<span> C</span>OAST</div>
					<div><span>B</span>ANKRUPTCY<span> L</span>AWYERS</div>
				</h2>
			</div>
			<div class="site-action-container free-consultation">
				<a class="site-action mlg-free" href="#consultation">FREE CONSULTATION</a>
			</div>
			<div class="site-action-container mlg-contact-info">
				<a class="site-action mlg-phone" href="tel:8055411151">(805) 541-1151</a>
				<a class="site-action mlg-email" href="mailto:info@marcheselawgroup.com">info@MarcheseLawGroup.com</a>
				<a class="site-action mlg-address" href="mailto:info@marcheselawgroup.com">873 A Santa Rosa St, San Luis Obispo, CA 93401</a>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="hero" class="splash-header">
			<h1><span class="needa">need a</span> <span class="freshstart">FRESH START?</span></h1>
			<img src="http://localhost:8888/marchese/wp-content/uploads/marcheses.png" title="Marchese Law Group" />
		</div>
		<div id="below-splash" class="content-container">
