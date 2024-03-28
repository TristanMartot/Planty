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
$menu_name = 'planty_footer';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

if(!empty($menu)):
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
 
  	foreach( $menuitems as $key => $item ):
    $title = $item->title;
    $link = $item->url;
    echo "<li class='nav-item'>";
    echo "<a class='nav-item nav-link' href=" . $link . ">" . $title . "<span class='nav-underline'></span></a>";
    echo "</li>";
	endforeach;
	endif; 		
				?>
				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
