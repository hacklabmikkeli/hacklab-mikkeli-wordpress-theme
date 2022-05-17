<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site-inner">
		<header id="site-header" class="header-footer-group" role="banner">

			<div class="image-container">
				<video class="header-video" autoplay alt="hacklab mikkeli header background video">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mov/herovideo.mp4" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg"/>
				</video>
				<a class="header-logo" href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hacklab-logo.png" alt="hacklab mikkeli logo" />
				</a>
				<div class="top-bar">

				</div>
			</div><!-- .image-container -->

		</header><!-- #site-header -->
	</div>
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
