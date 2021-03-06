<?php
/**
 * The template for displaying all pages.
 *
 * @package StepUp4Earth_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

	    	<header class="entry-header-about">
				<div class="about-box" ></div>
												
				<div class="top-image1" ></div>
				
				<div class="top-image2" ></div>
				 
				<div class="about-title-box">
					<div class="our-mission-dkp"><?php the_content(); ?></div>
					<h1 class="our-mission-header-mobile"><?php the_title(); ?></h1>
				</div>

				<div class="top-image3" ></div>

				<div class="top-image4" ></div>								
			</header><!-- .entry-header -->

			<section class="our-mission-mobile">
				<div class="our-mission"><?php the_content(); ?></div>
			</section> <!-- .our-mission-mobile -->

			<section class="whatwedo-container">
				<div class="whatwedo-copy">		
					<?php if( have_rows('what_section') ):?>
						<?php while( have_rows('what_section') ): the_row(); ?>
							
							<h5><?php the_sub_field('title'); ?></h5>
							<p><?php the_sub_field('description'); ?></p>

						<?php endwhile; ?>
					<?php endif; ?>	
				</div><!-- what-we-do -->
				<div class="whatwedo-box"></div>
			</section> <!--whatwedo-container -->
			
			<section class="howwedo-container">	
				<div class="howwedo-copy">
					<?php if( have_rows('how_section') ):?>
						<?php while( have_rows('how_section') ): the_row(); ?>
								
								<h5><?php the_sub_field('title'); ?></h5>
								<p><?php the_sub_field('description'); ?></p>

						<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- howwedo-copy -->
				<div class="howwedo-box"></div>
			</section> <!-- howwedo-container -->
			
			<?php if( have_rows('impact_section') ):?>
				<?php while( have_rows('impact_section') ): the_row(); ?>

					<?php if( get_sub_field('description') ): ?>
						<section class=impact-container>
							<div class="impact-section">	
								<div class="impact-copy">
									<h5 class="impact-title">
								Our Impact
										<div class="impact-box-1"></div>
										<div class="impact-box-2"></div>
									</h5>
									<p><?php the_sub_field('description'); ?></p>
								</div>
							</div>
						</section> <!-- impact-container -->
					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>

			
			<section class="our-values">
		        <div class="values-title">
			        <h2>Our Core Values </h2>
				</div>
						
				<div class="icons">	
					<div class="graph-icon">
						<div class="graph-box" ></div>
						<div class="graph"></div>
						<h5>Every Action Matters</h5>
					</div>

					<div class="books-icon" >
						<div class="books-box" ></div>
							<div class="books"></div>
							<h5>Education</h5>
					</div>

					<div class="unity-icon">
						<div class="unity-box" ></div>
							<div class="unity"></div>
							<h5>Community Caring</h5>
						</div>
				</div><!-- .icons -->
						
				<div class="buttons">
					<div class="volunteer-button-about">
						<a class="volunteer-button-text-about" href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>">
						<p>Volunteer</p>
						</a>
					</div>

					<div class="donate-button-about">
						<a class="donate-button-text-about" href="<?php echo esc_url( home_url( '/donate' ) ); ?>">
						<p>Donate</p>
						</a>
					</div>
				</div><!-- .buttons-end -->
				
			</section> <!-- our-values -->
				
			<section class="founders">

			<?php if(get_field('founders_section_title')): ?>
				<div class="founder-description">
					<h2 class="section-title"><?php the_field('founders_section_title'); ?></h2>
					<p><?php the_field('founders_description'); ?></p>
				</div>
			<?php endif; ?>

				<?php if( have_rows('founder1') ):?>
					<?php while( have_rows('founder1') ): the_row(); ?>
								
						<div id="founder1" class="founder1">
							<div class="image-name">
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image1'); ?>); background-size: cover; background-position: center;"> 
									<div class="founder1-box1" ></div>
									<div class="founder1-box2" ></div>
									<div class="founder1-box3" ></div>
									<h5 class="founder-name"><div class="founder1-nameline" ></div><?php the_sub_field('name1'); ?></h5>
								</div>
							</div> <!-- image-name -->

							<div class="content">
								<p><?php the_sub_field('prosopography1'); ?></p>
							</div>
						</div> <!-- founder1 --> 
							
					<?php endwhile; ?>
				<?php endif; ?>
						
				<?php if( have_rows('founder2') ):?>
					<?php while( have_rows('founder2') ): the_row(); ?>
								
						<div id="founder2" class="founder2">
							<div class="image-name">
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image2'); ?>); background-size: cover; background-position: center;">
									<div class="founder2-box1" ></div>
									<div class="founder2-box2" ></div>
									<div class="founder2-box3" ></div>
									<h5 class="founder-name"><div class="founder2-nameline" ></div><?php the_sub_field('name2'); ?></h5>
								</div>
							</div> <!--image-name -->

							<div class="content">
								<p><?php echo get_sub_field('prosopograghy2');?></p>
							</div>
						</div> <!-- founder2 -->

					<?php endwhile; ?>
				<?php endif; ?>

				<?php if( have_rows('founder3') ):?>
					<?php while( have_rows('founder3') ): the_row(); ?>
								
						<div id="founder3" class="founder3">
							<div class="image-name">
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image3'); ?>); background-size: cover; background-position: center;">
									<div class="founder3-box1" ></div>
									<div class="founder3-box2" ></div>
									<div class="founder3-box3" ></div>
									<h5 class="founder-name"><div class="founder3-nameline" ></div><?php the_sub_field('name3'); ?></h5>
								</div>
							</div> <!-- image-name --> 

							<div class="content">	
								<p><?php the_sub_field('prosopography3'); ?></p></div>
							</div>
						</div> <!-- founder3 -->
								
					<?php endwhile; ?>
				<?php endif; ?>
			</section> <!-- founders -->

			<section class="about-cta">
				<?php if( have_rows('call_to_action') ):?>
					<?php while( have_rows('call_to_action') ): the_row(); ?>
						<div class="action-container">
							<div class="action-image1"></div>
						
							<div class="action-copy">
								<h5><?php the_sub_field('title'); ?></h5>
								<h6><?php the_sub_field('tagline'); ?></h6>
								<p><?php the_sub_field('description'); ?></p>
								<div class="action-box1" ></div>
								<div class="action-box2" ></div>
								<div class="action-box3" ></div>


								<div class="act-cta-button">
									<a  href="<?php the_sub_field('cta_link' ); ?>"><p><?php the_sub_field('button_text'); ?></p></a>
								</div>
							</div>
						</div> <!-- action-container -->

					<?php endwhile; ?>
				<?php endif; ?>
			</section> <!-- about-cta -->


			<?php if(get_field('partner_section_')): ?>
				<?php while(has_sub_field('partner_section_')): ?>
					<section class="su4e-partner-section">
						<h5 class="partner-title"><?php the_sub_field('title_for_parter_section'); ?></h5>

				<div class="partners-container">
				<?php if( have_rows('partner_logos') ):?>
					<?php while( have_rows('partner_logos') ): the_row(); ?>
					<?php if( get_sub_field('image') ): ?>
							<div class="logo-image" style="background: url(<?php  echo the_sub_field('image'); ?>); background-size: cover; background-position: center;"></div> 
					<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
					</section>

				<?php endwhile; ?>
			<?php endif; ?>



				<section class="top-return">
					<p>Back to top</p>
					<div class="return-arrow-up">
					<a href="#top">
					<i class="fas fa-arrow-up"></i>
						</div>
					</a>
				</section>
				
				
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  	</div><!-- #primary -->
<?php get_footer(); ?>


