<?php
/**
 * The Template Name: projects
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="projects-main" role="main">
		<?php
			$args = array( 
			'post_type'       => 'page', 
			'posts_per_page'  => 1,
			'name'           => 'projects',
			);
			$projects_page = get_posts( $args );?>
		
		<div class="title-flex">
			<div class="projects-title-container">
				<h2><?php echo  $projects_page[0]->post_title; ?>
				<div class="project-title-box"></div>
				</h2>
				<?php echo  $projects_page[0]->post_content; ?>
			</div>
		</div>

		
		<?php /* Start the Loop */ ?>
			
			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			    $args = array( 
				'post_type'       => 'projects', 
				'posts_per_page'  => 3,
				'orderby'         => 'date',
				'order'           => 'ASC',
				'paged' => $paged
			    );
				$products_post = new WP_Query($args);?>

				<?php if (  $products_post->have_posts() ) : ?>
					 <?php while (  $products_post->have_posts() ) :  $products_post->the_post(); ?>
					
					 <article id="post-<?php the_ID(); ?>" <?php post_class('projects-article'); ?>>

					 <div class="background-green-box"></div>
	<div class="background-grey-box"></div>

						<div class="projects-title-image" style="background: url('<?php the_field('image_1') ?>') no-repeat; background-size: cover; background-position: center;"></div>

						<div class="projects-secondary-image" style="background-image: url(<?php echo get_field("image_2") ?>)"></div>

						<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_excerpt(); ?>
							<a class="cta-button"" href="<?php the_permalink(); ?>">Read More</a>
						</div><!-- .entry-content -->
						<div class="light-green-box"></div>
						<div class="dark-green-box"></div>
						<div class="orange-green-box"></div>
						<div class="green-line"></div>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->
				<?php endwhile; ?>
				<?php endif;?>
				
				
				<nav class="pagination">
					<?php
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $products_post->max_num_pages,
						'prev_text' => '&laquo;',
						'next_text' => '&raquo;'
					) );
				?>
				</nav>
			<?php wp_reset_postdata(); ?>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
