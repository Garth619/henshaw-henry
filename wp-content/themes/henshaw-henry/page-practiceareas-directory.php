<?php 
	
	/* Template Name: Practice Areas Directory */
	
	get_header(); ?>



<div class="internal_main">
	
	
	<div class="one_column content">
		
		
		
			
			
			<h1 class="center">Practice Areas</h1><!--- smaller_internal_header -->
			
			<div class="practice_areas_directory">
				
				
				
				<div class="pa_col">
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_directory_menu_col_one' ) ); ?>
					
				</div><!-- pa_col -->
				
				
				<div class="pa_col">
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_directory_menu_col_two' ) ); ?>
					
				</div><!-- pa_col -->
				
				
				
			</div><!-- practice_areas_directory -->
						
			
			
		
			
			

			
			
	
		
		
	</div><!-- one_column -->
	
	
</div><!-- internal_main -->



<?php // get_template_part( 'loop', 'index' );?>




<?php //use get_template_part( 'loop', 'page' ) if needed ?>

	



<?php get_footer(); ?>
