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

			<span class="about-box" ></span>
	    	<header class="entry-header">

				<section class="entry-header-mobile">

					<div class="top-image-m1" >
						<img class="left" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile1.png" alt="shore picture" />
						</div>
						
						<div class="title-content">
							<?php the_title(); ?>
						</div>

						<div class="top-image-2" >
							<img class="middle" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile2.png" alt="shore picture2" />
						</div>
						
						<div class="top-image-3" >
							<img class="right" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile3.png" alt="shore picture3" />
						</div>

					</section><!--.entry-header-mobile -->
						
					<section class="entry-header-desktop">
						
						<div class="top-image1" >
						</div>
						
						<div class="top-image2" >
						</div>
						
						<div class="our-mission-dkp"><?php the_content(); ?> </div>

						<div class="top-image3" >
						</div>

						<div class="top-image4" >
						</div>
						
					</section><!--.entry-header-desktop -->
					
				</header><!-- .entry-header -->

				<section class="page-content">
				
				  <div class="our-mission"><?php the_content(); ?></div>

					<div class="what-we-do">
					
					  <?php if( have_rows('what_section') ):?>

						 <?php while( have_rows('what_section') ): the_row(); ?>
								
							<div class="wwd-copy">
								<h5><?php the_sub_field('title'); ?></h5>
								<p><?php the_sub_field('description'); ?></p>
							</div>

							<?php endwhile; ?>
						<?php endif; ?>
						
					</div><!-- what-we-do -->

					<div class="how-we-do">
					
						<?php if( have_rows('how_section') ):?>

						<?php while( have_rows('how_section') ): the_row(); ?>
								
							<div class="hwd-copy">
								<h5><?php the_sub_field('title'); ?></h5>
								<p><?php the_sub_field('description'); ?></p>
							</div>

							<?php endwhile; ?>
						<?php endif; ?>
					  
					  </div><!-- how-we-do -->
					  
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
				
				  <div class="our-values">
					
		        	<div class="values-title">
			        <h2>Our Core Values </h2>
						</div>
						
						<section class="icons">	
							
							<div class="graph-icon">
								<span class="graph-box" ></span>
								<img class="graph" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/everyaction.png" alt="graph icon" />
								<h5>Every Action Matters</h5>
							</div>

							<div class="books-icon" >
							<span class="books-box" ></span>
								<img class="books" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/education.png" alt="books icon" />
								<h5>Education</h5>
							</div>

							<div class="unity-icon">
							<span class="unity-box" ></span>
								<img class="unity" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/community.png" alt="unity icon" />
								<h5>Community Caring</h5>
							</div>
						</section><!-- .icons -->
						
						<section class="buttons">
							<div class="volunteer-button-about">
								<a class="volunteer-button-text-about" href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>">
									<p>Volunteer</p>
								</a>
							</div>

							<span class="button-box" ></span>

							<div class="donate-button-about">
								<a class="donate-button-text-about" href="<?php echo esc_url( home_url( '/donate' ) ); ?>">
									<p>Donate</p>
								</a>
							</div>
						</section><!-- .buttons-end -->
				
          </div>
				</section>
				
				<section class="founders">
					<div class="mobile-desktop">
					
					  <?php if( have_rows('founder1') ):?>

						 <?php while( have_rows('founder1') ): the_row(); 

								// Get sub field values.
								$image1 = get_sub_field('image1');
								$name1 = get_sub_field('name1');
								$prosopography1 = get_sub_field('prosopography1');

								?>
								
								<div id="founder1" class="founder1-mobile">
									<span class="founder1-box1" ></span>
									<div class="image-name">
										<div class="image">
											<img src="<?php echo esc_url( $image1 ); ?>" alt="" />
										</div>
										<span class="founder1-box2" ></span>
										<h5><span class="founder1-nameline" ></span><?php the_sub_field('name1'); ?></h5>
									</div>

										<div class="content">
											<p><span class="founder1-box3" ></span><?php the_sub_field('prosopography1'); ?></p>
											

										</div>
								</div>

								<div id="founder1" class="founder1-desktop">
									  <div class="image-content">
										  <span class="founder1-box1" ></span>
										  <div class="image">
												<img src="<?php echo esc_url( $image1 ); ?>" alt="" />
											 </div>

											 <span class="founder1-box2" ></span>
											 <div class="content">
											  
												<h5><?php the_sub_field('name1'); ?>
												<div class="founder1-nameline" ></div></h5>
												<p><span class="founder1-box3" ></span><?php the_sub_field('prosopography1'); ?></p>
											 </div>
						        </div>
								</div>
								
					  	<?php endwhile; ?>
						<?php endif; ?>
						
					</div><!-- mobile-desktop -->

					<div class="mobile-desktop">

						<?php if( have_rows('founder2') ):?>

						 <?php while( have_rows('founder2') ): the_row(); 

								// Get sub field values.
								$image2 = get_sub_field('image2');
								$name2 = get_sub_field('name2');
								$prosopography2 = get_sub_field('prosopography2');

								?>
								
								<div id="founder2" class="founder2-mobile">
									<span class="founder2-box1" ></span>
									<div class="image-name">

										<h5><div class="founder2-nameline" ></div><?php the_sub_field('name2'); ?></h5>
										<div class="image">
											<img src="<?php echo esc_url( $image2 ); ?>" alt="" />
										</div>

									</div>

										<div class="content">
											<p><span class="founder2-box2" ></span><?php echo get_sub_field('prosopograghy2');?></p>
									 </div>

								</div>

								<div id="founder2" class="founder2-desktop">

									<div class="content-image">
									<span class="founder2-box3" ></span>

										<div class="content">
											<h5><?php the_sub_field('name2'); ?></h5>
											<p><?php echo get_sub_field('prosopograghy2');?></p>
											<span class="founder2-box4" ></span>
											<span class="founder2-box2" ></span>
										</div>
										
										<div class="image">
										 <span class="founder2-box1" ></span>
										 <div class="founder2-nameline" ></div>
										 <img src="<?php echo esc_url( $image2 ); ?>" alt="" />
									  </div>
										
									</div>

							  </div>
					  	<?php endwhile; ?>
							
						<?php endif; ?>

					</div><!-- mobile-desktop -->

					<div class="mobile-desktop">

						<?php if( have_rows('founder3') ):?>

						 <?php while( have_rows('founder3') ): the_row(); 

								// Get sub field values.
								$image3 = get_sub_field('image3');
								$name3 = get_sub_field('name3');
								$prosopography3 = get_sub_field('prosopography3');

								?>
								
								<div id="founder3" class="founder3-mobile">
								<span class="founder3-box1" ></span>
										<div class="image-name">
										  <div class="image">
												<img src="<?php echo esc_url( $image3 ); ?>" alt="" />
											</div>
											<span class="founder3-box2" ></span>
											<h5><span class="founder3-nameline" ></span><?php the_sub_field('name3'); ?></h5>
										</div>

										<div class="content">
											
												<p><span class="founder3-box3" ></span><?php the_sub_field('prosopography3'); ?></p>
										</div>
								</div>

								<div id="founder3" class="founder3-desktop">
								  <span class="founder3-box1" ></span>
									<div class="image-content">
										  <div class="image">
												<img src="<?php echo esc_url( $image3 ); ?>" alt="" />
											</div>

											
											<div class="content">
												<span class="founder3-box2" ></span>
												<h5><?php the_sub_field('name3'); ?><span class="founder3-nameline" ></span></h5>
												<p><span class="founder3-box3" ></span><?php the_sub_field('prosopography3'); ?></p>
										 </div>
									</div>
								</div>
								
					  	<?php endwhile; ?>
							
						<?php endif; ?>

					</div><!-- mobile-desktop -->

					<div class="about-cta">
						<?php if( have_rows('call_to_action') ):?>

							<?php while( have_rows('call_to_action') ): the_row(); ?>
								
							<div class="action-copy">
								<h5><?php the_sub_field('title'); ?></h5>
								<h6><?php the_sub_field('tagline'); ?></h6>
								<p><?php the_sub_field('description'); ?></p>
								<a href="<?php echo esc_url('cta_link' ); ?>"><?php the_sub_field('button_text'); ?></a>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>

				</section>
				
				
				
				<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->
	<?php get_footer(); ?>


