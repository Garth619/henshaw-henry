<?php get_header(); ?>


<div class="internal_main">
	
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1>Blog</h1>
		
		<?php get_template_part( 'loop', 'index' );?>

	</div><!-- container -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
