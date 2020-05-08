<?php
/**
 * Template part for displaying posts.
 *
 * @package StepUp4Earth_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-template'); ?>>
	<header class="entry-header">

	<?php if ( has_post_thumbnail() ) {
		$postImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
		}  
	?>
			
		<div class="archive-thumbnail" style="background: url('<?php echo $postImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php stepup4earth_posted_on(); ?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a class="cta-button" href="<?php the_permalink()?>">Read More →</a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
