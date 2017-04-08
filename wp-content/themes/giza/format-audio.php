<?php
/**
 * The template for a audio post.
 */
 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
global $page_mb, $format_mb;
?>

<?php if ( 'minimal' == $page_mb->get_the_value( 'post_style' )) { ?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->

	
	
	<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
    <?php } else { ?>
    	
		<?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
    
    <?php } ?>
	
	<div class="no-padding grid blog-item-cont">
    
    
    
    
    
                    
                    
                    <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<div class="soundcloud-thumb">
                    	<?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                        </div>
                    <?php } ?>
                    
                    
                    	
                    
                    
                    
                    <!--[if !IE 8]><!-->
                    	<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<figure class="effect-chico sc minimal white-btn audio-height-sc-minimal" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } else { ?>
                        <figure class="effect-chico sc minimal white-btn audio-height-minimal" style="margin-top:2px; border:1px solid #e5e5e5; background:#fff;">
                        <?php } ?>
                       
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<div class="figure-ie effect-chico sc minimal white-btn audio-height-sc-minimal" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } else { ?>
                        <div class="figure-ie effect-chico sc minimal white-btn audio-height-minimal" style="margin-top:2px; border:1px solid #e5e5e5; background:#fff;">
                        <?php } ?>
                    <![endif]-->
                        
                        <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>    
						<div class="port-img minimal-height-bg-sc" data-bg="<?php echo esc_url($url); ?>" style="width:100%;
                            background-size:cover; background-position:center;"></div>
                          <?php } else { ?>
                        <div class="port-img minimal-height-bg-audio" data-bg="<?php echo esc_url($url); ?>" style="width:100%;
                            background-size:cover; background-position:center;"></div>
                        <?php } ?>  
                            
                            
                         <!--[if !IE 8]><!-->
                         	<figcaption class="sc standard-masonary">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie sc standard-masonary">
                        <![endif]-->
                        	<p class="slider-subtitle blog-terms"><?php
							$categories = get_the_category();
							$separator = ' / ';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'pixelobject' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
								}
							echo trim($output, $separator);
							}
							?></p> 
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="blog-date">By <?php the_author(); ?> on <?php the_time('F j, Y', '', ''); ?></p>
                            <div class="blog-excerpt"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>">
                            <div class="blog-read"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                            <div class="clearfix"></div>
                            </a>
                            
                            
                         <!--[if !IE 8]><!-->  
                         </figcaption>
                          <!--<![endif]-->
                        <!--[if IE 8]>
                            </div>
                        <![endif]-->
                    <!--[if !IE 8]><!-->
                    
                    	</figure>
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	</div>
                    <![endif]-->
                    
                   
                 </div>
                  <div class="blog-share-cont fix audio">
                    	<a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="blog-share-btn twit"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;" class="blog-share-btn fb"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="blog-share-btn goog"><i class="fa fa-google-plus"></i></a>
                        <a href="<?php comments_link(); ?> " class="blog-share-btn comment"><i class="fa fa-comment-o"></i></a>
                        <div class="clear-float"></div>
                    </div>
    
    
<!--[if !IE 8]><!-->
    </article><!-- #post-## -->
<!--<![endif]-->
<!--[if IE 8]>
    </div>
<![endif]-->   

<?php } else { ?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->

<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>

		
    
    <?php } else { ?>
        <?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
      
    
    <?php } ?>
    
    

	
	<div class="no-padding grid blog-item-cont" href="<?php the_permalink(); ?>">
    
    
    
    
    
                    
                    
                    
                    <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<div class="soundcloud-thumb">
                    		<?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                        </div>
                    <?php } ?>
                    
                    <!--[if !IE 8]><!-->
                    	<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<figure class="effect-chico standard sc audio-height-sc" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } else { ?>
                        <figure class="effect-chico standard sc audio-height" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } ?>
                    <!--<![endif]-->
                    
                    <!--[if IE 8]>
                    	<?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	<div class="figure-ie effect-chico standard sc audio-height-sc" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } else { ?>
                        <div class="figure-ie effect-chico standard sc audio-height" style="background:#fff; border:1px solid #e5e5e5; margin-top:2px;">
                        <?php } ?>
                    <![endif]-->
                    
                    
                     <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                        <?php } else { ?>
                        
                         <div class="" data-bg="<?php echo esc_url($url); ?>" style="width:100%; height:171px;
                            background-size:cover; background-position:center;">
                            		<a href="<?php the_permalink(); ?>">
                                	<div class="blog-read-standard" style="margin-top:65px;"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                                    </a>
                                    
                                    <div class="blog-top-image" style="height:171px;"></div>
                                
                            	
                            </div>	
                            <?php } ?>
                            
                            <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                    	
                        <!--[if !IE 8]><!-->
                         	<figcaption class="standard standard-masonary">
                        <!--<![endif]-->
                        
                        <!--[if IE 8]>
                            <div class="figcaption-ie standard standard-masonary">
                        <![endif]-->
                            
                            
                            <?php } else {?>
                            
                             
                             <!--[if !IE 8]><!-->
                                <figcaption class="standard standard-masonary" style="padding-top:201px;">
                             <!--<![endif]-->
                             
                             <!--[if IE 8]>
                                <div class="figcaption-ie standard standard-masonary" style="padding-top:201px;">
                             <![endif]-->
						
                        
                         
                        
                        <?php } ?>
                        	<p class="slider-subtitle blog-terms"><?php
							$categories = get_the_category();
							$separator = ' / ';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'pixelobject' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
								}
							echo trim($output, $separator);
							}
							?></p> 
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="blog-date">By <?php the_author(); ?> on <?php the_time('F j, Y', '', ''); ?></p>
                            <div class="blog-excerpt"><?php the_excerpt(); ?></div>
                            
                            
                         <!--[if !IE 8]><!-->  
                         </figcaption>
                          <!--<![endif]-->
                          
                        <!--[if IE 8]>
                            </div>
                        <![endif]-->
                        
                   
                    
                    <!--[if !IE 8]><!-->
                        </figure>
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	</div>
                    <![endif]-->
                   
                 </div>
                  <div class="blog-share-cont">
                    	<a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="blog-share-btn twit"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;" class="blog-share-btn fb"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
				      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="blog-share-btn goog"><i class="fa fa-google-plus"></i></a>
                        <a href="<?php comments_link(); ?> " class="blog-share-btn comment"><i class="fa fa-comment-o"></i></a>
                        <div class="clear-float"></div>
                    </div>
    
    
<!--[if !IE 8]><!-->
    </article><!-- #post-## -->
<!--<![endif]-->
<!--[if IE 8]>
    </div>
<![endif]-->    


<?php } ?>