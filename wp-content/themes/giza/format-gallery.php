<?php
/**
 * The template for a gallery post.
 */
 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
$galleryterms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
global $page_mb, $format_mb;
?>

<?php if ( 'minimal' == $page_mb->get_the_value( 'post_style' )) { ?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->
	<div class="no-padding grid blog-item-cont">
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico minimal white-btn minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico minimal white-btn minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                            
                       <?php if ( '' == $format_mb->get_the_value('gallery') ) { ?>
                          
                          <div class="port-img minimal-height-bg" data-bg="<?php echo esc_url($url); ?>" style="width:100%;	
                            background-size:cover; background-position:center;"></div>	
                            
                            <?php } else { ?>     
                            
                            
						<div class="port-img minimal-height-bg" style="width:100%;">
                            	
                                <ul class="gallery-bg minimal-height-bg" style="width:100%;">
                                    	<?php
										$gallerycat = $format_mb->get_the_value('gallery');
										# preserve the current post in the higher loop
   										$preserve_post = get_post();
										$args = array( 'post_type' => 'gallery', 'posts_per_page' => 3, 'gallery_categories' => $gallerycat );
										$galleryformat = new WP_Query( $args );
										while ( $galleryformat->have_posts() ) : $galleryformat->the_post(); 
										global $post, $format_mb;
										$format_mb->the_meta();
										$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
									?>
                                	<li>
                                    	<div data-bg="<?php echo esc_url($url); ?>" style="background-size:cover; background-position:center; width:100%; height:495px;"></div>
                                    </li>
                                    <?php endwhile; 
									# set the global back to your first loop post
									$post = $preserve_post;
									setup_postdata( $post ); ?>
                                </ul>
                            </div>	
                            <?php } ?> 
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


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article portfolio-item-effect-4'); ?>>
<![endif]-->
	
    
    
	<div class="no-padding grid">
    
    						

    
    
    
                    
                    
                            
                            
                          <?php if ( '' == $format_mb->get_the_value('gallery') ) { ?>
                          
                          <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard gf gallery-height" style="background:#fff; border:1px solid #e5e5e5;">
                        
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard gf gallery-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                          <div class="blog-item-cont-gallery">
                          <a href="<?php the_permalink(); ?>">
							<div class="" style="width:100%; height:200px; background:
								url(<?php echo esc_url($url); ?>);
                            background-size:cover; background-position:center;">
                            
										<div class="blog-read-standard"><span style="float:left;">Read more</span> <span style="float:right;"><i  style="margin-left:20px;" class="fa fa-chevron-right"></i></span><div class="clearfix"></div></div>
                                    
                                	
                                    
                                    <div class="blog-top-image"></div>
                                
                            	
                            </div>	
                            </a>
                            </div>
                            <?php } else { ?>
                            
                             <div class="gallery-bg-standard-cont" style="width:100%; height:200px; background:
								url(<?php echo esc_url($url); ?>);
                            background-size:cover; background-position:center;">
                            	
                                	<ul class="gallery-bg-standard" style="width:100%; height:200px;">
                                    	<?php
										$gallerycat = $format_mb->get_the_value('gallery');
										# preserve the current post in the higher loop
   										$preserve_post = get_post();
										$args = array( 'post_type' => 'gallery', 'posts_per_page' => 3, 'gallery_categories' => $gallerycat );
										$galleryformat = new WP_Query( $args );
										while ( $galleryformat->have_posts() ) : $galleryformat->the_post(); 
										global $post, $format_mb;
										$format_mb->the_meta();
										$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
									?>
                                	<li>
                                    	<div data-bg="<?php echo esc_url($url); ?>" style="background-size:cover; background-position:center; width:100%; height:200px;"></div>
                                    </li>
                                    <?php endwhile; 
									# set the global back to your first loop post
									$post = $preserve_post;
									setup_postdata( $post ); ?>
                                </ul>
                               
                            	
                            </div>	
                            
                            <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard gf gallery-height" style="background:#fff; border:1px solid #e5e5e5;">
                        
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard gf gallery-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                            
                            <?php } ?>  
						
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