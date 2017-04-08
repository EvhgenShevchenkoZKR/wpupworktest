<?php
/**
 * Template for displaying the page footer.
 */
global $footer_mb;
$footer_mb->the_meta();

?>

                                
                                <?php
                            if ( 'hide' == $footer_mb->get_the_value( 'footer_top_hide' ) ) { 
                            } else {
                            ?>
                                <div class="footer-container container-md-height">
                                            <div class="row po-full-width footer-inner-container row-md-height">
                                                <?php
                                            
                                                $args = array( 'post_type' => 'footer_column', 'footer_column_categories' => '', 'posts_per_page' => '', 'order' => '', 'orderby' => '' );
                                                $loop = new WP_Query( $args );
                                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                                global $post;
                                                global $footer_column_mb;
                                                $footer_column_mb->the_meta();
                                                
                                                ?>
                                                <div class="po-column col-md-height col-top footer-sections <?php if ( '5' == get_theme_mod( 'footer_columns','3') ) {  ?>footer-sections-5<?php } else if ( '1' == get_theme_mod( 'footer_columns','3') ) { ?>footer-sections-1<?php } else { ?>footer-sections-3<?php } ?> <?php if ( 'show' == $footer_column_mb->get_the_value( 'last_column' ) ) {  ?>end-footer-column<?php } ?>" data-delay="0" data-animation="fade-in">
                                                    <h6 class="standard-header-small text-center" style="margin-bottom:40px; font-size:11px; letter-spacing:1px;"><?php the_title() ?></h6>
                                                    <div class="text-center"><?php the_content(); ?></div>
                                                </div>
                                                <?php if ( 'show' == $footer_column_mb->get_the_value( 'last_column' ) ) {  ?>
                                                <div class="clearfix"></div>	
                                                <?php } ?>
                                                <?php endwhile; ?>
                                            </div>
                                </div>
                                <?php } ?>
                                <?php
                                if ( 'hide' == $footer_mb->get_the_value( 'footer_bottom_hide' ) ) { 
                                } else {
                                ?>
                                <div class="footer-container-bottom" style="border-top:1px solid #ddd;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="po-column col-sm-5" data-delay="0" data-animation="fade-in">
                                            	<?php get_template_part( 'po-copyright'); ?>
                                            </div>
                                            <div class="po-column col-sm-7" data-delay="0" data-animation="fade-in">
                                            	<div class="go-top">Top <i class="fa fa-chevron-up"></i></div>
                                            	<?php echo do_shortcode('[social]'); ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>  
                              </div> 
                            </div>