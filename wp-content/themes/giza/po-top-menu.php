<?php
/**
 * Template for displaying the top menu.
 */
global $portfolio_mb;
$portfolio_mb->the_meta();

?>

<?php if (get_theme_mod( 'menu_position','right') == 'right') { ?>


<div class="po-column black-content part-top" data-delay="2200" data-animation="move-down-short">
	<div class="menu-bars st-trigger-effects" style="float:right;">
        <div class="menu-close"></div>
        <button type="button" class="navbar-toggle button-menu" data-effect="st-effect-4">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         
        </button>
    </div>
    <div class="visible-lg-block visible-md-block top-page" style="float:right;">
        <?php wp_nav_menu( array('theme_location' => 'top-menu', 'fallback_cb' => '')); ?>
    </div>
</div>   

<?php } else { ?>

<div class="po-column black-content part-top" data-delay="2200" data-animation="move-down-short">
	<div class="menu-bars st-trigger-effects" style="float:left;">
        <div class="menu-close"></div>
        <button type="button" class="navbar-toggle button-menu" data-effect="st-effect-4">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         
        </button>
    </div>
    <div class="visible-lg-block visible-md-block top-page" style="float:left;">
        <?php wp_nav_menu( array('theme_location' => 'top-menu', 'fallback_cb' => '')); ?>
    </div>
</div>  

<?php } ?>