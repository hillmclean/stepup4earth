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
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'name'           => 'projects',
			    );
			    $projects_page = get_posts( $args ); // returns an array of posts
			
			?>
			<div class='workshops-container'>
			<?php foreach ( $projects_page as $post ) : setup_postdata( $post ); ?>
			<header class="page-header-content">
			<div class="projects-page-content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				    </div>
			</header><!-- .page-header -->
			<?php endforeach; wp_reset_postdata(); ?>   

			<?php /* Start the Loop */ ?>
			
			<?php
			    $args = array( 
				'post_type'       => 'projects', 
				'posts_per_page'  => 3,
				'orderby'         => 'date',
				'order'           => 'ASC',
			    );
			    $products_post = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $products_post as $post ) : setup_postdata( $post ); ?>
			<?php include( locate_template( 'template-parts/content-projects.php', false) ); ?>
			<?php endforeach ; ?>
			<?php the_posts_navigation(); ?>

			
		<?php endif; ?>

					

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
