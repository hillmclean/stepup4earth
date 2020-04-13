<?php
/**
 * The template for displaying the footer.
 *
 * @package StepUp4Earth_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-container">
					<div class="menu-container">
						<?php wp_nav_menu();?>
					</div>
				  <div class="widget-area">
					<?php dynamic_sidebar('sidebar-2'); ?>
				  </div><!-- .widget-area -->
				</div><!-- .footer-container -->

				<p class="rights-reserved" >© 2020 STEP UP 4 EARTH, ALL RIGHTS RESERVED.</p>
			</footer><!-- .site-footer -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
