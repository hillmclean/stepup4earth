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
				<a href="<?php the_field('link'); ?>">
					<div class="product-img-box" style="background: url('<?php echo the_field('image_link'); ?>') no-repeat; background-size: contain; background-position: center;" >
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

		<nav class="pagination">
     <?php
     $big = 999999999;
     echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $products->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
     ) );
?>
</nav>
<?php wp_reset_postdata(); ?>

	
	</div> <!-- .product-grid -->

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
