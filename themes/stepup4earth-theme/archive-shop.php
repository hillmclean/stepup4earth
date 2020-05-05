<?php
/**
 * The Template Name: Shop
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>
	<div class="background-green-box"></div>
	<div class="background-grey-box"></div>
	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		<?php
			    $args = array( 
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'name'           => 'shop',
			    );
			    $shop_page = get_posts( $args ); // returns an array of posts
			
			?>

		<header class="shop-header">												
			<div class="top-image1" ></div>
				
			<div class="top-image2" ></div>
				
				<?php foreach ( $shop_page as $post ) : setup_postdata( $post ); ?>
						<div class="shop-title-box">
							<h1 class="shop-title-mobile"><?php the_title(); ?></h1>
							<div class="shop-title-dkp"><?php the_content(); ?></div>
						</div> 

			<div class="top-image3" ></div>

			<div class="top-image4" ></div>	

			<div class="shop-header-box" ></div>

		</header>

		<section class="shop-des-mobile">
				<div class="shop-des"><?php the_content(); ?></div>
				<div class="shop-field"><?php the_field('page_description'); ?></div>
		</section> <!-- .our-mission-mobile -->

		<?php endforeach; wp_reset_postdata(); ?>  

			<?php $terms = get_terms( array(
					'taxonomy'=>'product_category',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<h2 class="product-type-title">Categories</h2>
				<div class="product-type">
					<?php foreach($terms as $term) : ?>
						<p>
						<a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?></a>
						</p>

					<?php endforeach; ?>
					<?php endif; ?>
					<div class="shop-grid-box" ></div>
				</div>


<!-- Product Grid -->

<?php


$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array( 
		'post_type' => 'shop',
		'posts_per_page' => 12,
		'orderby' => 'title',
		'order' => 'ASC',
		'paged' => $paged

	); 
	$products = new WP_Query($args);
	?>

	<div class="product-grid">
		<?php if ( $products->have_posts() ) : ?>
	 	<?php while ( $products->have_posts() ) : $products->the_post(); ?>
		
			<div class="product-item">
			<?php if( get_field('image_link') ): ?>
				<a href="<?php the_field('link'); ?>" target="_blank">
					<div class="product-img-box" style="background: url('<?php echo the_field('image_link'); ?>') no-repeat; background-size: cover; background-position: center;" >
					<?php endif; ?>	
					</div> 
				</a>

				<div class="product-info-box">
					<p class="product-title"><?php the_title(); ?></p>
					<p class="product-retailer"><?php the_field('seller'); ?></p>
				</div> 
		</div> <!-- .product-item -->
	
		<?php endwhile; ?>
		<?php endif;?>
	
	</div> <!-- .product-grid -->

	<nav class="pagination">
				<?php
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $products->max_num_pages,
					'prev_text' => '',
					'next_text' => ''
				) );
				?>
			</nav>
<?php wp_reset_postdata(); ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>