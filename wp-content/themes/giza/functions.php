<?php
/**
 * Functions and definitions.
 */


/* OPTIONS
--------------------------------------------------------- */ 
require_once('inc/po-options.php');


/* METABOXES
--------------------------------------------------------- */ 
 
include_once 'metaboxes/wpalchemy/MetaBox.php';
include_once 'metaboxes/wpalchemy/MediaAccess.php';
include_once 'metaboxes/portfolio-spec.php';
include_once 'metaboxes/page-spec.php';
include_once 'metaboxes/client-spec.php';
include_once 'metaboxes/team-spec.php';
include_once 'metaboxes/carousel-spec.php';
include_once 'metaboxes/format-spec.php';
include_once 'metaboxes/footer-spec.php';
include_once 'metaboxes/footer-column-spec.php';


/* CONTENT WIDTH
--------------------------------------------------------- */ 
if ( ! isset( $content_width ) ) $content_width = 1140;



/* LOVE IT
--------------------------------------------------------- */ 
include_once('inc/love-it-pro/love-it-pro.php');


/* METABOXES STYLES
--------------------------------------------------------- */ 

if (is_admin()) add_action('admin_enqueue_scripts', 'po_metabox_style');
function po_metabox_style() {
	wp_enqueue_style('wpalchemy-metabox', get_template_directory_uri() . '/metaboxes/meta.css');
}

/* THEME SETUP
--------------------------------------------------------- */ 

if ( ! function_exists( 'pixelobject_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function po_pixelobject_setup() {

	/**
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'pixelobject', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'small-thumb', 50, 50, true);
	
	/*
	 * Lets WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array( 'aside', 'video', 'quote', 'audio', 'gallery' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'pixelobject_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'po_pixelobject_setup' );

 
/* LOAD SCRIPTS AND STYPES
--------------------------------------------------------- */ 

function po_pixelobject_scripts() {
	global $wp_styles;
	
	wp_register_style( 'po-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'po-bootstrap-style' );
	wp_enqueue_style( 'po-style', get_stylesheet_uri() );
	wp_register_style( 'po-page-slide', get_template_directory_uri() . '/css/component.css');
	wp_enqueue_style( 'po-page-slide' );
	wp_enqueue_style( 'po-ie', get_template_directory_uri() . '/css/ie.css', array( 'po-style' ), '20121010' );
	$wp_styles->add_data( 'po-ie', 'conditional', 'lt IE 9' );
	
	wp_enqueue_style( 'po-ie9', get_template_directory_uri() . '/css/ie9.css', array( 'po-style' ), '20121010' );
	$wp_styles->add_data( 'po-ie9', 'conditional', 'IE 9' );
	
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'po-google-font', "$protocol://fonts.googleapis.com/css?family=" . get_theme_mod( 'family_code','Source+Sans+Pro:300,400,600') );
	wp_register_style( 'po-font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'po-font-awesome' );
	wp_register_style( 'po-linecons', get_template_directory_uri() . '/css/linecons.css');
	wp_enqueue_style( 'po-linecons' );
	
	wp_enqueue_script( 'po-jquery1102', get_template_directory_uri() . '/js/jquery1102.js', array(), '1102', false );
	wp_register_script('po-googlemaps', ('http://maps.google.com/maps/api/js?sensor=false'), false, null, true);
    wp_enqueue_script('po-googlemaps');
	wp_enqueue_script( 'po-jquery192', get_template_directory_uri() . '/js/jquery192.js', array(), '192', true );
	wp_enqueue_script( 'po-appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), '033', true );
	wp_enqueue_script( 'po-theme-plugins', get_template_directory_uri() . '/js/theme-plugins.js', array(), '1', true );
	wp_enqueue_script( 'po-view', get_template_directory_uri() . '/js/view.min.js?auto', array(), '1', true );
	wp_enqueue_script( 'po-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1', true );
	wp_enqueue_script( 'po-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '411', true );
	wp_enqueue_script( 'po-stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array(), '1', true );
	wp_enqueue_script( 'po-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '303', true );
	wp_enqueue_script( 'po-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '262', true );
	wp_enqueue_script( 'po-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'po-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'po-scroll-sections', get_template_directory_uri() . '/js/jquery.scrollSections.js', array(), '043', true );
	wp_enqueue_script( 'po-slimscroll', get_template_directory_uri() . '/js/jquery.slimscroll.min.js', array(), '001', true );
	wp_enqueue_script( 'po-fullpage', get_template_directory_uri() . '/js/jquery.fullPage.js', array(), '001', true );
	wp_enqueue_script( 'po-nav', get_template_directory_uri() . '/js/jquery.nav.js', array(), '001', true );
	wp_enqueue_script( 'po-main-script', get_template_directory_uri() . '/js/script.js', array(), true );
	wp_enqueue_script( 'po-classie', get_template_directory_uri() . '/js/classie.js', array(), '001', true );
	wp_enqueue_script( 'po-sidebareffects', get_template_directory_uri() . '/js/sidebarEffects.js', array(), '001', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	

}
add_action( 'wp_enqueue_scripts', 'po_pixelobject_scripts' );


/* LOAD CUSTOMISER STYLES
--------------------------------------------------------- */ 
require_once('inc/custom-styles.php');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Use Bootstrap Menu
 */

if ( ! function_exists( 'po_bootstrap_menu_usage' ) ):
  function po_bootstrap_menu_usage() {
    // Adds the main menu
    register_nav_menus( array(
      'side-menu' => __( 'Side Menu','po_menu_locations' ),
	  'top-menu' => __( 'Top Menu','po_menu_locations' ),
    ) );
  }
endif;
add_action( 'after_setup_theme', 'po_bootstrap_menu_usage' );

/**
 * Removes auto formatting
*/

add_filter("the_content", "po_content_filter");
 
function po_content_filter($content) {
 
	// array of custom shortcodes requiring the fix 
	$block = join("|",array("slider_details","slider_column","slider_button","slider_text","slider_titles","slider_gallery","slider_gallery_no_controls","slider_images","nav_bar","nav_bar_noslide","section","section1","section2","column","column1","column2","header","media","button","iconbox","count","progress_bar","portfolio_showcase","portfolio_footer","portfolio_details","carousel","googlemaps","team","clients","testimonials","social","social_person","social_footer"));
 
	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
		
	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
 
	return $rep;
 
}

/*
 * Editor Styles
 */

function po_theme_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'po_theme_add_editor_styles' );



/**
 * Add breadcrumbs
*/
require_once 'inc/breadcrumbs.php';

/**
 * Add pagination
*/
require_once 'inc/pagination.php';


/**
 * Custom background
*/
$defaults = array(
	'default-color'          => '#15191B',
	'wp-head-callback'       => '_custom_background_cb'
);
add_theme_support( 'custom-background', $defaults );


/**
 * Get the first link.
 */

function po_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Register Sidebar
 */

$args = array(
	'name'          => __( 'Sidebar', 'pixelobject' ),
	'id'            => 'po-sidebar',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => "</h4>\n",
);
register_sidebar( $args );


/**
 * Tag Cloud
 */
	
function po_tag_cloud_custom( $args ) {
	$args['smallest'] = 13;
	$args['largest'] = 13;
	$args['unit'] = 'px';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'po_tag_cloud_custom' );

function po_portfolio_archive_args( $query ) {
	$category = get_theme_mod( 'portfolio_category');
	$order = get_theme_mod( 'portfolio_order');
	$orderby = get_theme_mod( 'portfolio_orderby');
	
    if ( is_post_type_archive( 'portfolio' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'orderby', $orderby );
		$query->set( 'order', $order );
		$query->set( 'portfolio_categories', $category );
		
        return;
    }
}
add_action( 'pre_get_posts', 'po_portfolio_archive_args', 1 );



/**
 * Avatar URL
*/

function po_get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}


/**
 * Add color picker (demo only)
*/
include_once 'inc/color-options.php';


/**
 * CPT menu links
*/

function po_remove_parent_classes($class)
{
  // check for current page classes, return false if they exist.
	return ($class == 'current_page_item') ? FALSE : TRUE;
}

function po_add_class_to_wp_nav_menu($classes)
{
     switch (get_post_type())
     {
     	case 'portfolio':
     		// we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
     		$classes = array_filter($classes, "po_remove_parent_classes");

     		// add the current page class to a specific menu item (replace ###).
     		if (in_array('portfolio', $classes))
     		{
     		   $classes[] = 'current_page_item';
         }
     		break;
		
		case 'team':
     		// we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
     		$classes = array_filter($classes, "po_remove_parent_classes");

     		// add the current page class to a specific menu item (replace ###).
     		if (in_array('team', $classes))
     		{
     		   $classes[] = 'current_page_item';
               }
     		break;

      // add more cases if necessary and/or a default
     }
	return $classes;
}
add_filter('nav_menu_css_class', 'po_add_class_to_wp_nav_menu');


/**
 * Sanitize functions
*/

function po_sanitize_checkbox( $input ) {
    if ( $input == 'show' ) {
        return 'show';
    } else {
        return '';
    }
}

 /** 
   * Remove Paragraph Tags From Around Images
   */
  
  function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


/**
 * Load theme updater functions.
 * Action is used so that child themes can easily disable.
 */

function prefix_theme_updater() {
	require( get_template_directory() . '/updater/theme-updater.php' );
}
add_action( 'after_setup_theme', 'prefix_theme_updater' );


function custom_pagination($numpages = '', $pagerange = '', $paged='') {
 
  if (empty($pagerange)) {
    $pagerange = 2;
  }
 
  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }
 
  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('<i class="fa fa-angle-left"></i>'),
    'next_text'       => __('<i class="fa fa-angle-right"></i>'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);
  
  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }
  

 
}  

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );		


function new_excerpt_more( $more ) {
	return __('...', 'your-text-domain');
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter( 'use_default_gallery_style', '__return_false' );

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<br><a class="more-link" href="' . get_permalink() . '">Continue...</a>';
}





