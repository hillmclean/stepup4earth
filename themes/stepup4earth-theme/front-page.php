<?php
/**
 * The template for displaying the front page
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header name="top" class="front-page-header">
			<div class="front-banner-grid">
				
				<div class="sqr-light-green">
				</div>

				<div class="sqr-dr-green">
				</div>

				<div class="sqr-orange">
				</div>

				<div class="front-banner-img"></div>

				<div class="site-info">
					<h1 class="site-title-heading"><?php the_field('site_name'); ?></h1>
					<div class="tagline-box">
						<p class="site-info-tagline"><?php the_field('site_tagline'); ?></p>
						<div class="site-info-li"></div>
					</div>

				</div> <!-- site-info -->

				<div class="hero-img-2"></div>

				<div class="hero-img-3"></div>

				<div class="sqr-dr-green-hidden">
				</div>

				<div class="light-green-bkgrd"></div>

				<div class="banner-widgets">
					<?php dynamic_sidebar('Banner'); ?>
				</div><!-- .widget-area -->
				
			</div> <!-- front-banner-grid -->
		</header>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
