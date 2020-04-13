<?php
/**
 * Template part for displaying workshop with no owner content in page.php.
 *
 * @package StepUp4Earth_Theme
 */

?>

<!-- Start the carousel cell -->
<div class="carousel-cell" id="<?php echo 'carousel-cell' . $counter; ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class('workshop-with-owner'); ?>>
    <div class="workshop-order-number">
	<p><?php echo $counter ;?></p>
    </div>
    <div class="workshop-title-image" style="background-image: url(<?php echo get_field("title_image") ?>)">
    </div>
	<header class="entry-header">
	    <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="workshop-owner">
	    <h3><?php echo get_field("owner"); ?></h3>
	</div>
    <div class="workshop-secondary-image" style="background-image: url(<?php echo get_field("secondary_image") ?>)">
    </div>
    <!-- If is not mobile, hide pagination -->
    <?php if ( wp_is_mobile() and !wp_is_mobile()) : ?>
    <div class="carousel-pagination">
	<div class="carousel-pagination-numbers"></div>
	<div class="carousel-pagination-buttons">
	    <div class="carousel-pagination-prev">
		<i class="fas fa-arrow-left"></i>
	    </div>
	    <div class="carousel-pagination-next">
		<i class="fas fa-arrow-right"></i>
	    </div>
	</div>
    </div>
    <?php endif; ?>
    <div class="entry-content">
	<?php the_content(); ?>
	<a class="volunteer-button" href="<?php echo get_permalink( get_page_by_path( 'volunteer' ) ); ?>">Volunteer</a>
    </div><!-- .entry-content -->
    <div class="dark-blue-box"></div>
    <div class="orange-green-box"></div>
    <div class="green-line"></div>
    </article><!-- #post-## -->
</div>
<?php array_push($workshop_carousel_links, '#carousel-cell'.$counter); ?>


