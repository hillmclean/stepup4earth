<?php
/**
 * The template for displaying the child theme of ecofair for  workshop archive pages.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

	<div class="background-green-box"></div>
	<div class="background-grey-box"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php
			    $args = array( 
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'name'           => 'workshop',
			    );
			    $workshop_page = get_posts( $args ); // returns an array of posts
			
			?>
			<div class='workshops-container'>
				<?php foreach ( $workshop_page as $post ) : setup_postdata( $post ); ?>
				<header class="page-header entry-content">		    
				    <?php if (!wp_is_mobile()): ?>
				    <div class="workshop-page-content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				    </div>
				    <?php endif; ?>
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
				<?php endforeach; wp_reset_postdata(); ?>     
			</div>

			<?php /* Start the Loop */ ?>

			<!-- Start the variables for carousel ids and counter -->
			<?php 
			    $workshop_carousel_links = array(); 
			    $counter = 0;
			?>
			<div class="carousel">
			<?php
			    $args = array( 
				'post_type'       => 'workshop', 
				'posts_per_page'  => -1,
				'orderby'         => 'date',
				'order'           => 'ASC',
			    );
			    $workshops_post = get_posts( $args ); // returns an array of posts
			
			?>
			<?php foreach ( $workshops_post as $post ) : setup_postdata( $post ); ?>
			<!-- Execute the counter -->
			<?php 
			    $counter = $counter + 1;
			?>
			<!-- Start the carousel cell -->

			    <?php if( get_field("owner")):?>
				<?php include( locate_template( 'template-parts/content-workshopwithowner.php', false) ); ?>
			    <?php else : ?>
				<?php include( locate_template( 'template-parts/content-workshopnoowner.php', false) ); ?>
			    <?php endif; ?>
			<!-- End ForEach -->
			<?php endforeach ; ?>
			</div>
			<!-- Create the links for the carousel -->
			<div class="carousel-generator">
			<?php 
			    foreach($workshop_carousel_links as $carousel_id) :
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
