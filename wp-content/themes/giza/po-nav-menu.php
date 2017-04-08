<nav class="st-menu <?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>right<?php } else { ?>left<?php } ?> st-effect-4 scroll-pane" id="menu-4" style="background:url(<?php echo esc_html(get_theme_mod( 'menu_background_image')); ?>) no-repeat; background-size:cover; -webkit-box-shadow: inset 0px 0px 1000px 500px rgba(0,0,0,0.85); -moz-box-shadow: inset 0px 0px 1000px 500px rgba(0,0,0,0.85); box-shadow: inset 0px 0px 1000px 500px rgba(0,0,0,0.85);">
            
            <!--[if IE 8]><div class="menu-greyscale"></div><![endif]-->
            <div class="st-menu-inner" style="position:relative; z-index:2;">
            	
            	<?php if ( '' == get_theme_mod( 'logo_upload') ) { ?>	
                <?php } 
				else { ?>
                    <a href="<?php echo esc_url(get_home_url()); ?>">
                    <img class="logo-menu logo"  src="<?php echo get_theme_mod( 'logo_upload'); ?>" alt="logo" >
                    </a>
                <?php } ?>
                
                <form role="search" method="get" class="search-sidebar side" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <i class="fa fa-search search-icon-form-sidebar side"></i>
                    <input type="search" class="search-field-sidebar side" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" >	
                </form>
                <div class="menu-nav-inner">
                	<div class="hidden-lg hidden-md">
                		<?php wp_nav_menu( array('theme_location' => 'top-menu', 'fallback_cb' => '' )); ?>
                    </div>
                    <?php wp_nav_menu( array('theme_location' => 'side-menu', 'fallback_cb' => '' )); ?>
                    <div class="sidenav-text"><?php echo esc_html(get_theme_mod( 'menu_about_text')); ?></div>
                    <div class="social-links-center">
                        <?php echo do_shortcode("[social]"); ?>
                    </div>
                </div>
            </div>
        </nav>