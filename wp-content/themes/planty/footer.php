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

			<footer id="site-footer" class="header-footer-group">

				<div class="footer_nav">
				<?php
									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'menu' => 'menu footer planty',
										)
									);
								?>

				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
