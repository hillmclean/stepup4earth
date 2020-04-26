<?php
/**
 * Template part for displaying single posts.
 *
 * @package StepUp4Earth_Theme
 */

?>

<article class="single-post-main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-res-single">
		<div class="single-thumbnail">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>
		<div class="single-page-box1"></div>
		<div class="single-page-box2"></div>
		<div class="single-page-box3"></div>
		<div class="single-page-box4"></div>
		<div class="single-post-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="single-entry-meta">
			<?php stepup4earth_posted_on(); ?> / <?php stepup4earth_comment_count(); ?> / <?php stepup4earth_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php the_post_navigation(); ?>

	<footer class="entry-footer">
		<?php stepup4earth_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
