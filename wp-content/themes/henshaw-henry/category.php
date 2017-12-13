<?php get_header(); ?>



<div class="internal_main">
	
	
	<?php get_sidebar('blog'); ?>
	
	<div class="container content">
		
		<h1><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
		
		<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				get_template_part( 'loop', 'category' );
				?>

	</div><!-- container -->
	
	
</div><!-- internal_main -->



<?php get_footer(); ?>
