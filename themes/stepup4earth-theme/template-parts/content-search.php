<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package StepUp4Earth_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-page'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php stepup4earth_posted_on(); ?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<a class="cta-button" href="<?php the_permalink()?>">Read More →</a>
</article><!-- #post-## -->
