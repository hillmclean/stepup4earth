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

	    	<header class="entry-header">
				<div class="about-box" ></div>
												
				<div class="top-image1" ></div>
				
				<div class="top-image2" ></div>
				
				<div class="about-title-box">
					<div class="our-mission-dkp"><?php the_content(); ?> </div>
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
			
			<section class=impact-container>
				<div class="impact-section">
					<?php if( have_rows('impact_section') ):?>
						<?php while( have_rows('impact_section') ): the_row(); ?>
								
							<div class="impact-copy">
								<h5><?php the_sub_field('section_title'); ?></h5>
								<p><?php the_sub_field('description'); ?></p>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section> <!-- impact-container -->
				
			<section class="our-values">
		        <div class="values-title">
			        <h2>Our Core Values </h2>
				</div>
						
				<div class="icons">	
					<div class="graph-icon">
						<div class="graph-box" ></div>
						<img class="graph" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/everyaction.png" alt="graph icon" >
						<h5>Every Action Matters</h5>
					</div>

					<div class="books-icon" >
						<div class="books-box" ></div>
							<img class="books" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/education.png" alt="books icon" >
							<h5>Education</h5>
					</div>

					<div class="unity-icon">
						<div class="unity-box" ></div>
							<img class="unity" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/community.png" alt="unity icon" />
							<h5>Community Caring</h5>
						</div>
				</div><!-- .icons -->
						
				<div class="buttons">
					<div class="volunteer-button-about">
						<a class="volunteer-button-text-about" href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>">
						<p>Volunteer</p>
						</a>
					</div>

					<div class="button-box" ></div>

					<div class="donate-button-about">
						<a class="donate-button-text-about" href="<?php echo esc_url( home_url( '/donate' ) ); ?>">
						<p>Donate</p>
						</a>
					</div>
				</div><!-- .buttons-end -->
				
			</section> <!-- our-values -->
				
			<section class="founders">
				<?php if( have_rows('founder1') ):?>
					<?php while( have_rows('founder1') ): the_row(); 
						// Get sub field values.
						$name1 = get_sub_field('name1');
						$prosopography1 = get_sub_field('prosopography1');
						?>
								
						<div id="founder1" class="founder1">
							<div class="founder1-box1" ></div>
							<div class="image-name">
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image1'); ?>); background-size: cover; background-position: center;"></div>

								<div class="founder1-box2" ></div>
								<h5><div class="founder1-nameline" ></div><?php the_sub_field('name1'); ?></h5>
							</div> <!-- image-name -->

							<div class="content">
								<p><div class="founder1-box3" ></div><?php the_sub_field('prosopography1'); ?></p>
							</div>
						</div> <!-- founder1 --> 
							
					<?php endwhile; ?>
				<?php endif; ?>
						
				<?php if( have_rows('founder2') ):?>
					<?php while( have_rows('founder2') ): the_row(); 
						// Get sub field values.
						$name2 = get_sub_field('name2');
						$prosopography2 = get_sub_field('prosopography2');
						?>
								
						<div id="founder2" class="founder2">
							<div class="founder2-box1" ></div>
							<div class="image-name">
								<h5><div class="founder2-nameline" ></div><?php the_sub_field('name2'); ?></h5>
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image2'); ?>); background-size: cover; background-position: center;"></div>
							</div> <!--image-name -->

							<div class="content">
								<p><span class="founder2-box2" ></span><?php echo get_sub_field('prosopograghy2');?></p>
							</div>
						</div> <!-- founder2 -->

					<?php endwhile; ?>
				<?php endif; ?>

				<?php if( have_rows('founder3') ):?>
					<?php while( have_rows('founder3') ): the_row(); 
						// Get sub field values.
						$name3 = get_sub_field('name3');
						$prosopography3 = get_sub_field('prosopography3');
						?>
								
						<div id="founder3" class="founder3">
							<div class="founder3-box1" ></div>
							<div class="image-name">
								<div class="founder-image" style="background: url(<?php echo the_sub_field('image3'); ?>); background-size: cover; background-position: center;"></div>
								<div class="founder3-box2" ></div>
								<h5><div class="founder3-nameline" ></div><?php the_sub_field('name3'); ?></h5>
							</div> <!-- image-name --> 

							<div class="content">	
								<p><div class="founder3-box3" ></div><?php the_sub_field('prosopography3'); ?></p></div>
							</div>
						</div> <!-- founder3 -->
								
					<?php endwhile; ?>
				<?php endif; ?>
			</section> <!-- founders -->

			<section class="about-cta">
				<?php if( have_rows('call_to_action') ):?>
					<?php while( have_rows('call_to_action') ): the_row(); ?>
					
						<div class="action-copy">
							<h5><?php the_sub_field('title'); ?></h5>
							<h6><?php the_sub_field('tagline'); ?></h6>
							<p><?php the_sub_field('description'); ?></p>
							<a href="<?php echo esc_url('cta_link' ); ?>"><?php the_sub_field('button_text'); ?></a>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</section> <!-- about-cta -->
				
				
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  	</div><!-- #primary -->
<?php get_footer(); ?>


