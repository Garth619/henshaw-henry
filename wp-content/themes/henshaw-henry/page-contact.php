<?php 
	
	/* Template Name: Contact */
	
	get_header(); ?>



<div class="internal_main">
	
	
	<div class="one_column">
		
		
		<div class="contact_page_wrapper">
			
			
			<img class="contact_svg" src="<?php bloginfo('template_directory');?>/images/contact.svg"/>
			
			<span class="contact_decription"><?php the_field( 'contact_us_description' ); ?></span><!-- contact_decription -->
			
			
			
			<div class="contact_col">
				
				<span class="contact_page_office_title"><?php the_field( 'our_office' ); ?></span><!-- contact_page_office_title -->
				
				<a class="contact_page_address" href="<?php the_field( 'contact_us_address_link' ); ?>"><?php the_field( 'contact_us_address' ); ?></a>
				
				<a class="contact_page_directions" href="<?php the_field( 'contact_us_address_link' ); ?>"><?php the_field( 'get_directions_verbiage' ); ?></a>
				
				<a class="contact_page_tel" href="tel:<?php the_field( 'contact_us_tel' ); ?>"><?php the_field( 'contact_us_tel' ); ?></a>
				
			</div><!-- contact_col -->
			
			<div class="contact_col">
				
				<?php the_field( 'google_iframe_embed_map' ); ?>
			
			</div><!-- contact_col -->
			
			
		</div><!-- contact_page_wrapper -->
		
		
	</div><!-- one_column -->
	
	
</div><!-- internal_main -->




<?php get_footer(); ?>
