<footer>
	
	
	<div class="top_footer">
		
		<div class="inner_top_footer">
			
			<img class="footer_icon" src="<?php bloginfo('template_directory');?>/images/footer-icon.svg"/>
			
			<span class="top_footer_content">Henshaw & Henry, PC takes an analytic approach to your personal needs, contact us&nbsp;today.</span><!-- top_footer_content -->
			
			
			<div class="location_col">
				
				<span class="our_office"><?php the_field( 'our_office',63 ); ?></span><!-- our_office -->
				
				<a class="address" href="<?php the_field( 'contact_us_address_link',63); ?>" target="_blank"><?php the_field( 'contact_us_address',63); ?></a>
				
				<a class="directions" href="<?php the_field( 'contact_us_address_link',63); ?>" target="_blank"><?php the_field( 'get_directions_verbiage', 63); ?></a>
				
				<a class="tel" href="tel:<?php the_field( 'contact_us_tel',63); ?>"><?php the_field( 'contact_us_tel',63); ?></a>
				
				<div class="soical_media mobile">
					
					<a class="" href="https://twitter.com/HenshawHenry"><img src="<?php bloginfo('template_directory');?>/images/twitter.svg"/></a>
					
					<a class="" href="https://www.yelp.com/biz/henshaw-and-henry-san-jose"><img src="<?php bloginfo('template_directory');?>/images/footer-yelp.svg"/></a>
					
					<a class="" href="https://www.facebook.com/Henshaw-Henry-PC-732274050175937/"><img src="<?php bloginfo('template_directory');?>/images/footer-fb.svg"/></a>
					
					<a class="" href="https://plus.google.com/+Henshawhenry"><img src="<?php bloginfo('template_directory');?>/images/footer-google.svg"/></a>
					
					
					
				</div><!-- soical_media_top_footer -->
				
			</div><!-- location_col -->
			
			<div class="location_col">
				
				<p>We are experienced in the common problems that individuals and businesses face. While each and every client has a unique set of problems, we are confident that we have the expertise to resolve your legal issues.</p>

				<blockquote>We enjoy building relationships with our clients and understand the problems they face every day. </blockquote>

				<p>Too often people are afraid to contact their lawyer. Our clients appreciate that we listen to their goals and objectives during the entire representation. In doing so, we are able to advise them towards the most desired legal conclusion.</p>
				
			</div><!-- location_col -->
			
		
		</div><!-- inner_top_footer -->
		
	</div><!-- top_footer -->
	
	
	<div class="bottom_footer">
		
		
		<div class="footer_form_wrapper">
			
			<div class="footer_form_inner">
			
				<span class="large_header">Request your<br/> free consultation</span><!-- large_header -->
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
				<span class="my_required_fields"><span class="my_asterisk">*</span> Required Fields</span><!-- my_required_fields -->
			
			</div><!-- footer_form_inner -->
			
			<div class="footer_bar">
				
				<span>&copy; Copyright <?php echo date("Y"); ?> by Henshaw<br/> & Henry, PC. All Rights Reserved.</span>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/></a>
				
			</div><!-- footer_bar -->
			
			<div class="desktop_social_media">
				
				<a class="twitter" href="https://twitter.com/HenshawHenry"><img src="<?php bloginfo('template_directory');?>/images/twitter.svg"/></a>
				<a class="yelp" href="https://www.yelp.com/biz/henshaw-and-henry-san-jose"><img src="<?php bloginfo('template_directory');?>/images/footer-yelp.svg"/></a>
				<a class="facebook" href="https://www.facebook.com/Henshaw-Henry-PC-732274050175937/"><img src="<?php bloginfo('template_directory');?>/images/footer-fb.svg"/></a>
				<a class="google" href="https://plus.google.com/+Henshawhenry"><img src="<?php bloginfo('template_directory');?>/images/footer-google.svg"/></a>
				
				
				
			</div><!-- desktop_social_media -->
			
		</div><!-- footer_form_wrapper -->
		
		
	</div><!-- bottom_footer -->
	
	
</footer>


<?php wp_footer();?>


</body>
</html>
