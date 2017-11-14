<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<header class="homepage">
		
		<a class="logo" href=""><img src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/></a>
		
		<div class="header_right">
			
			<div class="free_consultation">
				
				<span>Free Consultations</span>
				
				<img src="<?php bloginfo('template_directory');?>/images/horizontal-dashes-graphic.svg"/>
				
				<a class="tel" href="tel:(408) 533-1075">(408) 533-1075</a>
				
			</div><!-- free_consultation -->
			
			<div class="menu_wrapper">
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
				<div class="menu_bar_wrapper">
					
					<span class="menu_bar_wrapper"></span>
					<span class="menu_bar_wrapper"></span>
					<span class="menu_bar_wrapper"></span>
					
				</div><!-- menu_bar_wrapper -->
				
			</div><!-- menu_wrapper -->
			
		</div><!-- header_right -->
		
	</header>
				

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			