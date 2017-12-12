
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div class="blog_feed">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="blog_post">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="meta">|&nbsp;&nbsp;Posted on <span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;in <?php echo get_the_category_list();?></div><!-- meta -->
		
		<div class="blog_content"><?php echo wp_trim_words( get_the_content(), 120, '...' );?></div><!-- blog_content -->
		
		<a class="read_more" href="<?php the_permalink();?>">Read More</a>
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
		
	</div><!-- blog_post -->
	
		
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- blog_feed -->

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		
		<?php if(get_next_posts_link()):?>
		
		<div class="nav_previous">
			
			<svg class="prev_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
				
				<defs><style></style></defs>
				
				<title>arrow-left</title>
				
				<polyline class="prev_icon-cls-1" points="28.41 55.16 0.71 27.75 28.41 0.35"/>
			
			</svg>
			
			<span><?php next_posts_link( __( ' Prev.' ) ); ?></span>
			
		</div><!-- nav_previous -->
		
		<?php endif;?>
		
		<?php if(get_previous_posts_link()):?>
			
		<div class="nav_next">
			
			<span><?php previous_posts_link( __( 'Next') ); ?></span>
			
			<svg class="next_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.76 55.51">
				
				<defs><style></style></defs>
				
				<title>arrow-right</title>
				
				<polyline class="next_icon-cls-1" points="0.35 0.36 28.05 27.66 0.35 55.16"/>
				
			</svg><!-- nav_next -->
			
		
		</div>
		
		<?php endif;?>
	
	</div><!-- #nav-below -->

<?php endif; ?>

