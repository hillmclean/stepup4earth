<?php
/**
 * Template part for displaying single posts.
 *
 * @package StepUp4Earth_Theme
 */

?>

<article class="single-project-main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- <div class="single-page-bkgd-box"> -->

	<header class="entry-header-res-single">

	<?php if( get_field('image_1') ): ?>
		<div class="single-thumbnail" style="background: url('<?php the_field('image_1') ?>') no-repeat; background-size: cover; background-position: center;">
		<?php endif; ?>
	</div>

		<div class="single-page-box1"></div>
		<div class="single-page-box2"></div>
		<div class="single-page-box3"></div>
		<div class="single-page-box4"></div>
		<div class="single-post-header-text">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php stepup4earth_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			</div>
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
	<div class="resource-nav">
		<?php the_post_navigation(); ?>
	</div>
	
	<footer class="entry-footer">
		<?php stepup4earth_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
