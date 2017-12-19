<?php 



/* jQuery from Google
-------------------------------------------------------------- */


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null,true);
   wp_enqueue_script('jquery');
}


/* Enqueued Scripts
-------------------------------------------------------------- */



 function load_my_styles_scripts() {
     // Load my stylesheet
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 3, 'all' ); 

     // Load my javascripts
     wp_enqueue_script( 'jquery-addon', get_template_directory_uri() . '/js/custom-min.js', array('jquery'), '', true );
     
     
     if(is_front_page()) {
	     
	     wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() . '/js/home-min.js', array('jquery'), '', true );
     
     }
     
     else {
	     
	     wp_enqueue_script( 'jquery-waypointinternal', get_template_directory_uri() . '/js/internal-min.js', array('jquery'), '', true );
	     
     }
     
     
     
     
     
 }
 
 add_action( 'wp_enqueue_scripts', 'load_my_styles_scripts', 20 );
 
 
 // Critical Styles in the header
 
 
/*
 function internal_css_print() {
    echo '<style type="text/css">';
    include_once get_template_directory() . '/critical.css';
    echo '</style>';
}
 
 
 
 add_action( 'wp_head', 'internal_css_print' );
*/



/* Force Gravity Forms to init scripts in the footer and ensure that the DOM is loaded before scripts are executed
-------------------------------------------------------------- */


add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
function wrap_gform_cdata_open( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
function wrap_gform_cdata_close( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = ' }, false );';
return $content;
}




/* Remove Unnecessary Scripts
-------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'pa_sidebar' => 'PA Sidebar',
    'pa_directory_menu_col_one' => 'Pa Directory Menu Column One',
    'pa_directory_menu_col_two' => 'Pa Directory Menu Column Two'
));

/* Widgets
-------------------------------------------------------------- */

if (function_exists('register_sidebars')) {

    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
 }

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');



/* ACF: CREATE OPTIONS PAGE
-------------------------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/* ALLOW SVGs IN MEDIA UPLOAD
-------------------------------------------------------------- */
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');




// Shortcode Blockquote with Free Consultation Image

function blockquote_image( $atts, $content = null ) { 
	
	ob_start();?>
	
	<blockquote>
				
		<div class="image_wrapper">
					
			<img src="<?php bloginfo('template_directory');?>/images/content-free-consults-icon.svg"/>
					
		</div>
				
		<span class="blockquote_text"><?php echo $content ?></span>
				
	</blockquote>
	
	<?php return ob_get_clean(); }



add_shortcode( 'blockquoteimage', 'blockquote_image' );



// Shortcode Blockquote with Internal Bear Consultation Image

function blockquote_internal_bear_image( $atts, $content = null ) { 
	
	ob_start();?>
	
	<div class="about_page_blockquote">
					
		<div class="about_blockquote_img_wrapper">
			
			<img src="<?php bloginfo('template_directory');?>/images/int-about-cal-bear-icon.svg"/>
						
		</div><!-- about_blockquote_img_wrapper -->
					
		<div class="about_blockquote_text_wrapper"><?php echo $content ?></div><!-- about_blockquote_text_wrapper -->
				
	</div><!-- about_page_blockquote -->
	
	<?php return ob_get_clean(); }



add_shortcode( 'blockquotebearimage', 'blockquote_internal_bear_image' );




// Shortcode Internal Video

function internal_video( $atts, $content = null ) { 
	
	$atts = shortcode_atts( array(
       'wistia' => '',
   ), $atts );
	
	
	ob_start();?>
	
	
		<div class="content_video_wrapper">
		
			<div class="content_video wistia_embed wistia_async_<?php echo $atts['wistia']; ?> popover=true popoverContent=thumbnail"></div><!-- content_video -->
		
			<div class="content_video_play_wrapper">
				
				<svg class="internal_play" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.2 120.2">
					
					<circle class="internal_play-cls-1" cx="60.1" cy="60.1" r="58.6"/>
					
					<circle class="internal_play-cls-2" cx="60.1" cy="60.1" r="58.6"/>
					
					<polygon class="internal_play-cls-3" points="48.8 44.3 63 52.5 77.3 60.8 63.1 69 48.8 77.3 48.8 60.8 48.8 44.3"/>
					
				</svg>
				
			</div><!-- content_video_play_wrapper -->
		
		</div><!-- content_video_wrapper -->

		<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
	
	<?php return ob_get_clean(); }



add_shortcode( 'internalvideo', 'internal_video' );


