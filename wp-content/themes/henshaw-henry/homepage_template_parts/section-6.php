<section id="section_six_trigger" class="section_six">
	
	<div class="section_six_img_wrapper">
		
		<div class="section_six_img_inner"></div><!-- section_six_img_inner -->
		
	</div><!-- section_six_img_wrapper -->
	
	<div class="section_six_selling_wrapper">
		
		<div class="selling_point_wrapper">
			
			<a class="sec_six_why_button" href="<?php the_field( 'why_choose_our_firm_page_link' ); ?>"><?php the_field( 'why_choose_our_firm_verbiage' ); ?></a><!-- sec_six_why_button -->
			
			<div class="selling_point_slideshow">
				
				
				
				<?php if(get_field('section_six_slider')): ?>
				 
					<?php while(has_sub_field('section_six_slider')): ?>
				 
						
						
						<div class="selling_point_slide">
					
							<?php the_sub_field( 'svg' ); ?>
					
							<span class="sp_slide_title"><?php the_sub_field( 'title' ); ?></span><!-- sp_slide_title -->
					
							<span class="sp_slide_content"><?php the_sub_field( 'content' ); ?></span><!-- sp_slide_content -->
					
						</div><!-- selling_point_slide -->
						
						
					
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
		
				
				<div class="sp_arrows_wrapper">
					
					<div class="sp_arrows_inner_wrapper">
					
					<div class="sp_prev sp_button">
						
						<svg id="sp_arrows_left" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
						
						<defs><style></style></defs>
						
						<polyline class="arrow_left-cls-1" points="28.41 55.16 0.71 27.75 28.41 0.35"/>
					
					</svg>
						
					</div><!-- sp_prev -->
					
					<div class="sp_counter">
						
						<span></span>
						
					</div><!-- sp_counter -->
					
					<div class="sp_next sp_button">
						
						<svg id="sp_arrows_right" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
							
							<polyline class="arrow_right_cls-1" points="0.35 0.36 28.05 27.66 0.35 55.16"/>
						
						</svg>
						
					</div><!-- sp_next -->
					
					</div><!-- sp_arrows_inner_wrapper -->
					
				</div><!-- sp_arrows_wrapper -->
				
			</div><!-- selling_point_slideshow -->
			
		</div><!-- selling_point_wrapper -->
		
	</div><!-- section_six_selling_wrapper -->
	
</section><!-- section_six -->