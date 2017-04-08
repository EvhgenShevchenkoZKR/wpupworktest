<?php
/**
 * The template for displaying image attachments.
 */

get_header(); 
global $page_mb, $footer_mb;
$page_mb->the_meta();
$footer_mb->the_meta();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
?>

<?php if ( '' == get_theme_mod( 'loading_logo_upload') ) { ?>	
<div class="loading-nologo fa-spin"></div>
<?php } 
else { ?>
<div class="loading-inner">
	<img class="loading-logo" src="<?php echo esc_url(get_theme_mod( 'loading_logo_upload')); ?>" alt="logo" style="margin:43px 0 0 26px;">
    <div class="loading spin"></div>
    
    <ul class="loading-slides" style="overflow:hidden; width:100px; height:100px;">
        <li style="width:100px; height:100px;">
        	<div class="loading-img" alt="logo" style="background:url(<?php echo esc_url($url); ?>);background-size:cover; background-position:center;"></div>
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
                    <?php get_template_part( 'po-top-menu' ); ?>
            
            <div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
                                        <div class="top-logo-container">
                                            <a href="<?php echo esc_url(get_home_url()); ?>">
                                                <?php if ( 'black-content' == $page_mb->get_the_value( 'slider_bg' ) ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_dark') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_dark' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload_dark')); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } else if ( 'light-content' == $page_mb->get_the_value( 'slider_bg' ) ) { ?>
                                                
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
                                        
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?> 
            
            <div id="ededede" class="po-section section-image section-background-image-parallax <?php if ( 'black-content' == $page_mb->get_the_value( 'slider_bg' ) ) { ?>black-content<?php } else if ( 'light-content' == $page_mb->get_the_value( 'slider_bg' ) ) { ?>light-content<?php } else { ?>white-content<?php } ?>" style="background:url(<?php echo esc_url($url); ?>) #111;" data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 150px;"
        data-top-bottom="background-position: 50% -150px;"
        data-anchor-target="#ededede">
			<!--[if IE 8]><img class="section-bg-ie" src="<?php echo esc_url($url); ?>" alt="background"><![endif]-->
            <div class="slider-image-inner-page">
                                        <div class="po-slider-bottom-button po-slider-bottom-button-page po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                            <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                                <h1 class="text-center"><?php the_title(); ?></h1>
                                            </div>
                                        
                                    </div>
			
			</div></div>
            </div>
                    	<div class="top-page-anchor">
                    
							
                            
                            <div class="po-page po-blog">  
                        
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
                        
                                    
                                
                                        <?php 
                                        global $page_mb;
                                        if ( 'hide' == $page_mb->get_the_value( 'top_padding' ) ) {
                                        ?>	
                                        <div class="container" style="margin-top:-1px;">
                                        <?php 
                                        } else { ?>
                                        <div class="container page-padding po-container-section">
                                        <?php 
                                        }
                                        ?>
                                            <div class="row">
                                                
                                                <div class="po-column col-sm-12" data-delay="400" data-animation="fade-in">
                                                    <div class="entry-content">
                                                        <?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('po-article'); ?>>
                    	<div class="po-content-middle">
							<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

						<div class="entry-content blog-content">
							<div class="entry-attachment">
								<div class="attachment">
									<?php pixelobject_the_attached_image(); ?>
								</div><!-- .attachment -->

								
							</div><!-- .entry-attachment -->

							<?php
								the_content();
							?>
						</div><!-- .entry-content -->

                        
                        <?php if ( comments_open() || '0' != get_comments_number() ) { ?>
								<?php
                                if ( 'hide' == $page_mb->get_the_value( 'page_padding' ) ) {
                                ?>	
                                    <div class="container page-padding po-container-section" style="margin-top:-1px; padding-top:0;">
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="page-comments po-blog">
                                                    <div class="entry-content blog-content">
                                                    <?php // If comments are open or we have at least one comment, load up the comment template
                                                        comments_template(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <?php } else { ?>
                             
                                    
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="page-comments po-blog">
                                                    <div class="entry-content blog-content">
                                                <?php // If comments are open or we have at least one comment, load up the comment template
                                                    comments_template(); ?>
                                                    </div>
                                                </div>
                                           
                                           </div>
                             
                              <?php } ?>
                         <?php } ?>
                        </div>
					</article><!-- #post-## -->

					

				<?php endwhile; // end of the loop. ?>
                
                
                                                        <div class="clearfix"></div>
                                                    </div><!-- .entry-content --> 
                                                   
                                                </div>
                                                
                                              
                                                
                                            </div>
                                        </div>
                                </article><!-- #post-## -->
                
                               <?php get_template_part( 'po-pagefooter'); ?>
                            
                            
                        </div><!-- /st-content-inner -->
                    </div><!-- /st-content -->
                </div><!-- /st-pusher -->
            </div><!-- /st-container -->
            </div>
            </div>
            <?php get_footer(); ?>
