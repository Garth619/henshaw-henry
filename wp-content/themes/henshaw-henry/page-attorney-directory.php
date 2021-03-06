<?php 
	
	/* Template Name: Attorney Overview */
	
	get_header(); ?>



<div class="internal_main">
	
	
	<div class="one_column content">
		
		<h1 class="center">Attorney Overview</h1><!--- smaller_internal_header -->		
				
								
				<div class="attorney_overview">
					
					
					
					
					<?php if(get_field('attorney_directory')): ?>
					 
						<?php while(has_sub_field('attorney_directory')): ?>
					 
					
					
									<?php
					
											$post_object = get_sub_field('attorney_link');
					
											if( $post_object ): 
					
											// override $post
											$post = $post_object;
											setup_postdata( $post ); 
					
										?>
				
										
					<div class="single_attorney">
						
						<a class="overlay" href="<?php the_permalink();?>">
							
							<?php $attorney_profile_pic = get_field( 'attorney_profile_pic' ); ?>

								<?php if ( $attorney_profile_pic ) : ?>
	
									<img class="att_image" src="<?php echo $attorney_profile_pic['url']; ?>" alt="<?php echo $attorney_profile_pic['alt']; ?>" />
									
								<?php else:?>
								
									<img class="att_image" src="<?php bloginfo('template_directory');?>/images/placeholder-new.jpg"/>
									
								<?php endif; ?>
							
						</a>
							
							<div class="atto_title_wrapper">
								
								<a href="<?php the_permalink();?>">
								
									<span class="att_overview_title"><?php the_title();?></span><!-- att_overview_title -->
							
									<span class="att_overview_position"><?php the_field( 'position_title' ); ?></span><!-- att_overview_position -->
									
								</a>
								
							</div><!-- atto_title_wrapper -->
							
							<div class="att_social_media">
								
								<?php if(get_sub_field( 'attorney_linkedin' )):?>
								
								<a class="" href="<?php the_sub_field( 'attorney_linkedin' ); ?>" target="_blank">
									
									<svg class="att_linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.6 14"><title>att-overview-social-linked</title><path class="" d="M3,1.5A1.54,1.54,0,0,1,1.5,3,1.47,1.47,0,0,1,0,1.5,1.54,1.54,0,0,1,1.5,0,1.54,1.54,0,0,1,3,1.5Zm.1,2.8H0V14H3.1Zm4.8,0h-3V14h3V8.9c0-2.9,3.7-3.1,3.7,0V14h3V7.9c0-4.8-5.4-4.6-6.7-2.3Z"/></svg>
									
								</a>
								
								<?php endif;?>
								
								<?php if(get_sub_field( 'attorney_facebook' )):?>
								
								<a class="" href="<?php the_sub_field( 'attorney_facebook' ); ?>" target="_blank">
									
									<svg class="att_facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.5 16"><defs><style></style></defs><title>att-overview-social-facebook</title>
									
									<path id="Facebook" class="att_facebook-cls-1" d="M1.6,3.1V5.3H0V8H1.6v8H5V8H7.2s.2-1.3.3-2.6H5V3.6A.75.75,0,0,1,5.7,3H7.5V.1C6.6,0,5.4,0,5,0,1.5,0,1.6,2.7,1.6,3.1Z"/></svg>
									
								</a>
								
								<?php endif;?>
								
								<?php if(get_sub_field( 'google_plus' )):?>
								
								<a class="" href="<?php the_sub_field( 'google_plus' ); ?>" target="_blank">
									
									<svg class="att_google" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 12.6">
										
										<defs><style>s</style></defs><title>att-overview-social-g</title>
										
										<path class="att_google-cls-1" d="M6.3,5.4V7.5H9.8a3.36,3.36,0,0,1-3.5,2.7A4,4,0,0,1,2.4,6.3,3.84,3.84,0,0,1,6.3,2.4a3.42,3.42,0,0,1,2.5,1l1.7-1.6A5.6,5.6,0,0,0,6.3,0a6.3,6.3,0,0,0,0,12.6,5.75,5.75,0,0,0,6-6.1,3.08,3.08,0,0,0-.1-1C12.2,5.4,6.3,5.4,6.3,5.4Zm0,0L21.5,7.2H18.8V9.9H17V7.1H14.3V5.4H17V2.7h1.8V5.4h2.7V7.2Z"/></svg>
									
								</a>
								
								<?php endif;?>
								
							</div><!-- att_social_media -->
							
						
						
					</div><!-- single_attorney -->
										
										
										
										
										
										
												
						
									
					    
												
									<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
					
										
						
					    
					
						
						
						
						
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
					
										

					
				</div><!-- attorney_overvew -->
				
		
		
	</div><!-- one_column -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
