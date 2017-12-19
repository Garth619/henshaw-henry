<section id="section_two">
	
	<div class="testi_wrapper">
		
		<div class="testi_inner_wrapper">
			
			<span class="large_header"><?php the_field( 'what_clients_say' ); ?></span><!-- large_header -->
			
			
			
			<div class="testi_slideshow">
			
			
			<?php if(get_field('testimonials')): ?>
			
				
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
					
					
					<div class="testi_slide">
				
						<div class="testi_content">
					
						<?php the_sub_field( 'testimonial_content' ); ?>

				
						<div class="testi_name_wrapper">
					
							<svg class="testi_graphic" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.88 5.83">
						
							<path class="testi_graphic-cls-1" d="M27.7.5S26,.5,23.4.4,17.3.3,13.9.2C12.2.2,10.4.2,8.8.1H4.4C3.1,0,2,0,1.3,0,.9,0,.6-.1.4.1A.78.78,0,0,0,.1.5a.85.85,0,0,0,0,.7,1.73,1.73,0,0,0,.3.4,2.22,2.22,0,0,0,.9.1c.8,0,1.8,0,3.1-.1s2.8,0,4.4-.1,3.3-.1,5.1-.1c3.5-.1,6.9-.2,9.5-.3S27.7,1,27.7,1s.2-.1.2-.3A.22.22,0,0,0,27.7.5Z" transform="translate(-0.03 0.03)"/>
							<path class="testi_graphic-cls-1" d="M27.7,4.5s-1.7,0-4.3-.1-6.1-.1-9.5-.2c-1.7,0-3.5,0-5.1-.1H1.3c-.4,0-.7-.1-.9,0a1.73,1.73,0,0,0-.3.4,1.1,1.1,0,0,0,0,.8,1.73,1.73,0,0,0,.3.4,2.22,2.22,0,0,0,.9.1c.8,0,1.8,0,3.1-.1s2.8,0,4.4-.1,3.3-.1,5.1-.1c3.5-.1,6.9-.2,9.5-.3S27.7,5,27.7,5s.2-.1.2-.3A.22.22,0,0,0,27.7,4.5Z" transform="translate(-0.03 0.03)"/>
					
						</svg>
					
						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
					
						</div><!-- testi_name_wrapper -->
			

					</div><!-- testi_content -->
					
				</div><!-- testi_slide -->
					
					
			    
				<?php endwhile; ?>
				
				
			 
			<?php endif; ?>
			

				
				
				
				<div class="test_back_next_wrapper">
			
						
			<svg class="back_icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
				
				
				
				<title>arrow-left</title><polyline class="back_icon_cls-1" points="28.41 55.16 0.71 27.75 28.41 0.35"/>
				
			</svg>
			
			
			
			
			<div class="counter_wrapper">
				
				<span class="count"></span>
				
			</div><!-- counter_wrapper -->
			
			<svg class="next_icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
				
				<defs>
				
			
				
				</defs>
				
				<title>arrow-right</title><polyline class="next_icon_cls-1" points="0.35 0.36 28.05 27.66 0.35 55.16"/>
				
			</svg>
			
			
			
			
		</div><!-- test_back_next_wrapper -->
				
			</div><!-- testi_slideshow -->
			
		</div><!-- testi_inner_wrapper -->
		
		
		
	</div><!-- testi_wrapper -->
	
	<div class="reviews_wrapper">
		
		
		<div class="video_wrapper wistia_embed wistia_async_<?php the_field( 'wistia_video_number_homepage' ); ?> popover=true popoverContent=html">
			
			
						<div class="homepage_video_inner">
							
							<svg class="homepage_video_play" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.2 120.2">
								
								<defs><style></style></defs>
								
								<title>circular-play-button</title>
								
								<circle class="homepage_video-cls-1" cx="60.1" cy="60.1" r="58.6"/>
								
								<circle class="homepage_video-cls-2" cx="60.1" cy="60.1" r="58.6"/>
								
								<polygon class="homepage_video-cls-3" points="48.8 44.3 63 52.5 77.3 60.8 63.1 69 48.8 77.3 48.8 60.8 48.8 44.3"/>
								
							</svg>
							
						</div><!-- homepage_video_inner -->
			
			
<!--
			<video>
				
				<source src="<?php bloginfo('template_url');?>/images/video.mp4"  type="video/mp4">
				<source src="<?php bloginfo('template_url');?>/images/video.ogg"  type="video/ogg">

			</video>
-->
			
			
			
			
		</div><!-- video_wrapper -->
		
		<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
		
		<div class="review_slideshow">
			
			<div class="single_review">
				
				<img class="review_stars" src="<?php bloginfo('template_directory');?>/images/stars-graphic.svg"/>
				
				<div class="review_middle_row">
					
					<img class="review_social_media yelp" src="<?php bloginfo('template_directory');?>/images/social-rating-yelp.svg"/>
					
					<span class="review_bullet">&bull;</span><!-- review_bullet -->
					<span class="review_rating">5/5</span><!-- review_rating -->
					
					
				</div><!-- review_middle_row -->
				
				<div class="line"></div>
					
					<span class="review_title">Yelp Rating</span><!-- review_title -->
				
				<img class="vertical_lines" src="<?php bloginfo('template_directory');?>/images/vertical-dashes-graphic.png"/>
				
			</div><!-- single_review -->
			
			<div class="single_review">
				
				<img class="review_stars" src="<?php bloginfo('template_directory');?>/images/stars-graphic.svg"/>
				
				<div class="review_middle_row">
					
					<img class="review_social_media avvo" src="<?php bloginfo('template_directory');?>/images/social-rating-avvo.svg"/>
					<span class="review_bullet">&bull;</span><!-- review_bullet -->
					<span class="review_rating">5/5</span><!-- review_rating -->
					
					
				</div><!-- review_middle_row -->
				
				<div class="line"></div>
					
					<span class="review_title">Avvo Rating</span><!-- review_title -->
				
				<img class="vertical_lines" src="<?php bloginfo('template_directory');?>/images/vertical-dashes-graphic.png"/>
				
			</div><!-- single_review -->
			
			<div class="single_review">
				
				<img class="review_stars" src="<?php bloginfo('template_directory');?>/images/stars-graphic.svg"/>
				
				<div class="review_middle_row">
					
					<img class="review_social_media facebook" src="<?php bloginfo('template_directory');?>/images/social-rating-facebook.svg"/>
					<span class="review_bullet">&bull;</span><!-- review_bullet -->
					<span class="review_rating">5/5</span><!-- review_rating -->
					
					
				</div><!-- review_middle_row -->
				
				<div class="line"></div>
					
					<span class="review_title">Facebook Rating</span><!-- review_title -->
				
				<img class="vertical_lines" src="<?php bloginfo('template_directory');?>/images/vertical-dashes-graphic.png"/>
				
			</div><!-- single_review -->
			
			
			
		</div><!-- review_slideshow -->
		
		
	</div><!-- reviews_wrapper -->
	
	
</section><!-- section_two -->