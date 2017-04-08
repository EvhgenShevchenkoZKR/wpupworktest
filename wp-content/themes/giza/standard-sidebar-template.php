<?php
/**
 * Template Name: Standard Sidebar
 */

get_header();
global $footer_mb, $page_mb;
$page_mb->the_meta();
$footer_mb->the_meta();
?>

<?php get_template_part( 'po-loading', 'page' ); ?>

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

<?php endwhile; ?>

<div class="site-container">
	<div id="st-container" class="st-container">
        <?php get_template_part( 'po-nav-menu', 'page' ); ?>
			<!-- content push wrapper -->
        <!--[if !IE]><!-->
        <div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?>">
        <!--<![endif]-->
        <!--[if IE]><div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?> st-pusher-ie"><![endif]-->
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner blog-content po-blog"><!-- extra div for emulating position:fixed of the menu -->
                        <?php get_template_part( 'po-top-menu' ); ?>
                        
                        
                        <div class="po-portfolio-slider-top">
                        <ul class="po-portfolio-slider-loop">
                            
                            	 <li class='slider-slides index <?php if ( 'black-content' == get_theme_mod( 'blog_image_content','white-content') ) { ?>black-content<?php } else if ( 'white-content' == get_theme_mod( 'blog_image_content','white-content') ) { ?>white-content<?php } else { ?>light-content<?php } ?>'>
                                    
                                    
                                    <div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
                                        <div class="top-logo-container">
                                            <a href="<?php echo esc_url(get_home_url()); ?>">
                                                <?php if ( 'black-content' == get_theme_mod( 'blog_image_content','white-content') ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_dark') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_dark' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo get_theme_mod( 'logo_upload_dark'); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } else if ( 'light-content' == get_theme_mod( 'blog_image_content','white-content') ) { ?>
                                                
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
                                    
                                    
                                    <!--[if !IE 8]><!-->
                                    <div class="home-slider-image index" style="background:url(<?php echo esc_url(get_theme_mod( 'blog_image_upload')); ?>); background-size:cover; background-position:center;"
                                    data-center="background-position: 50% -50px;"
                                    data-bottom-top="background-position: 50% 150px;"
                                    data-top-bottom="background-position: 50% -150px;"
                                    data-anchor-target=".slider-slides"></div>
                                    <!--<![endif]-->
                                    <!--[if IE 8]><img class="fullbackground" src="<?php echo esc_url(get_theme_mod( 'blog_image_upload')); ?>" /><![endif]-->
                                    
                                    
                                    <div class="slider-image-inner index">
                                        <div class="po-slider-bottom-button po-slider-bottom-button-page po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                        <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                            <h1 class="text-center"><?php echo esc_html(get_theme_mod( 'blog_header','Blog')); ?></h1>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                        </div>
           <div class="top-page-anchor">
                    
							
                    		
                             <div class="po-page po-blog">
                        
         
            
          

            
        	
            	<div>
                	<div>
                		<div class="index-page-padding">
                
                
              
								 <div class="col-sm-12 col-md-9" style="padding:0;"> 
                   			
                        	<div class="entry-content po-blog">
                                	
                                
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
									$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
                                    ?>
                                        <div class="po-column col-sm-12 standard-blog-post" data-delay="<?php echo esc_attr($format_mb->get_the_value('delay')); ?>" data-animation="move-up-short">
                                        
                                        
                                        <!--[if !IE 8]><!-->
                                        <article id="post-<?php the_ID(); ?>" <?php post_class('po-article'); ?> style="padding:0; margin:0;">
                                        <!--<![endif]-->
                                        <!--[if IE 8]>
                                            <div id="post-<?php the_ID(); ?>" <?php post_class('po-article'); ?> style="padding:0; margin:0;">
                                        <![endif]-->
                                        
                                        <div class="entry-content blog-content actual-content" style="padding:0; margin:0;">
                                        
                                        
                                        <?php if ( has_post_format( array( 'gallery' ) ) ){ ?>
                                        
                                        	<?php if ( '' == $format_mb->get_the_value('gallery') ) { ?>
                                            
                                            	<div class="featured-img-container">
                                                <a class="fade-image-blog standard-image" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full sexy center-block'); ?>
                                                </a>
                                                </div>
                                            
                                            <?php } else { ?>
                                        <div class="gallery-bg-standard-cont standard" style="margin:40px 0;">
                            	
                                	<ul class="gallery-bg-standard index">
                                    	<?php
										$gallerycat = $format_mb->get_the_value('gallery');
										# preserve the current post in the higher loop
   										$preserve_post = get_post();
										$args = array( 'post_type' => 'gallery', 'posts_per_page' => 3, 'gallery_categories' => esc_html($gallerycat ));
										$galleryformat = new WP_Query( $args );
										while ( $galleryformat->have_posts() ) : $galleryformat->the_post(); 
										global $post, $format_mb;
										$format_mb->the_meta();
										$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
									?>
                                	<li>
                                    	<!--[if !IE 8]><!-->
                                    	<div class="gallery-index-li" style="background:url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center;"></div>
                                        <!--<![endif]-->
                                    <!--[if IE 8]>
                                    <div class="featured-img-container" style="margin:0; padding:0;">
                                    	<img style="width:100%; margin:0; padding:0;" src="<?php echo esc_url($url) ?>" />
                                    </div>
                                    <![endif]-->
                                    </li>
                                    <?php endwhile; 
									# set the global back to your first loop post
									$post = $preserve_post;
									setup_postdata( $post ); ?>
                                </ul>
                               
                            	
                            </div>	
                                        
                                        	<?php } ?>
                                        
                                        <?php } else if ( has_post_format( array( 'video' ) ) ){ ?>
                                        
												<?php if ( '' == $format_mb->get_the_value('video_embed') ) { ?>
                                                	
                                                       <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                                                            <div class="featured-img-container">
                                                            <a class="fade-image-blog standard-image" href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail('full sexy center-block'); ?>
                                                            </a>
                                                            </div>
                                                       <?php } ?>
                                                
                                                <?php } else { ?>
                                                	<?php if ( has_post_thumbnail() ) { ?>       	
                                                        <div  style="margin:40px 0;">
                                                            <button data-toggle="modal" data-target="#myModal<?php the_ID(); ?>" class="blog-video-thumb index" style="background: url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center; padding:0; border: none; outline:none;">
                                        
                                            <div class="standard-video-button"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-play"></i></span><div class="clearfix"></div></div>
                                        
                                        
                                    </button>	
                                                        </div>
                                                	<?php } ?>
                                            	<?php } ?>
                                                
                                        <?php } else if ( has_post_format( array( 'quote' ) ) ){ ?>
                                        
                                        		<?php if ( '' == $format_mb->get_the_value('quote') ) { ?>
                                                
                                                <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                                                    <div class="featured-img-container">
                                                    <a class="fade-image-blog standard-image" href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('full sexy center-block'); ?>
                                                    </a>
                                                    </div>
                                               <?php } ?>
                                                
                                            <?php } else { ?>
                                            
                                            <a href="<?php the_permalink(); ?>"> 	
                                                    <div class="quote-cont" style="background:
                                                        url(<?php echo esc_url($url); ?>) #111;
                                                    background-size:cover; background-position:center;">
                                                            <div class="blog-quote-cont-standard">
                                                                <div class="blog-quote-standard">
                                                                    <div class="blog-quote-standard-inner">
                                                                        <?php echo esc_html($format_mb->get_the_value('quote')); ?>
                                                                        <?php if ( '' != $format_mb->get_the_value( 'quote_attribution' ) ) { ?>
                                                                            <br />
                                                                            <cite><?php echo esc_html($format_mb->get_the_value('quote_attribution')); ?></cite>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                    </div>	
                                                </a>
                                            
                                            <?php }  ?>
                                            
                                        <?php } else if ( has_post_format( array( 'audio' ) ) ){ ?>
                                                	
												<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                                                	<?php if ( has_post_thumbnail() ) { ?>
                                                        <div class="audio-featured" style="margin:40px 0; background:
                                                                url(<?php echo esc_url($url); ?>) #111;
                                                            background-size:cover; background-position:center center; display:table; width:100%;">
                                                            <div class="soundcloud-post" style="display:table-cell; vertical-align:middle;">
                                                                <?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                                                            </div>
                                                         </div>
                                                 	<?php } else { ?>
                                                    
                                                    	<div class="soundcloud-post">
                                                                <?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                                                            </div>
                                                    
                                                    <?php } ?>
                                                <?php } else { ?>
                                                	<?php if ( has_post_thumbnail() ) { ?>
                                                        <div class="audio-featured" style="margin:40px 0; background:
                                                                url(<?php echo esc_url($url); ?>) #111;
                                                            background-size:cover; background-position:center center; display:table; width:100%;">
                                                            <div style="display:table-cell; vertical-align:middle;">
                                                            <?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
                                                            </div>
                                                        </div>
                                                	<?php } else { ?>
                                                    
                                                    	<div class="featured-img-container">
                                                            <?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
                                                            </div>
                                                    
                                                    <?php } ?>
                                                <?php } ?>
                                            
                                        <?php } else { ?>
                                       		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                                            	<div class="featured-img-container">
                                                <a class="fade-image-blog standard-image" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full sexy center-block'); ?>
                                                </a>
                                                </div>
                                           <?php } ?>
                                        	
                                        
                                        <?php } ?>	
                                        
                                        <a href="<?php the_permalink(); ?>">
                                        <h1 class="standard-blog-post-title"><?php the_title(); ?></h1>
                                        </a>
                                        <div class="post-banner-details-standard" style="padding:0;">                          
                      <table>
                      <tr>
                      <td style="width:50px;">              
                     <a class="fade-image-blog single-avatar" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></a>
                     </td>
                     <td>
                    <div class="post-author-details-standard hidden-xs">
						Written by <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php esc_html(the_author_meta( 'display_name' )); ?></a> on <?php esc_html(the_time('F j, Y', '', '')); ?> in <?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'pixelobject' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?>.
                    </div> 
                    
                    <div class="post-author-details-standard visible-xs-block">
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html(the_author_meta( 'display_name' )); ?></a> on <?php esc_html(the_time('F j, Y', '', '')); ?>.
                    </div> 
                      
                    </td>
                    </tr>
                    </table>  
        	
                </div>
										<?php the_content(); ?>
                                        
                                        <div class="blog-share-cont-standard">
                    	<a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="blog-share-btn twit"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;" class="blog-share-btn fb"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="blog-share-btn goog"><i class="fa fa-google-plus"></i></a>
                        <a href="<?php comments_link(); ?> " class="blog-share-btn comment"><i class="fa fa-comment-o"></i></a>
                        <div class="clear-float"></div>
                    </div>
                    <div class="blog-share-cont-line"></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <!--[if !IE 8]><!-->
                                            </article><!-- #post-## -->
                                        <!--<![endif]-->
                                        <!--[if IE 8]>
                                            </div>
                                        <![endif]-->   

                                        </div>
                                        
                                
                                    <?php endwhile; ?>
                                    <div class="col-sm-12">
                                        <div class="po-page-portfolio-paginate">
                                        <div style="text-align: center; margin-bottom:30px;">
                                            <?php
      if (function_exists('custom_pagination')) {
        custom_pagination($the_query->max_num_pages,"",$paged);
      }
    ?>
                                        </div>
                                        </div>    
                                    </div>
                                    
                                    
                                  
                                <div class="clearfix"></div>
            				</div><!-- .entry-content -->
                            </div>
                            
                             <div class="col-sm-12 col-md-3" style="padding-top:40px;"> 
                                	<?php get_sidebar(); ?>
                                </div>
                            
                            
                </div>
                </div>
                
                
                <div class="clearfix"></div>
                <?php if (get_theme_mod( 'featured_section') == 'show') {      
        
        $feat_category = get_theme_mod( 'featured_category');
		$feat_number = get_theme_mod( 'featured_number','5');
		$feat_order = get_theme_mod( 'featured_order','DESC');
		$feat_orderby = get_theme_mod( 'featured_orderby','date');
		$args = array( 'post_type' => 'post', 'category_name' => esc_html($feat_category), 'posts_per_page' => esc_html($feat_number), 'order' => esc_html($feat_order), 'orderby' => esc_html($feat_orderby) );
        $loop = new WP_Query( $args );
		if ($loop->have_posts()) :
        echo ' <div style="padding:25px 0; border-top:1px solid #ddd;">
                	<h2 class="text-center" style="text-transform:uppercase; color:#000; font-size:11px; letter-spacing:1px; font-weight:700; margin-top:8px;">'.esc_html(get_theme_mod( 'featured_header','Featured')).'</h2>
                </div>
                  <div class="po-column col-sm-12" data-delay="0" data-animation="fade-in" style="padding:0;" >
    <div class="po-carousel-blog-cont" style="height:200px;">
    	<ul class="po-carousel-blog grid cs-style-1">';
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $post;
        $terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
        ?>
            <li>
                
                    <a href="<?php the_permalink(); ?>" rel="<?php echo strip_tags($terms, '<span>'); ?>">
                    <div class="caro-cont">
                    	<div class="caro-inner">
                            <div class="text-center caro-terms"><?php echo strip_tags($terms, '<span>'); ?></div> 
                            <h3 class="text-center caro-title"><?php the_title(); ?></h3>
                            <div class="text-center caro-details">By <?php the_author(); ?></div>
                        </div>
                     </div>
                    <!--[if !IE 8]><!-->
                    	<figure>
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie">
                    <![endif]-->
                    
                    <img class="img-responsive" src="<?php echo esc_url($url); ?>" alt="<?php the_title(); ?>" />
						
                       
                        
                        
                     <!--[if !IE 8]><!-->
                    	</figure>
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	</div>
                    <![endif]-->
                    </a>
               
            </li>
        <?php endwhile;
        echo '</ul>
   		</div>
    	</div>';
        endif;
		  }
		?>
	<div class="clearfix"></div>
                               <?php get_template_part( 'po-pagefooter' ); ?>
                            
                            
                        </div><!-- /st-content-inner -->
                    </div><!-- /st-content -->
                </div><!-- /st-pusher -->
            </div><!-- /st-container -->
            <?php get_footer(); ?>