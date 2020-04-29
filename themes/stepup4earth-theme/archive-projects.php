<?php
/**
 * The Template Name: projects
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				$args = array( 
					'post_type' => 'post',
					'posts_per_page' => '1'
				);
				$projects = get_posts( $args ); 
					?>

			<header class="page-header-archive">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-projects' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

					

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
