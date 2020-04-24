<?php
/**
 * The template for displaying projects archive pages.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>
	<div class="background-green-box"></div>
	<div class="background-grey-box"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <?php if (!wp_is_mobile()): ?>
		    <header class="page-header entry-content">		    
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
		    </header><!-- .page-header -->
		    <?php endif; ?>
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<!-- Start the variables for carousel ids and counter -->
			<?php 
			    $carousel_links = array(); 
			    $counter = 0;
			?>
			<div class="carousel">
			<?php
			    $args = array( 
				'post_type'       => 'community_programs', 
				'posts_per_page'  => -1,
				'orderby'         => 'date',
				'order'           => 'ASC',
			    );
			    $community_post = get_posts( $args ); // returns an array of posts
			
			?>
			<?php foreach ( $community_post as $post ) : setup_postdata( $post ); ?>
			<!-- Execute the counter -->
			<?php $hold_post = $post ;?>
			<?php 
			    $counter = $counter + 1;
			?>
			<!-- Start the carousel cell -->
			<div class="carousel-cell" id="<?php echo 'carousel-cell' . $counter; ?>">
			    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				    $args = array( 
					'post_type'       => 'page', 
					'posts_per_page'  => 1,
					'name'           => 'community',
				    );
				    $community_page = get_posts( $args ); // returns an array of posts
				
				?>
				<h2><?php echo $community_page[0]->post_title; ?></h2>
				<?php echo $community_page[0]->post_content; ?>
				<div class="community-first-image" style="background-image: url(<?php echo get_field("first_image") ?>)">
				</div>
				<header class="entry-header">
				    <?php if( wp_is_mobile() ) : ?>
				    <h2 class="entry-title">
					<?php echo get_field("company_name");?>
				    </h2>
				    <?php else : ?>
				    <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
				    <?php endif; ?>
				</header><!-- .entry-header -->
				<div class="community-secondary-image" style="background-image: url(<?php echo get_field("second_image") ?>)">
				</div>
				<div class="community-third-image" style="background-image: url(<?php echo get_field("third_image") ?>)">
				</div>
				<!-- If is not mobile, hide pagination -->
				<?php if( wp_is_mobile() ) : ?>
				<div class="carousel-pagination">
				    <div class="carousel-pagination-buttons">
					<div class="carousel-pagination-prev">
					    <i class="fas fa-arrow-left"></i>
					</div>
					<div class="community-project-logo" style="background-image: url(<?php echo get_field("community_project_logo") ?>)"></div>
					<div class="carousel-pagination-next">
					    <i class="fas fa-arrow-right"></i>
					</div>
				    </div>
				    <div class="carousel-pagination-numbers"></div>
				</div>
				<?php endif; ?>
				<div class="entry-content">
				    <?php the_content(); ?>
				    <a class="learn-more-button" href="<?php echo get_field("link"); ?>">Go To Site</a>
				</div><!-- .entry-content -->
				<div class="green-line"></div>
			    </article><!-- #post-## -->
			</div>
			<?php array_push($carousel_links, '#carousel-cell'.$counter); ?>
			<!-- End ForEach -->
			<?php endforeach ; ?>
			</div>
			<!-- Create the links for the carousel -->
			<div class="carousel-generator">
			<?php 
			    foreach($carousel_links as $carousel_id) :
			?>
			    <a href="<?php echo $carousel_id; ?>"><?php echo substr($carousel_id, -1); ?></a>
			<?php endforeach; ?>
			<!-- Run script to add the navigation for specific DIVs -->
			<script type="text/javascript">
				const carouselLinks = document.querySelector(".carousel-generator").innerHTML;
				const carouselDiv = document.querySelectorAll(".carousel-pagination-numbers");
				carouselDiv.forEach( div => {
				   div.innerHTML = carouselLinks; 
				});
			</script>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
