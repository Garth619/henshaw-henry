<?php 
	
	/* Template Name: Attorney Bio */
	
	get_header(); ?>


<div class="internal_main">
	
	
	<?php get_sidebar('bio'); ?>
	
	
	<?php $attorney_profile_pic = get_field( 'attorney_profile_pic' ); ?>

		<?php if ( $attorney_profile_pic ) : ?>
	
			<img class="attor_profile_img mobile" src="<?php echo $attorney_profile_pic['url']; ?>" alt="<?php echo $attorney_profile_pic['alt']; ?>" />
			
		<?php else:?>
		
		<img class="attor_profile_img mobile" src="<?php bloginfo('template_directory');?>/images/placeholder-new.jpg"/>

	<?php endif; ?>
	
	
	<div class="bio_container content">
		
		<h1 class="bio_header"><?php the_title();?></h1><!-- bio_header -->
		
		<span class="bio_position"><?php the_field( 'position_title' ); ?></span><!-- bio_position -->
		
		<?php get_template_part( 'loop', 'page' ) ?>
		
		
		
		<?php if(get_field('content_bullets')): ?>
		
		<div class="bio_cases_wrapper">
	 
		<?php while(has_sub_field('content_bullets')): ?>
		
		<ul>
			
			
			<li class="cases_title">
			
			
				<span class="sidebar_toggle_content"><?php the_sub_field( 'title' ); ?>
			
					<svg class="sidebar_toggle" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.51 28.76">
			
						<defs><style></style></defs>
			
						
			
						<polyline class="sidebar_toggle-cls-1" points="55.16 0.35 27.86 28.05 0.35 0.35"/>
		
					</svg>
			
					</span>

	 
				
				<?php if(get_sub_field('bullets_repeater')): ?>
					
					<ul class="case_bullets">
	 
					<?php while(has_sub_field('bullets_repeater')): ?>
	 

						<li><?php the_sub_field( 'bullets' ); ?></li>
		

					<?php endwhile; ?>
					
					</ul>
	 
				<?php endif; ?>
				
				<li>
		
		</ul>
		
		
		<?php endwhile; ?>
		
		</div><!-- bio_cases_wrapper -->
	 
	<?php endif; ?>
		


	</div><!-- bio_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>
