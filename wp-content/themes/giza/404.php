<?php
/**
 * The template for displaying 404 pages (Not Found).
 */
get_header(); 
global $footer_mb;

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
        <li style="width:100px; height:100px;">
        	<div class="loading-img" alt="logo" style="background:url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center;"></div>
        </li>
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
                    	<?php get_template_part( 'po-search-share'); ?>
                        <div class="po-portfolio-slider-top white-content">
                        
                        
                       
            
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
                                                
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload')) { ?>
                                                                                
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } ?>
                                            </a>
                                        </div>
                                        </div>
             
            <div id="ededede" class="po-section section-image section-background-image-parallax white-content" style="background: #111;" data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 150px;"
        data-top-bottom="background-position: 50% -150px;"
        data-anchor-target="#ededede">
            <div class="slider-image-inner-page">
                                       <div class="po-slider-bottom-button po-slider-bottom-button-page po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                            <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                                <h1 class="text-center">Page not found.</h1>
                                            </div>
                                        
                                    </div>
			
			</div></div>
            
           
            </div>
                    	<div class="top-page-anchor">
                    
							
                                                   
                        <div class="po-page po-blog">
                        
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
                        
                                    
                                
                                        
                                        <div class="container page-padding po-container-section">
                                       
                                            <div class="row">
                                                
                                                <div class="po-column col-sm-9" data-delay="400" data-animation="fade-in">
                                                    <div class="entry-content">
                                                       <article class="po-article">
            
            <div class="po-content-middle">
            
                <h1 class="post-title" style="margin:0;">Sorry, that page isn&rsquo;t here.</h1>
                <div class="entry-content blog-content">
                    <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help?</p>
                </div><!-- .entry-content -->
            
            </div>
        </article><!-- #post-## -->
                
                
                                                        <div class="clearfix"></div>
                                                    </div><!-- .entry-content --> 
                                                    
                                                </div>
                                                <div class="po-column col-sm-3 po-blog" data-delay="400" data-animation="fade-in">
                                                    <?php get_sidebar(); ?>
                                                </div>	
                                              
                                                
                                            </div>
                                        </div>
                                </article><!-- #post-## -->
                
                               <?php get_template_part( 'po-pagefooter' ); ?> 
                            
                            
                        </div><!-- /st-content-inner -->
                    </div><!-- /st-content -->
                </div><!-- /st-pusher -->
            </div><!-- /st-container -->
            </div>
            </div>
            <?php get_footer(); ?>
