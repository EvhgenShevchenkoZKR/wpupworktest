<?php
/**
 * The header.
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]> 
<html class="ie ie9" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo get_theme_mod( 'favicon_url' ); ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_url' ); ?>" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>


</head>

<?php if (get_theme_mod( 'no_cursor') == 'show') { ?>
<body <?php body_class('no-cursor'); ?> onUnload="">
<?php } else { ?>
<body <?php body_class(); ?> onUnload="">
<?php } ?>
<!--<?php po_color_options(); ?>-->

