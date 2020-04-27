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


		<header class="shop-header">
				<h1 class="shop-header-text">Shop Stuff</h1>

				<?php $terms = get_terms( array(
					'taxonomy'=>'product_taxonomy',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="product-type">
					<?php foreach($terms as $term) : ?>
						<p><a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?>
					</a>
					</p>

					<?php endforeach; ?>
					<?php endif; ?>
				</div>

			</header>


<!-- Product Grid -->

<?php
	$args = array( 
		'post_type' => 'shop',
		'posts_per_page' => 16,
		'order' => 'ASC'
	);
	$products = new WP_Query($args);
	?>

	<div class="product-grid">
		<?php if ( $products->have_posts() ) : ?>
	 	<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			 
		<div class="product-item">
			<?php if( get_field('image_link') ): ?>
				<a href="<?php the_field('link'); ?>">
					<div class="product-img-box" style="background: url('<?php echo the_field('image_link'); ?>') no-repeat; background-size: cover;" >
					</div> 
				</a>
				<?php else : ?>
				<a href="<?php the_field('link'); ?>">
					<div class="product-img-box" style="background: url('<?php echo the_field('image'); ?>') no-repeat; background-size: cover;" >	
					
					<?php endif; ?>	
				</div> 
				</a>

			<div class="product-info-box">
				<p class="product-title"><?php the_title(); ?></p>
				<!-- <p class="product-price">$ <?php the_field('price'); ?></p> -->
			</div> 
		</div> <!-- .product-item -->

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif;?>
	
	</div> <!-- .product-grid -->

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
