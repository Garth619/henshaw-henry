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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<style type="text/css">

.section_six_img_inner {
 background: url(<?php the_field( 'section_six_image' ); ?>);
	background-size: 2000px auto;
	background-position: -620px top;
}

</style>







<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<header class="homepage">
		
		<a class="logo" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/></a>
		
		
		
		<div class="header_right">
			
			<div class="free_consultation">
				
				<span>Free Consultations</span>
				
				<img src="<?php bloginfo('template_directory');?>/images/horizontal-dashes-graphic.svg"/>
				
				<a class="tel" href="tel:<?php the_field( 'contact_us_tel',63); ?>"><?php the_field( 'contact_us_tel',63); ?></a>
				
			</div><!-- free_consultation -->
			
			<div class="menu_wrapper">
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
				<div class="menu_bar_wrapper">
					
					<span class="menu_bar"></span>
					<span class="menu_bar"></span>
					<span class="menu_bar"></span>
					
				</div><!-- menu_bar_wrapper -->
				
			</div><!-- menu_wrapper -->
			
		</div><!-- header_right -->
		
	</header>
	
	<div class="sticky_menu">
			
			<a class="sticky_logo" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/></a>
			
			<a class="sticky_logo color_logo" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo-color.svg"/></a>
			
			<div id="internal_trigger" class="sticky_header_right">
				
				<div class="sticky_consultion">
					
					<span class="sticky_consult_title">Free Consultations</span><!-- sticky_consult_title -->
					
					<span class="sticky_tel"><?php the_field( 'contact_us_tel',63); ?></span><!-- sticky_tel -->
					
				</div><!-- sticky_consultion -->
				
				<div class="sticky_start">
					
					<span class="sticky_start_title">Start Your Free<br/> Consultation</span><!-- sticky_start_title -->
					
					<span class="sticky_start_tel"><?php the_field( 'contact_us_tel',63); ?></span><!-- sticky_start_tel -->
					
				</div><!-- sticky_start -->
				
				<div class="sticky_menu_wrapper">
					
					<span class="sticky_menu_title">Menu</span><!-- sticky_menu_title -->
					
					<div class="sticky_menu_bar_wrapper">
					
					<span class="sticky_menu_bar"></span>
					<span class="sticky_menu_bar"></span>
					<span class="sticky_menu_bar"></span>
					
				</div><!-- menu_bar_wrapper -->
					
				</div><!-- sticky_menu_wrapper -->
				
			</div><!-- sticky_header_right -->
			
		</div><!-- sticky_menu -->
		
		<div class="dropdown_menu_wrapper">
			
			<div class="dropdown_form">
				
				<div class="dropdown_inner_form">

				<a class="" href="<?php bloginfo('url');?>"><img class="form_logo" src="<?php bloginfo('template_directory');?>/images/logo-color.svg"/></a>
				
				<span class="menu_request">Request your<br/> free consultation</span><!-- menu_request -->
				
				<?php gravity_form(2, false, false, false, '', true, 12); ?>
				
				<span class="menu_required">*required fields</span><!-- menu_required -->
				
				</div><!-- dropdown_inner_form -->
				
			</div><!-- dropdown_form -->
			
			<div class="dropdown_menu">
				
				<div class="close_wrapper">
					
					<span class="close_bar"></span><!-- close_bar -->
					
					<span class="close_bar"></span><!-- close_bar -->
					
				</div><!-- close_wrapper -->
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
			</div><!-- dropdown_menu -->
			
		</div><!-- dropdown_menu -->
		
		<div class="form_overlay">
			
			<div class="close_wrapper close_form">
					
				<span class="close_bar"></span><!-- close_bar -->
					
				<span class="close_bar"></span><!-- close_bar -->
					
			</div><!-- close_wrapper -->

			
			<div class="form_overlay_inner">
				
				
				<span class="overlay_title">Request your free consultation</span><!-- overlay_title -->
				
				<span class="request_subtitle">We enjoy building relationships with our clients and understand the problems they face every day. </span><!-- request_subtitle -->
				
				<?php gravity_form(3, false, false, false, '', true, 12); ?>
				
				<span class="my_required_fields"><span class="my_asterisk">*</span> Required Fields</span><!-- my_required_fields -->
				
			</div><!-- form_overlay_inner -->
			
			
		</div><!-- form_overlay -->
				


			