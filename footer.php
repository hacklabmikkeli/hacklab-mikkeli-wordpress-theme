<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-logo">
					<div class="footer-logo-content">
						<img width="200" class="footer-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/hacklab-logo.svg" alt="hacklab mikkeli footer logo" />
						<p>&copy; Hacklab Mikkeli</p>
						<p>versio 1.0.2</p>
					</div>
				</div>
			</footer><!-- .site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
