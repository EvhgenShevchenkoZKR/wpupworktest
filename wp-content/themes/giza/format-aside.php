<?php
/**
 * The template for a aside post.
 */
 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
global $page_mb;
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
                    	<figure class="effect-chico standard aside minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard aside minimal-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                         
                         
                         <!--[if !IE 8]><!-->
                         	<figcaption class="minimal-height standard-masonary" style="overflow:hidden;">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie minimal-height standard-masonary" style="overflow:hidden;">
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
                           
                            <div class="blog-excerpt aside"><?php the_excerpt(); ?></div>
                            
                            
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
	<div class="no-padding grid blog-item-cont" href="<?php the_permalink(); ?>">
                    
                    <!--[if !IE 8]><!-->
                    	<figure class="effect-chico standard aside standard-aside-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <!--<![endif]-->
                    <!--[if IE 8]>
                    	<div class="figure-ie effect-chico standard aside standard-height" style="background:#fff; border:1px solid #e5e5e5;">
                    <![endif]-->
                         
                         
                         <!--[if !IE 8]><!-->
                         	<figcaption class="standard-aside-height2 standard-masonary" style="overflow:hidden;">
                         <!--<![endif]-->
                        <!--[if IE 8]>
                            <div class="figcaption-ie" class="standard-aside-height standard-masonary" style="overflow:hidden;">
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
                            <div class="blog-excerpt aside"><?php the_excerpt(); ?></div>
                            
                           
                            
                            
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