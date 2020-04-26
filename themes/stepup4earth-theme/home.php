<?php
/**
 *   The template for displaying resources posts.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-resources" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				$args = array( 
					'post_type' => 'post',
					'posts_per_page' => '-1'
				);
				$blog_posts = get_posts( $args ); 
					?>

			<section class="resource-section">

				<div class="resource-title-container">
					<h1 class="resources-title">Resources</h1>
					<h2 class="resources-tagline">Helping you help the earth</h2>
				</div>

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
			
			
				<?php foreach($blog_posts as $post): setup_postdata ($post); ?>

					<div class="resources-carousel-cell">
						<?php if ( has_post_thumbnail() ) {
							$newsImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full");
							}  
							?>
							<a href="<?php the_permalink()?>">
							<div class="news-img" style="background: url('<?php echo $newsImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
							<div class="news-title">
								<h2><?php the_title() ?></h2>
							</div>
							</a>
					</div> 
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>	
				</div> <!-- end of .carousel -->
				<?php endif; ?>

	

			</section> <!-- end of resource section --> 

					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					
					<fieldset>
						<label>
							<input id="search-display" type="search" class="search-field" placeholder="Type and hit enter ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
							<button class="search-submit">
								<i class="fa fa-search"></i>
							</button>
						</label>
					</fieldset>
				</form>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
