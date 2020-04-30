<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="shop-header">
			<h1><?php get_the_archive_title()?></h1>
			<div class="taxonomy-description"><?php the_archive_description() ?>
			</div>
			</header><!-- .page-header -->

			
			<?php


$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array( 
		'post_type' => 'shop',
		'orderby' => 'title',
		'order' => 'ASC',
		'paged' => $paged

	); 
	$product_category = new WP_Query($args);
	?>
		
<div class="product-grid">
<?php if ( $product_category->have_posts() ) : ?>
	 	<?php while ( $product_category->have_posts() ) : $product_category->the_post(); ?>
		 
		<div class="product-item">
			<?php if( get_field('image_link') ): ?>
				<a href="<?php the_permalink()?>" <?php the_title(); ?>>
					<div class="product-img-box" style="background: url('<?php echo the_field('image_link'); ?>') no-repeat; background-size: cover;" >
			<?php endif; ?>	
					</div> 
				</a>

			<div class="product-info-box">
				<p class="product-title"><?php the_title(); ?></p>
				<p class="product-price">$ <?php the_field('price'); ?></p>
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
          'total' => $product_category->max_num_pages,
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