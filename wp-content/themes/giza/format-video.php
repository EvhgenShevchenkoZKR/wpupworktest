<?php
/**
 * The template for a video post.
 */
 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
global $page_mb, $format_mb;
?>

<?php if ( 'minimal' == $page_mb->get_the_value( 'post_style' ) ) { ?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->
	
                            
                             <?php if ( '' == $format_mb->get_the_value('video_embed') ) { ?>
                        
                          <div class="no-padding grid blog-item-cont" href="<?php the_permalink(); ?>">
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico minimal white-btn minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico minimal white-btn minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                            
						<div class="port-img minimal-height-bg" data-bg="<?php echo esc_url($url); ?>" style="width:100%;	
                            background-size:cover; background-position:center;"></div>	
                         <!--[if !IE 8]><!-->
                         	<figcaption class="standard-masonary">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie standard-masonary">
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
                  <div class="blog-share-cont fix">
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
                         
                         <div class="video-cont-format minimal-height" style="border:1px solid #e5e5e5;">
	<div class="blog-video-thumb" data-bg="<?php echo esc_url($url); ?>" style="width:100%; height:200px;
                            background-size:cover; background-position:center; padding:0; border: none; outline:none;">
                            	
                                	<div data-toggle="modal" data-target="#myModal<?php the_ID(); ?>" class="blog-read-standard video"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-play"></i></span><div class="clearfix"></div></div>
                                    
                                    <div class="blog-top-image" style="position:relative;"></div>
                                
                            	
                            </div>
    
	<div class="no-padding grid blog-item-cont">
    
    
    
    
    
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard sc video-height" style="overflow:hidden;">
                        
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard sc video-height" style="overflow:hidden;">
                    <![endif]-->
                         
                         
                            
                            <!--[if !IE 8]><!-->
                         	<figcaption class="standard standard-masonary">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie standard standard-masonary">
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
						
                         

<?php } else { ?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->
	
                            
                            <?php if ( '' == $format_mb->get_the_value('video_embed') ) { ?>
                            
                            <div class="video-cont-format standard-height-video" style="border:1px solid #e5e5e5;">
    
    					
	<div class="no-padding grid blog-item-cont" href="<?php the_permalink(); ?>">
    
    
    
    
    
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard video-standard video-height" style="overflow:hidden;">
                        
                        
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard video-standard video-height" style="height:338px; overflow:hidden;">
                    <![endif]-->
                        
                          <a href="<?php the_permalink(); ?>">
							<div class="" style="width:100%; height:200px; background:
								url(<?php echo esc_url($url); ?>);
                            background-size:cover; background-position:center;">
                            
										<div class="blog-read-standard"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                                    
                                	
                                    
                                    <div class="blog-top-image"></div>
                                
                            	
                            </div>	
                            </a>
                            
                            <!--[if !IE 8]><!-->
                         	<figcaption class="standard standard-masonary">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie standard standard-masonary">
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
                            <p class="blog-date ie">By <?php the_author(); ?> on <?php the_time('F j, Y', '', ''); ?></p>
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
    
		
						 <?php } else { ?>
                         
                         
                          <div class="video-cont-format standard-height-video" style="border:1px solid #e5e5e5;">
    
    					<div class="blog-video-thumb" data-bg="<?php echo esc_url($url); ?>" style="width:100%; height:200px;
                            background-size:cover; background-position:center; padding:0; border: none; outline:none;">
                            	
                                	<div data-toggle="modal" data-target="#myModal<?php the_ID(); ?>" class="blog-read-standard video"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-play"></i></span><div class="clearfix"></div></div>
                                    
                                    <div class="blog-top-image" style="position:relative;"></div>
                                
                            	
                            </div>
	<div class="no-padding grid blog-item-cont" href="<?php the_permalink(); ?>">
    
    
    
    
    
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard video-standard video-height" style="overflow:hidden;">
                        
                        
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard video-standard video-height" style="height:338px; overflow:hidden;">
                    <![endif]-->
                          <!--[if !IE 8]><!-->
                         	<figcaption class="standard standard-masonary">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie standard standard-masonary">
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
                            <p class="blog-date ie">By <?php the_author(); ?> on <?php the_time('F j, Y', '', ''); ?></p>
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
						
                         


<?php } ?>