
<div class="sidebar_bio">
	
	
	<?php $attorney_profile_pic = get_field( 'attorney_profile_pic' ); ?>
	
	<?php if ( $attorney_profile_pic ) : ?>
	
			<img class="attor_profile_img" src="<?php echo $attorney_profile_pic['url']; ?>" alt="<?php echo $attorney_profile_pic['alt']; ?>" />
			
		<?php else:?>
		
		<img class="attor_profile_img" src="<?php bloginfo('template_directory');?>/images/placeholder-new.jpg"/>

	<?php endif; ?>
	
	
	
	<?php if(get_field('sidebar_bullets')): ?>
		
		
	 
		<?php while(has_sub_field('sidebar_bullets')): ?>
		
		<ul class="bio_list">
			
			
			<li>
			
			
				<span class="sidebar_toggle"><?php the_sub_field( 'title' ); ?>
		
					<svg class="sidebar_toggle" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.51 28.76">
			
						<defs><style></style></defs>
			
						<title>arrow-right</title>
			
						<polyline class="sidebar_toggle-cls-1" points="55.16 0.35 27.86 28.05 0.35 0.35"/>
		
					</svg>
		
				</span>
	 
				
				<?php if(get_sub_field('bullets_repeater')): ?>
					
					<ul class="bio_sub_list">
	 
					<?php while(has_sub_field('bullets_repeater')): ?>
	 

						<li><?php the_sub_field( 'bullets' ); ?></li>
		

					<?php endwhile; ?>
					
					</ul>
	 
				<?php endif; ?>
				
				<li>
		
		</ul>
		
		
		<?php endwhile; ?>
		
		
	 
	<?php endif; ?>
	

	
</div><!-- sidebar -->


			