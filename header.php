<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package contentJones_S
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<! LOAD TYPEKIT -->
<script src="//use.typekit.net/klp7ybe.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- ******** OFF CANVAS WIDGET AREA ******** -->
	<div id="site-wrapper">  
	<div id="site-canvas">
		
		<div id="off-canvas">
			
			<?php get_sidebar(); ?>
			
		</div>

	
	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'contentjones_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
