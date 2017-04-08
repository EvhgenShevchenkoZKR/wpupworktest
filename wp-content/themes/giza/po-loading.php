<?php
/**
 * Template for displaying the page loading.
 */
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
			while ( $loop->have_posts() ) : $loop->the_post(); 
			global $post;
			$terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
		?>
        <li style="width:100px; height:100px;">
        	<div class="loading-img" alt="logo" style="background: url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center;"></div>
        </li>
        <?php endwhile; ?>
    </ul>	
   
</div>

<?php } ?>