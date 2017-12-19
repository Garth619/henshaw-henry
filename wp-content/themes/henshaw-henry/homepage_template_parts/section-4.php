<section id="section_four_trigger" class="section_four">
	
	
	<?php if(get_field('section_four_pa')): ?>
			
			<div class="pa_wrapper">
		 
			<?php while(has_sub_field('section_four_pa')): ?>
			
			
				
			<div class="single_pa">
				
				<a href="<?php the_sub_field( 'pa_box_page_link' ); ?>">
			
				<span class="single_pa_title"><?php the_sub_field( 'pa_box_title_homepage' ); ?></span><!-- single_pa_title -->
			
				<div class="pa_dots_wrapper">
				
					<div class="pa_dot"></div><!-- pa_dot -->
					<div class="pa_dot"></div><!-- pa_dot -->
				
				</div><!-- pa_dots_wrapper -->
				
				<span class="pa_view_more">View More</span><!-- view_more -->
			
			<div class="blue_image"></div><!-- blue_image -->
			
			<div class="orange_image"></div><!-- blue_image -->
			
			
			</a>
			
			
		</div><!-- single_pa -->
		 
				
		    
			<?php endwhile; ?>
			
				</div><!-- pa_wrapper -->
		 
		<?php endif; ?>

	

	
	
	
</section><!-- section_four -->