<?php
/**
 *   The template for displaying resources posts.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-resources" role="main">

		<div class="resource-title-container">
			<h1 class="resources-title">Resources</h1>
			<h2 class="resources-tagline">Helping you help the earth</h2>
		</div>

			<section class="resource-section">

				<div class="carousel-pagination">

					<div class="carousel-pagination-buttons">
						<div class="carousel-pagination-prev">
							<i class="fas fa-arrow-left"></i>
						</div>
						<div class="carousel-pagination-next">
							<i class="fas fa-arrow-right"></i>
						</div>
					</div>

				</div>

				<div class="carousel">

				<?php
				$args = array( 
					'post_type' => 'post',
					'posts_per_page' => '-1'
				);
				$blog_posts = get_posts( $args ); 
				?>

				<?php foreach($blog_posts as $post): setup_postdata ($post); ?>

					<div class="speakers-carousel-cell">
						<?php if ( has_post_thumbnail() ) {
							$newsImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
							}  
							?>
			
							<div class="news-img" style="background: url('<?php echo $newsImg[0]; ?>') no-repeat; background-size: cover;">
							<div class="news-title">
								<a href="<?php the_permalink()?>">
								<h2><?php the_title() ?></h2>
							</div>
							</a>
					</div> <!-- end speaker cell -->
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>


				</div> <!-- end of .carousel -->

		</section> <!-- end of speaker section --> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
