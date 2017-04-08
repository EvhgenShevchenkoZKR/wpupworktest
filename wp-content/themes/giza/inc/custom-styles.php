<?php

/* CUSTOM STYLES
------------------------------------------------------- */  

function po_custom_styles() {
		wp_enqueue_style(
			'custom-style',
			get_template_directory_uri() . '/css/custom-style.css'
		);
		
		$nav_background = get_theme_mod( 'nav_background' );
		$search_form = get_theme_mod( 'search_form','#ffffff' );
		$search_shade_background = get_theme_mod( 'search_shade_background','#000000');
		$logo_width = get_theme_mod( 'logo_width' );
		$blog_logo_width = get_theme_mod( 'blog_logo_width' );
		$blog_image_overlay = get_theme_mod( 'blog_image_overlay' );
		$slider_overlay = get_theme_mod( 'slider_overlay','#000000' );
		$slider_title = get_theme_mod( 'slider_title' );
		$slider_button = get_theme_mod( 'slider_button' );
		$slider_button_text = get_theme_mod( 'slider_button_text' );
		$accent = get_theme_mod( 'accent','#20C596' );
		$secondary_accent = get_theme_mod( 'secondary_accent', '#ffffff' );
		$link_hover = get_theme_mod( 'link_hover', '#118C6A' );
		$social_icons = get_theme_mod( 'social_icons' );
		$header_font = get_theme_mod( 'header_font',"'Montserrat', sans-serif;" );
		$body_font = get_theme_mod( 'body_font', "'Libre Baskerville', serif;" );
		$form_borders = get_theme_mod( 'form_borders','#dddddd' );
		$footer_button_color = get_theme_mod( 'footer_button_color', '#222222' );
		$footer_background = get_theme_mod( 'footer_background', '#000000' );
		$footer_headers = get_theme_mod( 'footer_headers', '#000000' );
		$footer_text = get_theme_mod( 'footer_text', '#333333' );
		$footer_links = get_theme_mod( 'footer_links','#20C596' );
		$footer_links_hover = get_theme_mod( 'footer_links_hover', '#000000' );
		$portfolio_hover = get_theme_mod( 'portfolio_hover' );
		$footer_social = get_theme_mod( 'footer_social', '#999999' );
		$footer_twitter_username = get_theme_mod( 'footer_twitter_username','#000000' );
		$footer_twitter_username_hover = get_theme_mod( 'footer_twitter_username_hover','#20C596'  );
		$footer_bottom_background = get_theme_mod( 'footer_bottom_background','#ffffff' );
		$footer_bottom_text = get_theme_mod( 'footer_bottom_text','#999999' );
		$footer_bottom_links = get_theme_mod( 'footer_bottom_links','#999999' );
		$footer_bottom_links_hover = get_theme_mod( 'footer_bottom_links_hover', '#20C596' );
		$loader = get_theme_mod( 'loader', '#333333' );
		$loader_highlight = get_theme_mod( 'loader_highlight','#eeeeee' );
		$menu_font_size = get_theme_mod( 'menu_font_size','large' );
		$nav_logo_height = get_theme_mod( 'nav_logo_height','50' );
		$nav_logo_position = get_theme_mod( 'nav_logo_position','15' );
		$logo_height = get_theme_mod( 'logo_height','100' );
		$logo_height_mobile = get_theme_mod( 'logo_height_mobile','100' );
		$logo_position = get_theme_mod( 'logo_position','15' );
		$logo_position_mobile = get_theme_mod( 'logo_position_mobile','50' );
		$load_logo_position = get_theme_mod( 'load_logo_position','43' );
		$load_logo_height = get_theme_mod( 'load_logo_height','50' );
		
        $footer_css = "
			@media(max-width:767px){
				.logo{
					max-height:{$logo_height_mobile}px;
				}
			}
			
			@media(min-width:768px){
				.logo{
					max-height:{$logo_height}px;
				}
			}
			
			@media(max-width:767px){
				.top-logo-container
				{
					
					top:{$logo_position_mobile}px;
				}
			}
			
			@media(min-width:768px){
				.top-logo-container
				{
					top:{$logo_position}px;
				}
			}
			
			.ie8 .logo{
				max-height:{$logo_height}px;
			}
			
			.ie8 .top-logo-container
			{
				top:{$logo_position}px;
			}
			
			@media(max-width:767px){
			.left .top-logo-container-top
			{
				top:{$logo_position_mobile}px;
			}
			.right .top-logo-container-top
			{
				top:{$logo_position_mobile}px;
			}
		}
		
		@media(min-width:768px){
			.left .top-logo-container-top
			{
				top:{$logo_position}px;
			}
			
			.right .top-logo-container-top
			{
				top:{$logo_position}px;
			}
		}
		
		.loading-logo
		{
			margin-top:{$load_logo_position}px;
			max-width:{$load_logo_height}px; 
		}
			
			.logo-blog{
				max-width:{$blog_logo_width}px;
			}
			.po-slider-text h1,
			.po-slider-text-static h1
			{
				color:{$slider_title};
			}
			
			.background-greyscale.green {
				background-color: {$slider_overlay};
			}
			
			.background-greyscale-2 {
				background-color: {$slider_overlay};
			}
			
			.one-nav-bg
			{
				background-color:{$nav_background};
			}
			
			.search-icon-form
			{
				color: {$search_form};
			}
			
			.search-field
			{
				color: {$search_form};
				border-bottom:2px solid {$search_form};
				
			}
			
			.site-shade
			{
			
				background-color:{$search_shade_background};
			}
			
			.slider-btn.outline-button.white-green:hover
			{
				color: {$slider_button_text};
				border:1px solid {$slider_button};
				background-color:{$slider_button};
			}
			
			
			a {
				color:{$accent};	
			}
			
			a:hover {
				color:{$link_hover};	
			}
			
			.blog-header .entry-title a:hover,
			.search-header h1 a:hover
			
			{
				color:{$accent};
				
			}
			
			.more-link
			{
				color:{$accent};
				
			}
			
			.post-meta a:hover,
			.edit-link a:hover
			{
				color:{$accent};
			}
			
			.reply a:hover
			{
				color:{$accent};
			}
			
			.blog-form input[type='text']:focus,
			.blog-form input[type='email']:focus,
			.blog-form textarea:focus
			{
			
				border-bottom:1px solid {$accent};
			}
			
			input[type='submit']#blog-form:hover
			{
			
				color: {$secondary_accent};
				background-color:{$accent};
			
			}
			
			.link-thumb:hover
			{
				background-color:{$accent};
			}
			
			#crumbs a:hover
			{
				color:{$accent};
			}
			
			.outline-button.custom
			{
				color: {$secondary_accent};
				border:1px solid {$accent};
				background-color:{$accent};
			}
			
			
			.outline-button.custom:hover,
			.outline-button.white:hover,
			.outline-button.light:hover,
			.outline-button.lighter:hover,
			.outline-button.dark:hover
			{
				color: {$secondary_accent};
				border:1px solid {$accent};
				background-color:{$accent};
			}
			
			.banner-button.white:hover
			{	
				color: {$secondary_accent};
				background-color:{$accent};
			}
			
			.banner-button.light:hover
			{	
				color: {$secondary_accent};
				background-color:{$accent};
			}
			
			.banner-button.dark:hover
			{	
				color: {$secondary_accent};
				background-color:{$accent};
			}
			
			.banner-button
			{	
				color: {$secondary_accent};
				background-color:{$footer_button_color};
			}
			
			.banner-button:hover
			{	
				color: {$secondary_accent};
				background-color:{$accent};
			}
			
			.button-icon-left span {
				color:{$secondary_accent};
			}
			
			.button-icon-left-manual span {
				color:{$secondary_accent};
			}
			
			.btn-icon-ani {
				
				color: {$secondary_accent};
			}
			
			@media(min-width:768px){
			.po-column .hover-ani:hover .icon-box-line,
			.po-column .hover-ani:hover .count-line
			{
				border-top:1px solid {$accent};
			
			}
			}
			
			.po-column .po-icon-box .icon-green,
			.po-column .po-icon-float .icon-green,
			.po-column .po-icon-boxless .icon-green,
			.po-column .po-icon-box-left .icon-green
			{
				color:{$accent};
				border:1px solid {$accent};
			}
			
			@media(min-width:768px){
			.po-column .po-icon-box:hover .icon-green,
			.po-column .po-icon-float:hover .icon-green,
			.po-column .po-icon-boxless:hover .icon-green,
			.po-column .po-icon-box-left:hover .icon-green
			{
				color:{$secondary_accent};
				border:none;
				background-color: {$accent};
			}
			}
			
			.po-column .icon-boxless-green
			{
				color:{$accent};
			}
			
			.po-column .icon-float-green
			{
				color:{$secondary_accent};
				border:2px solid {$accent};
				background-color: {$accent};
			}
			
			.po-column po-icon-box.icon-green,
			.po-column po-icon-float.icon-green,
			.po-column po-icon-boxless.icon-green,
			.po-column po-icon-box-left.icon-green
			{
				color:{$accent};
			}
			
			@media(min-width:992px){
			.icon-green:hover h4, 
			.icon-green:hover h4,
			.icon-green:hover .float-header
			{
				color:{$accent};
			}
			}
			
			@media(min-width:992px){
				.portfolio-item a:hover .portfolio-details {
					background-color: {$accent};
				}
				
				.portfolio-item a:hover .item-title, .portfolio-item a:hover .subtitle { color: {$secondary_accent}; }
			}
			
			.portfolio-nav .prev.green:hover,
			.portfolio-nav .index.green:hover,
			.portfolio-nav .next.green:hover
			{
				border:2px solid {$accent};
				background-color:{$accent};
			}
			
			.share-links .love.green:hover,
			.share-links .prev.green:hover,
			.share-links .index.green:hover,
			.share-links .next.green:hover,
			.share-links-standard .love.green:hover,
			.share-links-standard .prev.green:hover,
			.share-links-standard .index.green:hover,
			.share-links-standard .next.green:hover
			{
				border:1px solid {$accent};
				background-color:{$accent};
			}
			
			.share-links-standard .index.mail:hover
			{
				border:1px solid {$accent};
				background-color:{$accent};
			}

			
			.banner
			{
				background: {$accent};
			}
				
			.banner2
			{
				background: {$accent};
			}
			
			.portfolio-cat li a:hover,
			.portfolio-link li a:hover {
				color:{$accent};
			}
			
			.pagination li a:hover
			{
				color: #fff;
				border:1px solid {$accent};
				background-color:{$accent};
			
			}
			
			.pagination li.active a:hover {
				background-color: {$accent};
				border:1px solid {$accent};
			}
			
			.client-image .client-container .client-details {
				background-color: {$accent};
			}
			
			.search-page-field:focus
			{
				border:1px solid {$accent};
			}
			
			.search-field-sidebar
			{
				border:1px solid {$form_borders};
			}
			
			.search-field-sidebar:focus
			{
			
				border:1px solid {$accent};
			}
			
			.wpcf7 input[type='text'],
			.wpcf7 input[type='email'],
			.wpcf7 textarea,
			.footer-container .wpcf7 input[type='text'],
			.footer-container .wpcf7 input[type='email'],
			.footer-container .wpcf7 textarea
			{
				border-bottom:1px solid {$form_borders};
			}
			
			.wpcf7 input[type='text']:focus,
			.wpcf7 input[type='email']:focus,
			.wpcf7 textarea:focus
			{
			
				border-bottom:1px solid {$accent};
			}
			
			.wpcf7 input[type='submit']
			{
			
				color: {$secondary_accent};
			
			}

			
			.wpcf7 input[type='submit']:hover
			{
			
				color: {$secondary_accent};
				background-color:{$accent};
			
			}

			.po-carouseled .bx-wrapper .bx-prev:hover {
				background: url(images/slide-arrow-left.png) no-repeat 60px 8px {$accent};
				border:1px solid {$accent};
			}
			
			.po-carouseled .bx-wrapper .bx-next:hover {
				background: url(images/slide-arrow-right.png) no-repeat 23px 8px {$accent};
				border:1px solid {$accent};
			}
			
			.po-carouseled .bx-wrapper .bx-prev:hover {
				border:1px solid {$accent};
			}
			
			.po-carouseled .bx-wrapper .bx-next:hover {
				border:1px solid {$accent};
			}
			
			.po-carouseleds .bx-wrapper .bx-prev:hover {
				background-color: {$accent};
				border-left:none;
			}
			
			.po-carouseleds .bx-wrapper .bx-next:hover {
				background-color: {$accent};
				border-right:none;
			}
			
			figure:hover {
				background:{$accent};
			}
			
			.portfolio-item-footer .grid figure {
				background:{$portfolio_hover};
			}
			
			.non-immediate-parent-container-b figcaption {
				background-color:{$accent};
			}
			
			.go-top
			{
				color:{$footer_bottom_links};
			}
			
			.go-top:hover
			{
				color:{$footer_bottom_links_hover};
			}
			
			h1, h2, h3, h4, h5, h6, button, .top-page, .slider-subtitle, .menu-nav-inner, .button, .widget-area p.clear, .mailbag-wrap input[type='submit'], .blog-read, .caro-terms, .blog-read-standard, .blog-quote, input[type='submit']#blog-form, .tagcloud a, #crumbs, .go-top,.archive-list,.float-header,.banner-button,.outline-button, cite, .blog-content.entry-content th, dl dt, .wpcf7 input[type='submit'],.edit-link,.post-password-form label,.post-password-form input[type='submit'],.success-subscribe,.loved-item a,.test-person,.recent-post-button,.filter-button{
	
				font-family: {$header_font};
			}
			
			body, p, input, .recent-tweets, .rpwe-block ul.rpwe-ul li.rpwe-li .rpwe-time, .portfolio-item-effect-4 figure.effect-chico p.blog-date, .portfolio-item-effect-4 .figure-ie.effect-chico p.blog-date, .caro-details, .mailbag-wrap input[type='text'], .disclaimer, .post-author-details, .comment-metadata, .slider-caption .slider-date,.blog-quote-standard,.comment-reply-link, .comments-title, .tweet-name,.sidenav-text, .po-testimonials .test-text p{
	
				font-family: {$body_font};
			}
			
			.whole-footer{
				background-color: {$footer_background};
			}
			
			.footer-container h6 {
				color:{$footer_headers};
			}
			
			.blog-video-thumb:hover .standard-video-button
			{
				background-color:{$accent};
			}
			
			.header-line-left-footer
			{
				border-top:2px solid {$footer_headers};
			}
			
			.footer-container p {
				color:{$footer_text};
			}
			
			.recent-tweets li
			{
				color:{$footer_text};
			}
			
			.recent-tweets li a
			{
				color:{$footer_links};
			}
			
			.recent-tweets li a:hover
			{
				color:{$footer_links_hover};
			}
			
			.recent-posts li a
			{
				color:{$footer_links};
			}
			
			.recent-posts li a:hover
			{
				color:{$footer_links_hover};
			}
			
			.portfolio-item-footer a:hover .portfolio-details {
				background-color: {$accent};
			}
			
			.footer-links li a
			{
				color:{$footer_social};
			}
			
			.social-links li a
			{
				color:{$social_icons};
			}
			
			.tweet-name a
			{
				color:{$footer_twitter_username};
			}
			
			.recent-tweets a:hover
			{
				color:{$footer_twitter_username_hover};
			}
			
			.footer-container-bottom {
				background-color:{$footer_bottom_background};
			}
			
			.footer-container-bottom p span{
				color:{$footer_bottom_text};
			}
			
			.footer-container-bottom p a {
				color:{$footer_bottom_links};
			}
			
			.footer-container-bottom p a:hover {
				color:{$footer_bottom_links_hover};
			}
			
			.po-navbar-footer li a {
				color:{$footer_bottom_links};
			}
			
			.po-navbar-footer li a:hover {
				color:{$footer_bottom_links_hover};
			}
			
			.widget ul li a:hover
			{
				color:{$accent};
			}
			
			.tagcloud a:hover
			{
				background-color:{$accent};
				border:1px solid {$accent};
			}
			
			
			.side-nav-inner .menu li.current_page_item a
			
			{
				color:{$accent};
			}
			
			.side-nav-inner .menu li a:hover
			{
				color:{$accent};
			}
			
			.po-info-button,
			.port-title,
			.po-rate
			{
				background-color:{$accent};
			}
			
			.nav-portfolio-item:hover
			{
				background: {$accent};
			}
			
			.odometer
			{
				color: {$accent};
			}
			
			.spin
			{
				color: {$accent};
			}
			
			.highlight
			{
				color: {$accent};
			}
			
			.horiz-nav-bottom .menu li:hover
			{
				border-top:2px solid {$accent};
			}
			
			
			
			.linecons-icon
			{
				color: {$accent};
			}
			
			.background-greyscale
			{
				background-color: {$accent};
			}
			
			.po-portfolio-slider .bx-wrapper .bx-pager.bx-default-pager a:hover,
			.po-testimonials .bx-wrapper .bx-pager.bx-default-pager a:hover{
				background: {$accent};
			}
			
			.po-filter,
			.po-filter-portfolio
			
			{
				background-color:{$accent};
			}
			
			.loading {
				
				border-right: 1px solid {$loader_highlight};
				
			}
			
			.loading-nologo {
				
				border-left: 2px solid {$loader};
				border-right: 2px solid {$loader};
				border-top: 2px solid {$loader};
				border-bottom: 2px solid {$loader_highlight};
			}
			
			
			
			.ie8 figure.effect-chico:hover figcaption {
				background-color:{$accent};
			}
			
			.fp-tooltip
			{
				background-color:{$accent};
			}
			
			.one-nav-fixed .menu li.active a,
			.one-nav-fixed .menu li a:hover
			{
				border-bottom:2px solid {$accent};
			}
			
			.po-tooltip + .tooltip > .tooltip-inner 
			{
				background-color: {$accent};
			}
			
			.po-tooltip + .tooltip > .tooltip-arrow 
			{
				border-bottom-color: {$accent};
			}
			
			.post-meta-single-tags a:hover
			{
				color:{$accent};
			}
				
			.bottom-nav img.bottom-logo
			{
				
				max-height:{$nav_logo_height}px;
				margin-top:{$nav_logo_position}px;
			}
			
			.bottom-nav-short img.bottom-logo
			{
				
				max-height:{$nav_logo_height}px;
				margin-top:{$nav_logo_position}px;
			}	
			
			.share-links-site .mail:hover
			{
				background-color:{$accent};
			}
			
			.button.slider:hover
			{
				background-color:{$accent};
			}
			
			.portfolio-item-effect-4 figure.effect-chico .slider-subtitle.blog-terms,
			.portfolio-item-effect-4 figure.effect-chico.minimal .slider-subtitle.blog-terms a:hover,
			.portfolio-item-effect-4 figure.effect-chico.minimal h2 a:hover,
			.portfolio-item-effect-4 figure.effect-chico.standard h2 a:hover,
			.portfolio-item-effect-4 .figure-ie.effect-chico .slider-subtitle.blog-terms,
			.portfolio-item-effect-4 .figure-ie.effect-chico.minimal .slider-subtitle.blog-terms a:hover,
			.portfolio-item-effect-4 .figure-ie.effect-chico.minimal h2 a:hover,
			.portfolio-item-effect-4 .figure-ie.effect-chico.standard h2 a:hover,
			.slider-caption .slider-subtitle a:hover {
				color:{$accent};
			}
			
			.portfolio-item-effect-4 figure.effect-chico .blog-read:hover,
			.portfolio-item-effect-4 figure.effect-chico.minimal.white-btn .blog-read:hover,
			.portfolio-item-effect-4 .figure-ie.effect-chico .blog-read:hover,
			.portfolio-item-effect-4 .figure-ie.effect-chico.minimal.white-btn .blog-read:hover{
				color:#fff;
				background-color:{$accent};
				border:1px solid {$accent};
			}
			
			.custom-pagination .page-numbers:hover,
			.custom-pagination .page-numbers.current
			{
				color:{$accent};
			}
			
			.widget-area p.clear a
			{
				color:{$footer_twitter_username};
			}
			
			.widget-area p.clear a:hover
			{
				color:{$footer_twitter_username_hover};
			}
			
			.grid li:hover .caro-terms {
				color:{$accent};
			}
			
			.about-text p
			{
				color:{$footer_text};
			}
			
			.about-text p a
			{
				color:{$footer_links};
			}
			
			.about-text p a:hover
			{
				color:{$footer_links_hover};
			}
			
			a.blog-share-btn.comment:hover
			{
				border:1px solid {$accent}; 
				background:{$accent};
			}
			
			.mailbag-wrap input[type='text']:focus, .mailbag-wrap input[type='email']:focus, .post-password-form input[type='password']:focus { border-bottom:1px solid {$accent} !important; }
			
			.mailbag-wrap input[type='submit']:hover { width:100%; background:{$accent} !important; text-transform:uppercase; font-weight:700; font-size:11px; letter-spacing:1px; @include border-radius(0px); }
			
			.post-password-form input[type='submit']:hover
			{
				background:{$accent};
			}
			
			.footer-container-bottom .social-links li .index
			{
				color:{$footer_social};
			}
			
			.blog-read-standard:hover
			{
				border:2px solid {$accent}; 
				background:{$accent};
			}
			
			.index-paginate a:hover,
			.archive-list li a:hover
			{
				color:{$accent};
			}
			
			.comments-author a:hover
			{
				color:{$accent};
			}
			
			.standard-blog-post-title:hover
			{
				color:{$accent};
			}
			
			p.success-subscribe
			{
				background:{$accent};
				
			}
			
			.comment-reply-link:hover
			{
				color:{$accent} !important;
			}
			
			.gallery-bg-standard-cont .bx-wrapper .bx-prev:hover,
			.gallery-bg-standard-cont .bx-wrapper .bx-next:hover,
			.po-carousel-blog-cont .bx-wrapper .bx-prev:hover,
			.po-carousel-blog-cont .bx-wrapper .bx-next:hover,
			.po-portfolio-slider-top .bx-wrapper .bx-prev:hover,
			.po-portfolio-slider-top .bx-wrapper .bx-next:hover,
			.po-testimonials .bx-wrapper .bx-next:hover,
			.po-testimonials .bx-wrapper .bx-prev:hover{
				background-color: {$accent} !important;
			}
			
			.filter-button:hover,
			.filter-button.active, .filter-button:active
			{
				border:1px solid {$accent};
				background-color:{$accent};
			
			}
			
			

			
		";
        wp_add_inline_style( 'custom-style', $footer_css );
}
add_action( 'wp_enqueue_scripts', 'po_custom_styles' );

?>