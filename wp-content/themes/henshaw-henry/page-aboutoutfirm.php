<?php 
	
	/* Template Name: About Our Firm */
	
	get_header(); ?>



<div class="internal_main">
	
	
	<div class="about_wrapper">
		
		
		<div class="about_content">
			
			<div class="about_content_inner content">
				
				<h1><?php the_title();?></h1>
				
				
				<?php get_template_part( 'loop', 'page' )  ?>
				
				
			</div><!-- about_content_inner -->
			
		</div><!-- about_content -->
		
		<div class="about_sidebar">
			
			<div class="about_sidebar_inner">
			
			
				<?php $why_us_sidebar_image = get_field( 'why_us_sidebar_image' ); ?>

				<?php if ( $why_us_sidebar_image ) { ?>
	
					<img src="<?php echo $why_us_sidebar_image['url']; ?>" alt="<?php echo $why_us_sidebar_image['alt']; ?>" />
				
				<?php } ?>
			
				<div class="about_page_why_us_wrapper">
				
				<span class="about_sidebar_title"><?php the_field( 'why_us_sidebar_title' ); ?></span><!-- about_sidebar_title -->
				
				
					<?php if(get_field('why_us_sidebar')): ?>
					
						<ul>
					 
						<?php while(has_sub_field('why_us_sidebar')): ?>
					 
							
							<li><?php the_sub_field( 'bullet' ); ?></li>
							
					    
						<?php endwhile; ?>
						
						</ul>
					 
					<?php endif; ?>
		
				</ul>
				
				</div><!-- about_page_why_us_wrapper -->
			
			</div><!-- about_sidebar_inner -->
			
			
		</div><!-- about_sidebar -->
		
		
	</div><!-- about_wrapper -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
