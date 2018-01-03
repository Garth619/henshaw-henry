<?php get_header(); ?>



<div class="internal_main">
	
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' )  ?>
		


		
	</div><!-- container -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
