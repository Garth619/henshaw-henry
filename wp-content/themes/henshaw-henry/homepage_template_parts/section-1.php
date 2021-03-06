<section id="section_one">
	
	<div class="inner_section_one">
		
		<img class="sec_one_mobile_logo" src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/>
		
		<div style="cursor: pointer" class="wistia_embed wistia_async_m8e47nd9p4 popover=true popoverContent=html">
			
			<svg id="mobile_play" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.2 120.2">
			
			<defs><style>.cls-1{fill:#fff;opacity:0.2;isolation:isolate;}.cls-2{fill:none;stroke:#103b99;stroke-miterlimit:10;stroke-width:3px;}.cls-3{fill:#103b99;}</style></defs>
			
			<title>circular-play-button-hover</title>
			
			<circle class="cls-1" cx="60.1" cy="60.1" r="58.6"/><circle class="cls-2" cx="60.1" cy="60.1" r="58.6"/><polygon class="cls-3" points="48.8 44.3 63 52.5 77.3 60.8 63.1 69 48.8 77.3 48.8 60.8 48.8 44.3"/>
			
			</svg>
		
		</div>
		
		<span class="sec_one_header"><?php the_field( 'banner_large_header' ); ?></span><!-- sec_one_header -->
		
		<?php if(get_field('banner_sub_header')): ?>
			
			<ul class="subheader_bullets">
		 
			<?php while(has_sub_field('banner_sub_header')): ?>
		 
				<li><?php the_sub_field( 'bullet' ); ?></li>
		    
			<?php endwhile; ?>
			
			</ul>
		 
		<?php endif; ?>	
				
		<span class="start_button"><?php the_field( 'start_button_verbiage' ); ?></span>
		
	</div><!-- inner_section_one -->
	
</section><!-- section_one -->