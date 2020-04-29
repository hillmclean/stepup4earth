<?php
/**
 * Template part for projects posts.
 *
 * @package StepUp4Earth_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('workshop-no-owner'); ?>>
<?php if( get_field('image_1') ): ?>
		<div class="workshop-title-image" style="background: url('<?php the_field('image_1') ?>') no-repeat; background-size: cover; background-position: center;">
		<?php endif; ?>
	</div>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="workshop-secondary-image" style="background-image: url(<?php echo get_field("secondary_image") ?>)">
    </div>

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a class="volunteer-button" href="<?php echo get_permalink( get_page_by_path( 'volunteer' ) ); ?>">Volunteer</a>
    </div><!-- .entry-content -->
    <div class="light-green-box"></div>
    <div class="dark-green-box"></div>
    <div class="orange-green-box"></div>
    <div class="green-line"></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
