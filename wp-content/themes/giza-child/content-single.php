<?php
/**
 * Single page content.
 */
 global $post, $format_mb;
?>


<!--[if !IE 8]><!-->
<article id="post-<?php the_ID(); ?>" <?php post_class('po-article'); ?>>
<!--<![endif]-->
<!--[if IE 8]>
    <div id="post-<?php the_ID(); ?>" <?php post_class('po-article'); ?>>
<![endif]-->
	
		
    

	<div class="entry-content blog-content actual-content">
    	<?php if ( has_post_format( array( 'quote' ) ) ){ ?>
        	<?php if ( '' != $format_mb->get_the_value('quote') ) { ?>
            <blockquote style="padding-top:0;"><p><?php echo $format_mb->get_the_value('quote'); ?></p>
            <cite><?php echo $format_mb->get_the_value('quote_attribution'); ?></cite>
            </blockquote>
            <?php } ?>
        <?php } ?>
        
        <?php if ( has_post_format( array( 'gallery' ) ) ){ ?>
        
        	<?php if ( '' != $format_mb->get_the_value('gallery') ) { ?>
            <div class="gallery-bg-standard-cont" style="height:500px; margin-bottom:70px;">
                
                    <ul class="gallery-bg-standard" style="width:100%; height:500px;">
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
                        <a class="view" href="<?php echo $url ?>"><div style="background:url(<?php echo $url ?>); background-size:cover; background-position:center; width:100%; height:500px;"></div></a>
                    </li>
                    <?php endwhile; 
					# set the global back to your first loop post
					$post = $preserve_post;
					setup_postdata( $post ); ?>
                </ul>
                
                
            </div>	
            
            <?php } ?>
        <?php } ?>
        
        
    	<h1 class="post-title"><?php the_title(); ?></h1>
        
		
        
		<?php the_content(); ?>
        <?php wp_link_pages(); ?>
	</div><!-- .entry-content -->
    	
        
        
    	<footer class="entry-meta" style="margin:0px 0 0; padding:30px 0 50px;">
        
        
        	<div style="border-top:1px solid #ddd; margin:0 auto; width:10%; margin-bottom:45px;"></div>
        	
            	<div class="blog-author-avatar single-avatar-bottom">
    				<?php echo get_avatar( get_the_author_meta( 'ID' ), 180 ); ?>
                </div>
                
         	
         <div class="text-center blog-post-details" style="margin-top:20px;">Written by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a> on <?php the_time('F j, Y', '', ''); ?> in
                        
                        <?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",'pixelobject' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?><br /><?php echo get_the_tag_list('<p class="post-meta-single-tags">Tagged: ',', ','</p>'); ?></div>
    	<div class="clearfix"></div>
       
	</footer><!-- .entry-meta -->

    <div class="entry-content blog-content single">
    <?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template();
	?>
    </div>
    

<!--[if !IE 8]><!-->
</article><!-- #post-## -->
<!--<![endif]-->
<!--[if IE 8]>
</div>
<![endif]-->  
