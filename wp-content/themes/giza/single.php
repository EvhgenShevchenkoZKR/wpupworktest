<?php
/**
 * The template for displaying single posts.
 */

get_header();
global $footer_mb;
$footer_mb->the_meta();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
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
      <li style="width:100px; height:100px;">
        <div class="loading-img" alt="logo" style="background:url(<?php echo esc_url($url); ?>); background-size:cover; background-position:center;"></div>
      </li>
    </ul>
  </div>

<?php } ?>

<?php
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



<div class="site-container">
  <div id="st-container" class="st-container">

    <?php get_template_part( 'po-nav-menu', 'page' ); ?>

    <!-- content push wrapper -->
    <!--[if !IE]><!-->
    <div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?>">
      <!--<![endif]-->
      <!--[if IE]><div class="st-pusher <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?> st-pusher-ie"><![endif]-->
      <div class="st-content"><!-- this is the wrapper for the content -->
        <div class="st-content-inner entry-content po-blog"><!-- extra div for emulating position:fixed of the menu -->



          <div class="bottom-nav-short" style="border-top:1px solid #ddd;">
            <div class="port-bottom-name st-trigger-effects hidden-xs">
              <h2 class="title-bottom" style="z-index:999999999999;"><?php the_title(); ?></h2>
            </div>
            <div class=" ">


              <div class="share-links-standard hidden-xs">
                <ul>
                  <li><a href="mailto:?subject=<?php the_title(); ?>&body=<?php echo strip_tags(get_the_excerpt()); ?><?php the_permalink(); ?>"><span class="index mail"><i class="fa fa-envelope-o"></i></span></a></li>

                  <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="index goog"><i class="fa fa-google-plus"></i></span></a></li>
                  <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;"><span class="index twit"><i class="fa fa-twitter"></i></span></a></li>
                  <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><span class="index fb"><i class="fa fa-facebook"></i></span></a></li>
                  <li class="love">
                    <div class="index love-it">
                      <?php if (function_exists( 'lip_love_it_link' )) {
                        echo lip_love_it_link(get_the_ID(), '<i class="fa fa-heart"></i>', '<i class="fa fa-heart"></i>', false);
                      } ?>
                    </div>
                  </li>
                </ul>

              </div>

              <div class="share-links-standard visible-xs-block">
                <ul>
                  <li class="love">
                    <div class="index love-it">
                      <?php if (function_exists( 'lip_love_it_link' )) {
                        echo lip_love_it_link(get_the_ID(), '<i class="fa fa-heart"></i>', '<i class="fa fa-heart"></i>', false);
                      } ?>
                    </div>
                  </li>
                  <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><span class="index fb"><i class="fa fa-facebook"></i></span></a></li>
                  <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;"><span class="index twit"><i class="fa fa-twitter"></i></span></a></li>
                  <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onClick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="index goog"><i class="fa fa-google-plus"></i></span></a></li>
                  <li><a href="mailto:?subject=<?php the_title(); ?>&body=<?php echo strip_tags(get_the_excerpt()); ?><?php the_permalink(); ?>"><span class="index mail"><i class="fa fa-envelope-o"></i></span></a></li>

                </ul>

              </div>

            </div>
          </div>



          <?php $terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' ); ?>
          <div class="video-shade"></div>
          <div class="row po-full-width">
            <div class="portfolio-page col-sm-12 column-12 <?php if ( 'black-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>black-content<?php } else if ( 'white-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>white-content<?php } else { ?>light-content<?php } ?>" data-embed='<?php echo $format_mb->get_the_value('video_embed'); ?>'>

              <div class="hidden-xs hidden-sm po-port-nav" style="width:100%; position:absolute; z-index:1; height:700px;">
                <?php next_post_link( '%link', '<div class="arrow-next"></div><div class="titlea-cont"><div class="titlea"><h2>%title</h2></div></div>' ); ?>
                <div class="banner2"></div>
                <?php next_post_link( '<div class="next-b"></div>' ); ?>


                <?php previous_post_link( '%link', '<div class="arrow"></div><div class="titleb-cont"><div class="titleb"><h2>%title</h2></div></div>' ); ?>
                <div class="banner"></div>
                <?php previous_post_link( '<div class="prev-b"></div>' ); ?>
              </div>

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
                        <img class="logo"  src="<?php echo get_theme_mod( 'logo_upload_dark'); ?>" alt="logo" >
                      <?php } ?>

                    <?php } else if ( 'light-content' == $format_mb->get_the_value( 'slider_bg' ) ) { ?>

                      <?php if ( '' == get_theme_mod( 'logo_upload_light') && '' != get_theme_mod( 'logo_upload' )) { ?>
                        <img class="logo"  src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo" >
                      <?php } else if ( '' == get_theme_mod( 'logo_upload_light' ) && '' == get_theme_mod( 'logo_upload' )) { ?>

                      <?php } else { ?>
                        <img class="logo"  src="<?php echo get_theme_mod( 'logo_upload_light'); ?>" alt="logo" >
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
              <?php get_template_part( 'po-top-menu' ); ?>

              <div style="width:88%; left:6%; position:absolute; z-index:1;">
                <div class="slider-image-inner">
                  <div class="po-slider-bottom-button single po-column" data-delay="2700" data-animation="move-up-short">
                    <i class="fa fa-angle-down site-show"></i>
                  </div>

                  <div class="po-column slider-caption" data-delay="1700" data-animation="move-up-short">

                    <div class="slider-subtitle text-center"><?php echo strip_tags($terms, '<span>'); ?></div>
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php if ( has_post_format( array( 'audio' ) ) ){ ?>

                      <?php if ( 'soundcloud' == $format_mb->get_the_value( 'audio_type' ) ) { ?>
                        <div class="soundcloud-banner-single">
                          <?php echo $format_mb->get_the_value('soundcloud_embed'); ?>
                        </div>
                      <?php } else { ?>
                        <div style="margin-top:30px;">
                          <?php echo do_shortcode('[audio mp3="'.esc_attr($format_mb->get_the_value('audio_upload')).'"][/audio]'); ?>
                        </div>
                      <?php } ?>

                    <?php } ?>
                    <?php if ( has_post_format( array( 'video' ) ) ){ ?>
                      <div style="width:margin:0 auto;">

                        <div class="hidden-xs video-click button slider single"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-play"></i></span><div class="clearfix"></div></div>

                        <div data-toggle="modal" data-target="#myModal<?php the_ID(); ?>" class="visible-xs-block video-modal button slider video"><span style="float:left;">Play video</span> <span style="float:right;"><i  style="margin-right:0;" class="fa fa-play"></i></span><div class="clearfix"></div></div>

                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <?php while ( have_posts() ) : the_post(); ?>
                <div class="po-column post-banner-details single" data-delay="2700" data-animation="move-up-short">
                  <table>
                    <tr>
                      <td>
                        <a class="fade-image-blog single-avatar" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></a>
                      </td>
                      <td style="padding-left:10px;">
                        <div class="post-author-details">
                          Written by <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html(the_author_meta( 'display_name' )); ?></a> on <?php esc_html(the_date('F j, Y', '', '')); ?>
                        </div>
                      </td>
                    </tr>
                  </table>

                </div>

              <?php endwhile; // end of the loop. ?>

              <?php

              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );

              ?>

              <!--[if !IE 8]><!-->
              <div class="home-slider-image" style="background:url(<?php echo esc_url($url); ?>) #111; background-size:cover; background-position:center; position:relative;"
                   data-center="background-position: 50% -50px;"
                   data-bottom-top="background-position: 50% 150px;"
                   data-top-bottom="background-position: 50% -150px;"
                   data-anchor-target=".portfolio-page"></div>
              <!--<![endif]-->
              <!--[if IE 8]><img style="width:100%;" src="<?php echo esc_url($url); ?>" /><![endif]-->

            </div>
          </div>
          <div class="top-page-anchor" style="background:#fff; padding-bottom:69px;">


            <?php if ( 'sidebar' == $format_mb->get_the_value( 'single_page_style' ) ) { ?>

              <div class="po-section section-background-white" style="padding:50px 0 100px; background-color:#fff;">
                <div class="container">
                  <div class="row">
                    <div class="po-column col-sm-9 sidebar" data-delay="1000" data-animation="move-up">
                      <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'single' ); ?>
                      <?php endwhile; // end of the loop. ?>
                    </div>

                    <div class="po-column col-sm-3" data-delay="1000" data-animation="move-up" style="padding-top:0px;">
                      <?php get_sidebar(); ?>
                    </div>
                  </div>
                </div>


              </div>

            <?php } else { ?>

              <div class="po-section section-background-white" style="padding:50px 0 100px; background-color:#fff;">

                <div class="po-column full" data-delay="1000" data-animation="move-up" style="padding:0;">



                  <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>
                  <?php endwhile; // end of the loop. ?>
                </div>
              </div>


            <?php } ?>

            <?php
            // get the custom post type's taxonomy terms

            $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
            // arguments
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 10, // you may edit this number
              'orderby' => 'rand',
              'tax_query' => array(
                array(
                  'taxonomy' => 'category',
                  'field' => 'id',
                  'terms' => $custom_taxterms
                )
              ),
              'post__not_in' => array ($post->ID),
            );
            $related_items = new WP_Query( $args );

            // loop over query
            if ($related_items->have_posts()) :
              echo '<div style="padding:25px 0; border-top:1px solid #ddd;">
                	<h2 class="text-center" style="text-transform:uppercase; color:#000; font-size:11px; letter-spacing:1px; font-weight:700; margin-top:8px;">'.esc_html(get_theme_mod( 'related_header','Related')).'</h2>
                </div><div class="po-column col-sm-12" data-delay="0" data-animation="fade-in" style="padding:0;" >
    <div class="po-carousel-blog-cont" style="height:200px;">
    	<ul class="po-carousel-blog grid cs-style-1">';
              while ( $related_items->have_posts() ) : $related_items->the_post();
                global $post;
                $portfolio_mb->the_meta();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
                $terms = get_the_term_list( $post->ID, 'category', '', ' / ', '' );
                ?>
                <li>

                  <a href="<?php the_permalink(); ?>" rel="<?php echo strip_tags($terms, '<span>'); ?>">
                    <div class="caro-cont">
                      <div class="caro-inner">
                        <div class="text-center caro-terms"><?php echo strip_tags($terms, '<span>'); ?></div>
                        <h3 class="text-center caro-title"><?php the_title(); ?></h3>
                        <div class="text-center caro-details">By <?php esc_html(the_author()); ?></div>
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
                <?php
              endwhile; ?>
              <?php echo '</ul>
   	</div>
    </div><div class="clear-float">';
            endif;
            // Reset Post Data
            wp_reset_postdata();
            ?>
            <?php get_template_part( 'po-pagefooter' ); ?>


          </div><!-- /st-content-inner -->
        </div><!-- /st-content -->
      </div><!-- /st-pusher -->
    </div><!-- /st-container -->
    <?php get_footer(); ?>
