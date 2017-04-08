<?php
/**
 * The template for displaying archives.
 */
get_header(); 
global $page_mb, $footer_mb;
$page_mb->the_meta();
$footer_mb->the_meta();
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
			global $post, $format_mb;
			$format_mb->the_meta();
			
			$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
		?>
        <li style="width:100px; height:100px;">
        	<div class="loading-img" alt="logo" style="background:url(<?php echo esc_url($url); ?>);background-size:cover; background-position:center;"></div>
        </li>
        <?php endwhile; ?>
    </ul>
   
</div>

<?php } ?>

<?php 
	# preserve the current post in the higher loop
   	$preserve_post = get_post();
?>
<?php 
	global $query_string;
	parse_str( $query_string, $my_query_array );
	$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
	$args = array( 'post_type' => 'post', 'paged' => $paged, 'page' => $paged );
?>
<?php $the_query = new WP_Query( $args ); ?>
<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
global $format_mb;
$format_mb->the_meta();
$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
?>

 <?php if ( has_post_format( array( 'video' ) ) ){ ?>

 <!-- Video Player Modal -->
<div class="modal fade" id="myModal<?php esc_attr(the_ID()); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-yo="myModal<?php the_ID(); ?>" data-embed-code='<?php esc_attr($format_mb->the_value('video_embed')); ?>'>
  <div class="modal-dialog po-modal-lg">
    <div class="modal-content">
      <div class="modal-body video-container" id="yt-player">
      
    </div>
     
    </div>
  </div>
</div>


<?php } ?>

<?php endwhile; 
# set the global back to your first loop post
$post = $preserve_post;
setup_postdata( $post ); ?>

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
                        <div class="po-portfolio-slider-top <?php if ( 'black-content' == get_theme_mod( 'archive_image_content') ) { ?>black-content<?php } else if ( 'white-content' == get_theme_mod( 'archive_image_content') ) { ?>white-content<?php } else { ?>light-content<?php } ?>">
                        
                        
                       
            <?php get_template_part( 'po-top-menu' ); ?>
            
            <div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
                                        <div class="top-logo-container">
                                            <a href="<?php echo esc_url(get_home_url()); ?>">
                                                <?php if ( 'black-content' == get_theme_mod( 'archive_image_content') ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_dark') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_dark' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload_dark')); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } else if ( 'light-content' == get_theme_mod( 'archive_image_content') ) { ?>
                                                
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
            
            <div id="ededede" class="po-section section-image section-background-image-parallax <?php if ( 'black-content' == get_theme_mod( 'archive_image_content') ) { ?>black-content<?php } else if ( 'white-content' == get_theme_mod( 'archive_image_content') ) { ?>white-content<?php } else { ?>light-content<?php } ?>" style="background: url(<?php echo esc_url(get_theme_mod( 'archive_image_upload')); ?>) #111;" data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 150px;"
        data-top-bottom="background-position: 50% -150px;"
        data-anchor-target="#ededede">
			<!--[if IE 8]><img class="section-bg-ie" src="<?php echo esc_url($url); ?>" alt="background"><![endif]-->
            <div class="slider-image-inner-page">
                                        <div class="po-slider-bottom-button po-slider-bottom-button-page po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                            <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                                <h1 class="text-center"><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

						else :
							_e( 'Archives', 'twentyfourteen' );

						endif;
					?></h1>
                                            </div>
                                        
                                    </div>
			
			</div></div>
            
            
            </div>
                    	<div class="top-page-anchor">
                                            
                         <div class="po-page po-blog">
                        
							 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
                        
                                    
                                
                                       <?php
				if ( 'hide' == $page_mb->get_the_value( 'page_padding' ) ) {
				?>	
            	<div>
                	<div>
                		<div style="padding:0;">
                <?php 
            	} else { ?>
                <div class="container page-padding po-container-section">
                	<div class="row">
                <?php 
				}
				?>
                
               
                
                
                        	<div class="entry-content">
								<div class="po-blog">
									<?php 
										
										global $query_string;
										parse_str( $query_string, $my_query_array );
										$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
										$args = array( 'post_type' => 'post', 'paged' => $paged, 'page' => $paged );
									?>
                                    <?php $the_query = new WP_Query( $args ); ?>
                                    <?php while ( have_posts() ) : the_post(); 
                                    global $format_mb;
                                    $format_mb->the_meta();
									$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
                                    ?>
                                        <div class="po-column col-sm-6 col-lg-4 blog-item-standard" style="margin-bottom:80px;" data-delay="<?php echo esc_attr($format_mb->get_the_value('delay')); ?>" data-animation="move-up-short">
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
                                    
                                    
                                  
                                <div class="clearfix"></div>
            				</div><!-- .entry-content -->
                            
                             
                </div>
                </div>
                
                
                
                
              
                                </article><!-- #post-## -->
                
                               <?php get_template_part( 'po-pagefooter' ); ?> 
                            
                            
                        </div><!-- /st-content-inner -->
                    </div><!-- /st-content -->
                </div><!-- /st-pusher -->
            </div><!-- /st-container -->
            <?php get_footer(); ?>
