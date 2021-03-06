<?php
/**
 * The template for displaying volunteer page.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			    <article id="post-<?php the_ID(); ?>" <?php post_class('success-content'); ?>>
				    <header class="entry-header">
					    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				    </header><!-- .entry-header -->
					<div class="entry-content" style="background-image: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)),url(<?php echo get_the_post_thumbnail_url()?>)">
					    <?php the_content(); ?>
					    <?php
						    wp_link_pages( array(
							    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							    'after'  => '</div>',
						    ) );
					    ?>
				    </div><!-- .entry-content -->
			    </article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
