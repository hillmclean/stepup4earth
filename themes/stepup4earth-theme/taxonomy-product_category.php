<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="shop-tax-header">
			<h1><?php get_the_archive_title()?></h1>
			<div class="taxonomy-description"><?php the_archive_description() ?>
			</div>
			<div class="tax-header-box" ></div>

			<?php $terms = get_terms( array(
					'taxonomy'=>'product_category',
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
					<div class="tax-grid-box" ></div>
				</div>
			</header><!-- .page-header -->

			
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'shop', // the post type
				'posts_per_page' => 8,
				'orderby' => 'title',
				'order' => 'ASC',
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_category', //or tag or custom taxonomy
						'field' => 'slug', 
						'terms' => $product_category
					),
				),
			);
			$product_tax = new WP_Query($args); ?>
		
		<div class="product-grid">
		<?php if ( $product_tax->have_posts() ) : ?>
	 		<?php while ( $product_tax->have_posts() ) : $product_tax->the_post(); ?>
		 
			<div class="product-item">
				<?php if( get_field('image_link') ): ?>
					<a href="<?php the_field('link'); ?>" target="_blank">
						<div class="product-img-box" style="background: url('<?php echo the_field('image_link'); ?>') no-repeat; background-size: contain; background-position: center;" >
				<?php endif; ?>	
						</div> 
					</a>

				<div class="product-info-box">
					<p class="product-title"><?php the_title(); ?></p>
					<p class="product-retailer"><?php the_field('seller'); ?></p>				</div> 

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
				'total' => $product_tax->max_num_pages,
				'prev_text' => '&laquo;',
				'next_text' => '&raquo;'
			) );
			?>
		</nav>
	<?php wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>