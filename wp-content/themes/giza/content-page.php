<?php
/**
 * The template used for displaying page content in page.php.
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( !is_front_page() ) : ?>
            <?php 
			global $page_mb;
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

            
        
            	
                <div class="container po-container-section">
                
                    <div class="row">
                    	
                        <div class="po-column col-sm-9" data-delay="400" data-animation="fade-in">
                            <div class="entry-content po-content blog-content">
                                <?php the_content(); ?>
                                <div class="clearfix"></div>
                            </div><!-- .entry-content --> 
                            <div class="page-comments po-blog">
                            	<div class="entry-content blog-content">
                                <?php // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="po-column col-sm-3 po-blog" data-delay="400" data-animation="fade-in" style="padding-top:30px;">
                            <?php get_sidebar(); ?>
                        </div>	
                      
                        
                    </div>
                </div>
        </article><!-- #post-## -->
 