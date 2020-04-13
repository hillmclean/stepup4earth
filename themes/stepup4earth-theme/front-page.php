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

				<div class="event-info">

					<h1 class="site-title-heading">Step Up 4 Earth</h1>
					<h2 class="event-title"><?php the_field('name_of_event'); ?></h2>

					<div class="event-info-li"></div>

					<p class="location"><?php the_field('location_of_event'); ?></p>
					<p class="date-time"><?php the_field('day_of_event');?>, <?php the_field('time_of_event'); ?></p>

				</div> <!-- event-info -->

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

		<section class="mission-statement">

			<div class="mission-text">
				<h2>Our Mission</h2>
				<h4>We are positive-minded, result-driven, and community-caring.</h4>
			
				<div class="event-description"><?php the_field('event_description'); ?></div>
			</div>
		</section>

		<section class="event-features">

			<?php
				if ( ! is_active_sidebar( 'event-features' ) ) {
				return; }
			?>

			<div class="event-feature-widget">
				<div id="secondary" class="widget-area" role="complementary">

				<div class="three-col-img-grid">
						<div class="lions-gate-img"></div>
						<div class="false-creek-img"></div>
						<div class="light-green-bkgrd-ef"></div>
				</div> <!-- 3-col-img-grid -->

		
					<?php dynamic_sidebar( 'event-features' ); ?>
	

				<div class="three-col-img-grid-drone">
					<div class="features-li"></div>
					<div class="drone-img-1"></div>
					<div class="drone-img-2"></div>
					<div class="drone-img-3"></div>
					<div class="light-green-bkgrd-ef-btm"></div>
				</div> <!-- 3-col-img-grid -->
				</div><!-- widget-area -->
	
			</div> <!--event-feature-widget -->
		</section> <!-- end of event features -->

		<section class="priorities">
		<div class="priority-header">
			<h2>Our Priorities</h2>
			<h4>Create an impact you can be proud of.</h4>
			<p>We work to meet this goal by focusing on these important areas of conservation.</p>
		</div>
				
				<div class="priority-icons">
						<div class="priority-energy">
							<img class="energy-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/Energy.png" alt="energy icon" />
							<h5>Energy Efficiencies</h5>
						</div>

						<div class="priority-transport">
							<img class="transport-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/Transport.png" alt="energy icon" />
							<h5>Transport</h5>
						</div>

						<div class="priority-7rs">
							<img class="rs-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/7Rs.png" alt="energy icon" />
							<h5>7 Rs</h5>
						</div>
				</div>

				<div class="priority-buttons">
						<div class="volunteer-button">
							<a class="volunteer-button-text" href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>">
								<p>Volunteer</p>
							</a>
						</div>

						<div class="donate-button">
							<a class="donate-button-text" href="<?php echo esc_url( home_url( '/donate' ) ); ?>">
								<p>Donate</p>
							</a>
						</div>
				</div>
						
		</section>		
 
			<div class="hero-img-bkgd"></div>

			<?php 
			$posts = get_field('sponsors_relationship');

			if ($posts): ?>

		<section class="speaker-section">

			<div class="sponsor-title">
				<h3>Our Partners</h3>
				<h4><?php the_field('sponsor_section_title'); ?></h4>	
			</div>

			<div class="carousel-pagination">
		
				<div class="carousel-pagination-buttons">
					<div class="carousel-pagination-prev">
						<i class="fas fa-arrow-left"></i>
					</div>
					<div class="carousel-pagination-next">
						<i class="fas fa-arrow-right"></i>
					</div>
				</div>

			</div>

			<div class="carousel">

			<?php foreach($posts as $post): setup_postdata($post); ?>

				<div class="speakers-carousel-cell">
				<?php if( get_field('sponsor_logo') ): ?>	
					<div class="speaker-img" style="background: url(<?php  echo the_field('sponsor_logo'); ?>); background-size: cover; background-position: center;"> 
					</div>
					<p class="sponsor-name"><?php the_field('sponsor_name');?></p>
					<p><?php  the_field('sponsor_specialty');?></p>
				<?php endif; ?>
				</div>
				<?php endforeach; ?>
	

				<?php wp_reset_postdata(); ?>
				<?php endif; ?>			
	
	
			</div> <!-- end of .carousel -->

		</section> <!-- end of speaker section --> 

		<div class="front-footer">

				<section class="brought-by">
				<?php if(get_field('host_logo_repeater')): ?>
					<h3><?php the_field('brought_to_you_by'); ?></h3>

						<?php while(has_sub_field('host_logo_repeater')): ?>

								<div class="host-logo-img" style="background: url(<?php  echo the_sub_field('host_logo'); ?>); background-size: cover; background-position: center;"></div> 

						<?php endwhile; ?>

						<?php endif; ?>

				</section> <!-- end of host section -->

				<section class="top-return">
					<p>Back to top</p>
					<div class="return-arrow-up">
					<a href="#top">
					<i class="fas fa-arrow-up"></i>
						</div>
					</a>
				</section>
		
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
