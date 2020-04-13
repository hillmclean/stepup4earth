<?php
/**
 * The template for displaying volunteer page.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>
	<div class="background-grey-box"></div>
	<div class="background-green-box"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			    <article id="post-<?php the_ID(); ?>" <?php post_class('donate-content'); ?>>
				    <header class="entry-header">
					    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				    </header><!-- .entry-header -->

				    <div class="entry-content">
					    <?php the_content(); ?>
					    <?php
						    wp_link_pages( array(
							    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							    'after'  => '</div>',
						    ) );?>
					    <!-- <a class="donate-button" href="<?php echo get_field('donation_link'); ?>" target=”_blank”>Donate</a> -->
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="USXZ3X7P6K89W">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"  name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">
<img alt=""  src="https://www.paypal.com/en_CA/i/scr/pixel.gif" width="1" height="1">
</form>
				    </div><!-- .entry-content -->
			    </article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
