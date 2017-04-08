<?php
/**
 * Template Name: Masonary 
 */
get_header(); 
global $page_mb, $footer_mb;
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
                <div class="st-content-inner entry-content" ><!-- extra div for emulating position:fixed of the menu -->
                    
                    <div class="video-shade"></div>
                    
                    	<?php get_template_part( 'po-top-menu' ); ?>
                        
                    
                    
                    <div class="po-portfolio-slider-top" style="background:#000;">
                        <ul class="po-portfolio-slider-loop">
                            <?php
                            $slide_category = get_theme_mod( 'slider_category');
							$slide_number = get_theme_mod( 'slider_number','3');
							$slide_order = get_theme_mod( 'slider_order','DESC');
							$slide_orderby = get_theme_mod( 'slider_orderby','date');
                            $args = array( 'post_type' => 'post', 'category_name' => esc_html($slide_category), 'posts_per_page' => esc_html($slide_number), 'order' => esc_html($slide_order), 'orderby' => esc_html($slide_orderby) );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                            global $post, $format_mb;
                            $format_mb->the_meta();
                            $terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
                            
                            ?>
                            	 <li class='slider-slides <?php if ( 'black-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>black-content<?php } else if ( 'white-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>white-content<?php } else { ?>light-content<?php } ?>' data-embed='<?php echo $format_mb->get_the_value('video_embed'); ?>'>
                                    <?php if ( 'show' == $format_mb->get_the_value( 'show_overlay' ) ) { ?>	
                                    	<div class="background-greyscale-2"></div>
                                    <?php } ?>
                                    <div class="slider-video" 
                                    data-center="top: 0px;"
                                    data-bottom-top="top: 150px;"
                                    data-top-bottom="top: -150px;"
                                    data-anchor-target=".slider-video"></div>
                                    
                                     <div class="po-column top-logo-outer" data-delay="2200" data-animation="move-down-short">
                                        <div class="top-logo-container">
                                            <a href="<?php echo esc_url(get_home_url()); ?>">
                                                <?php if ( 'black-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>
                                                
                                                    <?php if ( '' == get_theme_mod( 'logo_upload_dark') && '' != get_theme_mod( 'logo_upload' )) { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                                                    <?php } else if ( '' == get_theme_mod( 'logo_upload_dark' ) && '' == get_theme_mod( 'logo_upload' )) { ?>
                                                    
                                                    <?php } else { ?>
                                                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload_dark')); ?>" alt="logo" >
                                                    <?php } ?>
                                                    
                                                <?php } else if ( 'light-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>
                                                
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
                                 	
                                    <div class="background-greyscale"></div>
                                    <?php if ( 'show' == $format_mb->get_the_value( 'show_overlay' ) ) { ?>	
                                    	<div class="background-greyscale-2"></div>
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    <!--[if !IE 8]><!-->
                                    <div class="home-slider-image" style="background:url(<?php echo esc_url($url); ?>) #000; background-size:cover; background-position:center;"
                                    data-center="background-position: 50% -50px;"
                                    data-bottom-top="background-position: 50% 150px;"
                                    data-top-bottom="background-position: 50% -150px;"
                                    data-anchor-target=".slider-slides"></div>
                                    <!--<![endif]-->
                                    <!--[if IE 8]><img class="fullbackground" src="<?php echo esc_url($url); ?>" /><![endif]-->
                                    <div class="po-slider-bottom-button po-column" data-delay="2700" data-animation="move-up-short">
                                            <i class="fa fa-angle-down site-show"></i>
                                        </div>
                                    <div class="slider-image-inner-outer">
                                    <div class="slider-image-inner">
                                        
                                        
                                        	<div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short"> 
                                                <div class="slider-subtitle text-center"><p class="slider-subtitle blog-terms"><?php
												$categories = get_the_category();
												$separator = ' / ';
												$output = '';
												if($categories){
													foreach($categories as $category) {
														$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'pixelobject' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
													}
												echo trim($output, $separator);
												}
												?></p></div> 
                                                <h1 class="text-center"><?php the_title(); ?></h1> 
                                                <div class="text-center slider-date">By <?php esc_html(the_author()); ?> on <?php esc_html(the_date('F j, Y', '', '')); ?></div>
                                                <?php if ( has_post_format( array( 'audio' ) ) ){ ?>
                                                		<div class="ddeded" style="width:40%; height:50px; margin:35px auto 0;">
															<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                                                            		<div class="soundcloud-grid">
                                                                    	<?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                                                                    </div>
                                                            <?php } else { ?>
                                                                <?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
                                                            <?php } ?>
                                                        </div>
                                                    
                                                <?php } ?>
                                                <?php if ( has_post_format( array( 'video' ) ) ){ ?>
                                                	<div class="video-buttons">
                                                        
                                                        <div class="hidden-xs video-click button slider video"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-play"></i></span><div class="clearfix"></div></div>
                                                        
                                                        <div data-toggle="modal" data-target="#myModal<?php the_ID(); ?>" class="visible-xs-block video-modal button slider video"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-play"></i></span><div class="clearfix"></div></div>
                                                        
                                                        
                                                        
                                                        <a href="<?php the_permalink(); ?>" > 
                                                        <div class="go-to-click button slider video"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                                                        </a>
                                                        <div class="clearfix"></div>
                                                    </div>
												<?php } else { ?>
                                                    <a href="<?php the_permalink(); ?>" > 
                                                    <div class="go-to-click button slider"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                    </div>
                                    </div>
                                </li>	
                            <?php endwhile; ?>
                        </ul>
                        </div>
                        
                        <?php while ( have_posts() ) : the_post(); ?>
                    	<div id="skrollr-body" class="top-page-anchor">
                    
							                              
                        <div class="po-page po-blog">
                        
            <?php if ( !is_front_page() ) : ?>
            <?php 
			if ( 'hide' == $page_mb->get_the_value( 'cb_single' ) ) {
			?>	
			<?php 
            } else { ?>
			<div class="entry-header po-page-header">
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-6">
                    <h3 class="entry-title"><?php the_title(); ?></h3>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                    <div class="text-right" style="margin-top:17px;"><?php if (function_exists('po_breadcrumbs')) po_breadcrumbs(); ?></div>
                    </div>
                    </div>
                </div>
            </div><!-- .entry-header -->
            <?php 
			}
            ?>
            <?php endif; ?>
            
          

            
        
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
                                
                                
                                <div class="po-page-portfolio-filter2">
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: center; padding:0 30px;">
                                                <?php   
                                                    // Setup the arguments to pass in
                                                    $args = array(
                                                            'order'        => 'ASC',
                                                            'orderby'      => 'menu_order'
                                                    );
                                                    
                                                    $terms = get_terms("category", $args );
                                                    $count = count($terms);
                                                    if ( $count > 0 ){
                                                    echo "<div id='filters' class='button-group btn-group' data-toggle='buttons'><span class='btn btn-default filter-button active' style='margin-left: -1px;' data-filter-value='*'><input type='radio' name='options'>All</span>";
                                                        foreach ( $terms as $term ) {
                                                            echo "<span class='btn btn-default filter-button' data-filter-value='." . esc_html($term->slug) . "'><input type='radio' name='options'>" . esc_html($term->name) . " </span>";
                                                         }
                                                    echo "</div>";
                                                    } ?>
                                                 
                                             </div>
                                         </div>
                                    </div>
                                
                                	<div id="container" class="masonary">
                                
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
									$terms = get_the_term_list( $post->ID, 'category', '', ' <span class="cat-sep"></span> ', '' );
				
				$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
				$termsString = ""; //initialize the string that will contain the terms
					foreach ( $termsArray as $term ) { // for each term 
						$termsString .= $term->slug.' '; //create a string that has all the slugs 
					}
                                    ?>
                                        <div class="filter-item item <?php echo $termsString; ?> <?php if ( 'minimal' == $page_mb->get_the_value( 'post_style' ) ) { ?>blog-item<?php } else { ?>blog-item-standard<?php } ?>" style="padding:0 15px;">
                                        <?php
                                            get_template_part( 'content', get_post_format() );
                                        ?>
                                        </div>
                                        
                                
                                    <?php endwhile; ?>
                                    
                                    </div>
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
                                    </div>
                                    
                                    
                                  
                                <div class="clearfix"></div>
            				</div><!-- .entry-content -->
                            
                             
                </div>
                </div>
                
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
            <?php endwhile; // end of the loop. ?>
            <?php get_footer(); ?>