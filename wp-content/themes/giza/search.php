<?php
/**
 * The template for displaying search results.
 */
get_header();
global $post;

?>

<?php if ( '' == get_theme_mod( 'loading_logo_upload') ) { ?>	
<div class="loading-nologo fa-spin"></div>
<?php } 
else { ?>
<div class="loading-inner">
	<div class="loading-logo-container">
	 	<img class="loading-logo center-block" src="<?php echo esc_url(get_theme_mod( 'loading_logo_upload')); ?>" alt="logo">
     </div>
     <div class="loading spin"></div>
    
    <ul class="loading-slides" style="overflow:hidden; width:100px; height:100px;">
    	<?php
			$args = array( 'post_type' => 'post', 'posts_per_page' => 6 );
			$loop = new WP_Query( $args );
			while ( have_posts() ) : the_post(); 
			$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
		?>
        <li style="width:100px; height:100px;">
        	<div class="loading-img" alt="logo" style="background:url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center;"></div>
        </li>
        <?php endwhile; ?>
    </ul>
   
</div>

<?php } ?>

<div class="site-container">
	<div id="st-container" class="st-container">
       <?php get_template_part( 'po-nav-menu', 'page' ); ?>

        <!-- content push wrapper -->
        <!--[if !IE]><!-->
        <div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?>">
        <!--<![endif]-->
        <!--[if IE]><div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?> st-pusher-ie"><![endif]-->
            <div class="st-content"><!-- this is the wrapper for the content -->
                <div class="st-content-inner entry-content"><!-- extra div for emulating position:fixed of the menu -->
                    <div class="video-shade"></div>
                        <div class="po-portfolio-slider-top <?php if ( 'black-content' == get_theme_mod( 'search_image_content') ) { ?>black-content<?php } else if ( 'white-content' == get_theme_mod( 'search_image_content') ) { ?>white-content<?php } else { ?>light-content<?php } ?>">
                        
                        
                        <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>


<div class="po-column black-content part-top" data-delay="2200" data-animation="move-down-short">
	<div class="menu-bars st-trigger-effects" style="float:right;">
        <div class="menu-close"></div>
        <button type="button" class="navbar-toggle button-menu" data-effect="st-effect-4">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         
        </button>
    </div>
    <div class="visible-lg-block visible-md-block top-page" style="float:right;">
        <?php wp_nav_menu( array('theme_location' => 'top-menu', 'fallback_cb' => '')); ?>
    </div>
</div>   

<?php } else { ?>

<div class="po-column black-content part-top" data-delay="2200" data-animation="move-down-short">
	<div class="menu-bars st-trigger-effects" style="float:left;">
        <div class="menu-close"></div>
        <button type="button" class="navbar-toggle button-menu" data-effect="st-effect-4">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         
        </button>
    </div>
    <div class="visible-lg-block visible-md-block top-page" style="float:left;">
        <?php wp_nav_menu( array('theme_location' => 'top-menu', 'fallback_cb' => '')); ?>
    </div>
</div>  

<?php } ?>
                            
                            <div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
                                        <div class="top-logo-container">
                                            <a href="<?php echo esc_url(get_home_url()); ?>">
                                                <?php if ( 'black-content' == get_theme_mod( 'search_image_content') ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_dark') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_dark' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo get_theme_mod( 'logo_upload_dark'); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } else if ( 'light-content' == get_theme_mod( 'search_image_content') ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_light') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_light' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload_light')); ?>" alt="logo" >
                                                    <?php } ?>
                                                
                                                <?php } else { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload')) { ?>
                                                                                
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } ?>
                                            </a>
                                        </div>
                                        </div>
                            
            <div id="ededede" class="po-section section-image section-background-image-parallax <?php if ( 'black-content' == get_theme_mod( 'search_image_content') ) { ?>black-content<?php } else if ( 'white-content' == get_theme_mod( 'search_image_content') ) { ?>white-content<?php } else { ?>light-content<?php } ?>" style="background: url(<?php echo esc_url(get_theme_mod( 'search_image_upload')); ?>) #111;" data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 150px;"
        data-top-bottom="background-position: 50% -150px;"
        data-anchor-target="#ededede">
            <div class="slider-image-inner-page">
                                        <div class="po-slider-bottom-button po-slider-bottom-button-page po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                            <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                                <h1 class="text-center"><?php printf( __( 'Search: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
                                            </div>
                                        
                                    </div>
			
			</div></div>
            
            </div>
                    	<div class="top-page-anchor">
                                         
                        <div class="po-page po-blog">
                        
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
                        
                                    
                                
                                  
                <div class="container page-padding po-container-section">
                	<div class="row">
                
                
                
                <div class="col-sm-12 col-lg-9"> 
                   			
                        	<div class="entry-content">
								<div class="po-blog">
                                	<div class="row">
                                    
									<?php 
										
										global $query_string;
										parse_str( $query_string, $my_query_array );
										$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
										$args = array( 'post_type' => 'post', 'paged' => $paged, 'page' => $paged );
									?>
                                    <?php $the_query = new WP_Query( $args ); ?>
                                    <?php while ( have_posts() ) : the_post(); 
									$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
                                    ?>
                                        <div class="po-column col-sm-6 col-lg-6 blog-item-standard" style="margin-bottom:80px;" data-delay="0" data-animation="move-up-short">
                                        <?php
                                            get_template_part( 'content', get_post_format() );
                                        ?>
                                        </div>
                                        
                                
                                    <?php endwhile; ?>
                                    <div class="col-sm-12">
                                        <div class="po-page-portfolio-paginate index-paginate">
                                        <div style="text-align: center; margin-bottom:30px;">
                                        	<?php previous_posts_link('<span style="padding:0 5px;"><i class="fa fa-chevron-left"></i> Prev</span>'); ?>
                                            <?php next_posts_link('<span style="padding:0 5px;">Next <i class="fa fa-chevron-right"></i></span>'); ?>

                                        </div>
                                        </div>
                                        </div>    
                                    </div>
                                    
                                    </div>
                                  
                                </div>
                               
                                <div class="clearfix"></div>
            				</div><!-- .entry-content -->
                            
                             <div class="col-sm-12 col-lg-3"> 
                                	<?php get_sidebar(); ?>
                                </div>
                            
                            
                </div>
                </div>
				
                
                
              
                                </article><!-- #post-## -->
                

                                
                               
                                
                                <div class="footer-container-bottom" style="border-top:1px solid #ddd;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="po-column col-sm-5" data-delay="0" data-animation="fade-in">
                                            	<?php get_template_part( 'po-copyright'); ?>
                                            </div>
                                            <div class="po-column col-sm-7" data-delay="0" data-animation="fade-in">
                                            	<div class="go-top">Top <i class="fa fa-chevron-up"></i></div>
                                            	<?php echo do_shortcode('[social]'); ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                              </div> 
                            </div>
                            
                            
                        </div><!-- /st-content-inner -->
                    </div><!-- /st-content -->
                </div><!-- /st-pusher -->
            </div><!-- /st-container -->
            <?php get_footer(); ?>
