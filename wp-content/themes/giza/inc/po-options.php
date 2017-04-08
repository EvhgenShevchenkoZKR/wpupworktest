<?php

/* LOGO 
------------------------------------------------------- */ 

function po_logo( $wp_customize ) {
    $wp_customize->add_section(
        'logo',
        array(
            'title' => __('Logo','pixelobject'),
			'description' => __('Upload your logo in white, light and dark colours.','pixelobject'),
            'priority' => 1,
        )
    );
	
	$wp_customize->add_setting( 'logo_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo_upload',
			array(
				'label' => __('Logo White','pixelobject'),
				'description' => __('Main logo, and when over dark backgrounds. Also appears at top of side menu.','pixelobject'),
				'section' => 'logo',
				'settings' => 'logo_upload',
				'priority' => 1,
			)
		)
	);
	
	$wp_customize->add_setting( 'logo_upload_light', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo_upload_light',
			array(
				'label' => __('Logo Light','pixelobject'),
				'description' => __('When over light backgrounds.','pixelobject'),
				'section' => 'logo',
				'settings' => 'logo_upload_light',
				'priority' => 2,
			)
		)
	);
	
	$wp_customize->add_setting( 'logo_upload_dark', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo_upload_dark',
			array(
				'label' => __('Logo Dark','pixelobject'),
				'description' => __('When over white backgrounds.','pixelobject'),
				'section' => 'logo',
				'settings' => 'logo_upload_dark',
				'priority' => 3,
			)
		)
	);
	
	$wp_customize->add_setting( 'logo_height', array(
		'default' => '100',											 
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'logo_height', array(
			'type'        => 'range',
			'priority'    => 4,
			'section'     => 'logo',
			'label'       => __('Logo Height','pixelobject'),
			'description' => __('Adjust height of logo.','pixelobject'),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 200,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting( 'logo_height_mobile', array(
		'default' => '100',													
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'logo_height_mobile', array(
			'type'        => 'range',
			'priority'    => 5,
			'section'     => 'logo',
			'label'       => __('Logo Height (Mobile)','pixelobject'),
			'description' => __('Adjust height of logo in mobile view.','pixelobject'),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 200,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting( 'logo_position', array(
		'default' => '60',											   	
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'logo_position', array(
			'type'        => 'range',
			'priority'    => 6,
			'section'     => 'logo',
			'label'       => __('Logo Position','pixelobject'),
			'description' => __('Adjust vertical position of logo.','pixelobject'),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 100,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting( 'logo_position_mobile', array(
		'default' => '50',													  
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'logo_position_mobile', array(
			'type'        => 'range',
			'priority'    => 7,
			'section'     => 'logo',
			'label'       => __('Logo Position (Mobile)','pixelobject'),
			'description' => __('Adjust vertical position of logo in mobile view.','pixelobject'),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 100,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting( 'loading_logo_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'loading_logo_upload',
			array(
				'label' => 'Upload loading logo (optional)',
				'section' => 'logo',
				'settings' => 'loading_logo_upload',
				'priority' => 16,
			)
		)
	);
	
	$wp_customize->add_setting( 'load_logo_height', array(
		'default' => '50',											 
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'load_logo_height', array(
			'type'        => 'range',
			'priority'    => 17,
			'section'     => 'logo',
			'label'       => __('Loading Logo Height','pixelobject'),
			'description' => __('Adjust height of logo.','pixelobject'),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 100,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting( 'load_logo_position', array(
		'default' => '43',											   	
        'sanitize_callback' => 'absint',
    ) );
 
	$wp_customize->add_control( 'load_logo_position', array(
			'type'        => 'range',
			'priority'    => 18,
			'section'     => 'logo',
			'label'       => __('Loading Logo Position','pixelobject'),
			'description' => __('Adjust vertical position of logo.','pixelobject'),
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 100,
				'step'  => 1,
				'class' => 'test-class test',
				'style' => 'color: #0a0',
			),
		) 
	);
	
	$wp_customize->add_setting(
		'favicon_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'favicon_url',
		array(
			'label' => 'Favicon URL',
			'section' => 'logo',
			'type' => 'text',
			'priority' => 19,
		)
	);

}
add_action( 'customize_register', 'po_logo' );


/* GENERAL 
------------------------------------------------------- */ 

function po_general( $wp_customize ) {
    $wp_customize->add_section(
        'general',
        array(
            'title' => __('General','pixelobject'),
            'priority' => 2,
        )
    );
	
	
	
	$wp_customize->add_setting(
    'menu_position',
		array(
			'default' => 'right',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'menu_position',
		array(
			'type' => 'select',
			'label' => __('Menu Position','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'right' => __('Right','pixelobject'),
				'left' => __('Left','pixelobject'),
			),
			'priority' => 2,
		)
	);
	
	$wp_customize->add_setting(
		'menu_about_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'menu_about_text',
		array(
			'label' => __('Side Menu Text','pixelobject'),
			'section' => 'general',
			'type' => 'text',
			'priority' => 3,
		)
	);
	
	$wp_customize->add_setting( 'menu_background_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'menu_background_image',
			array(
				'label' => __('Side Menu Background Image','pixelobject'),
				'description' => __('Recommended size: 500px x 700px.','pixelobject'),
				'section' => 'general',
				'settings' => 'menu_background_image',
				'priority' => 7,
			)
		)
	);
	
	$wp_customize->add_setting(
		'blog_header',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'blog_header',
		array(
			'label' => __('Blog Header','pixelobject'),
			'section' => 'general',
			'type' => 'text',
			'priority' => 8,
		)
	);
	
	$wp_customize->add_setting( 'blog_image_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'blog_image_upload',
			array(
				'label' => __('Blog Banner Image','pixelobject'),
				'section' => 'general',
				'settings' => 'blog_image_upload',
				'priority' => 10,
			)
		)
	);
	
	
	$wp_customize->add_setting(
    'blog_image_content',
		array(
			'default' => 'white-content',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'blog_image_content',
		array(
			'type' => 'select',
			'label' => __('Blog Banner Content Color','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'white-content' => __('White','pixelobject'),
				'light-content' => __('Light','pixelobject'),
				'black-content' => __('Black','pixelobject'),
			),
			'priority' => 11,
		)
	);

	
	$wp_customize->add_setting( 'category_image_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'category_image_upload',
			array(
				'label' => __('Category Banner Image','pixelobject'),
				'section' => 'general',
				'settings' => 'category_image_upload',
				'priority' => 11,
			)
		)
	);
	
	$wp_customize->add_setting(
    'category_image_content',
		array(
			'default' => 'white-content',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'category_image_content',
		array(
			'type' => 'select',
			'label' => __('Category Banner Content Color','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'white-content' => __('White','pixelobject'),
				'light-content' => __('Light','pixelobject'),
				'black-content' => __('Black','pixelobject'),
			),
			'priority' => 12,
		)
	);
	
	$wp_customize->add_setting( 'archive_image_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'archive_image_upload',
			array(
				'label' => __('Archive Banner Image','pixelobject'),
				'section' => 'general',
				'settings' => 'archive_image_upload',
				'priority' => 13,
			)
		)
	);
	
	$wp_customize->add_setting(
    'archive_image_content',
		array(
			'default' => 'white-content',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'archive_image_content',
		array(
			'type' => 'select',
			'label' => __('Archive Banner Content Color','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'white-content' => __('White','pixelobject'),
				'light-content' => __('Light','pixelobject'),
				'black-content' => __('Black','pixelobject'),
			),
			'priority' => 14,
		)
	);
	
	$wp_customize->add_setting( 'search_image_upload', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'search_image_upload',
			array(
				'label' => __('Search Banner Image','pixelobject'),
				'section' => 'general',
				'settings' => 'search_image_upload',
				'priority' => 15,
			)
		)
	);
	
	$wp_customize->add_setting(
    'search_image_content',
		array(
			'default' => 'white-content',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'search_image_content',
		array(
			'type' => 'select',
			'label' => __('Search Banner Content Color','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'white-content' => __('White','pixelobject'),
				'light-content' => __('Light','pixelobject'),
				'black-content' => __('Black','pixelobject'),
			),
			'priority' => 16,
		)
	);
	
	$wp_customize->add_setting(
    'footer_columns',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'footer_columns',
		array(
			'type' => 'select',
			'label' => __('Footer Column Width','pixelobject'),
			'section' => 'general',
			'choices' => array(
				'3' => __('33%','pixelobject'),
				'5' => __('50%','pixelobject'),
				'1' => __('100%','pixelobject'),
			),
			'priority' => 20,
		)
	);
	
	
}
add_action( 'customize_register', 'po_general' );


/* SLIDER 
------------------------------------------------------- */ 

function po_slider( $wp_customize ) {
    $wp_customize->add_section(
        'slider',
        array(
            'title' => __('Slider','pixelobject'),
            'priority' => 4,
        )
    );
	$wp_customize->add_setting(
		'slider_category',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'slider_category',
		array(
			'label' => __('Slider Category','pixelobject'),
			'description' => __('Category of posts to show within the page slider. Separate with commas for multiple categories.','pixelobject'),
			'section' => 'slider',
			'type' => 'text',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_setting(
    'slider_order',
		array(
			'default' => 'DESC',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'slider_order',
		array(
			'type' => 'select',
			'label' => __('Slider Order','pixelobject'),
			'section' => 'slider',
			'priority' => 2,
			'choices' => array(
				'DESC' => __('Descending','pixelobject'),
				'ASC' => __('Ascending','pixelobject'),
			),
		)
	);
	$wp_customize->add_setting(
    'slider_orderby',
		array(
			'default' => 'date',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'slider_orderby',
		array(
			'type' => 'select',
			'label' => __('Slider Orderby','pixelobject'),
			'section' => 'slider',
			'priority' => 4,
			'choices' => array(
				'date' => __('Date','pixelobject'),
				'title' => __('Title','pixelobject'),
				'modified' => __('Last modified','pixelobject'),
				'rand' => __('Random','pixelobject'),
			),
		)
	);
	
	$wp_customize->add_setting(
		'slider_number',
		array(
			'default' => '3',  
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'slider_number',
		array(
			'label' => __('Slider Number','pixelobject'),
			'section' => 'slider',
			'type' => 'text',
			'priority' => 6,
		)
	);
	
	
}
add_action( 'customize_register', 'po_slider' );

/* FEATURED 
------------------------------------------------------- */ 

function po_featured( $wp_customize ) {
    $wp_customize->add_section(
        'featured',
        array(
            'title' => __('Featured','pixelobject'),
            'priority' => 5,
        )
    );
	$wp_customize->add_setting(
		'featured_section',
		array(
			'sanitize_callback' => 'po_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'featured_section',
		array(
			'type' => 'checkbox',
			'label' => __('Show Featured Section','pixelobject'),
			'section' => 'featured',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_setting(
		'featured_header',
		array(
			'default' => 'Featured',  
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'featured_header',
		array(
			'label' => __('Featured Header','pixelobject'),
			'section' => 'featured',
			'type' => 'text',
			'priority' => 2,
		)
	);
	
	$wp_customize->add_setting(
		'featured_category',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'featured_category',
		array(
			'label' => __('Featured Category','pixelobject'),
			'description' => __('Category of posts to show within the featured slider. Separate with commas for multiple categories.','pixelobject'),
			'section' => 'featured',
			'type' => 'text',
			'priority' => 3,
		)
	);
	
	$wp_customize->add_setting(
    'featured_order',
		array(
			'default' => 'DESC',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'featured_order',
		array(
			'type' => 'select',
			'label' => __('Featured Order','pixelobject'),
			'section' => 'featured',
			'priority' => 5,
			'choices' => array(
				'DESC' => __('Descending','pixelobject'),
				'ASC' => __('Ascending','pixelobject'),
			),
		)
	);
	$wp_customize->add_setting(
    'featured_orderby',
		array(
			'default' => 'date',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'featured_orderby',
		array(
			'type' => 'select',
			'label' => __('Featured Orderby','pixelobject'),
			'section' => 'featured',
			'priority' => 7,
			'choices' => array(
				'date' => __('Date','pixelobject'),
				'title' => __('Title','pixelobject'),
				'modified' => __('Last modified','pixelobject'),
				'rand' => __('Random','pixelobject'),
			),
		)
	);
	
	$wp_customize->add_setting(
		'featured_number',
		array(
			'default' => '5',  
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'featured_number',
		array(
			'label' => __('Featured Number','pixelobject'),
			'section' => 'featured',
			'type' => 'text',
			'priority' => 10,
		)
	);
	
	$wp_customize->add_setting(
		'related_header',
		array(
			'default' => 'Related',  
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'related_header',
		array(
			'label' => __('Related Header','pixelobject'),
			'section' => 'featured',
			'type' => 'text',
			'priority' => 11,
		)
	);
	
	
}
add_action( 'customize_register', 'po_featured' );


/* SOCIAL PROFILES
------------------------------------------------------- */ 

function po_social_profiles( $wp_customize ) {
    $wp_customize->add_section(
        'social_profiles',
        array(
            'title' => __('Social','pixelobject'),
            'description' => __('These are the fields that power the social shortcode. If you include a link/username here, then the icon will be included in the shortcodes output.','pixelobject'),
            'priority' => 6,
        )
    );
	$wp_customize->add_setting(
		'email_address',
		array(
			'sanitize_callback' => 'sanitize_email',
		)
	);
	$wp_customize->add_control(
		'email_address',
		array(
			'label' => __('Email Address','pixelobject'),
			'section' => __('social_profiles','pixelobject'),
			'type' => 'text',
			'priority' => 1,
		)
	);
	$wp_customize->add_setting(
		'twitter_username',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'twitter_username',
		array(
			'label' => __('Twitter Username','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 2,
		)
	);
	$wp_customize->add_setting(
		'facebook_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'facebook_url',
		array(
			'label' => __('Facebook URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 3,
		)
	);
	$wp_customize->add_setting(
		'googleplus_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'googleplus_url',
		array(
			'label' => __('Google Plus URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 4,
		)
	);
	$wp_customize->add_setting(
		'pinterest_username',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'pinterest_username',
		array(
			'label' => __('Pinterest Username','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 5,
		)
	);
	$wp_customize->add_setting(
		'youtube_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'youtube_url',
		array(
			'label' => __('Youtube URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 6,
		)
	);
	$wp_customize->add_setting(
		'vimeo_username',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'vimeo_username',
		array(
			'label' => __('Vimeo Username','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 7,
		)
	);
	$wp_customize->add_setting(
		'linkedin_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'linkedin_url',
		array(
			'label' => __('LinkedIn URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 8,
		)
	);
	$wp_customize->add_setting(
		'github_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'github_url',
		array(
			'label' => __('Github URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 9,
		)
	);
	$wp_customize->add_setting(
		'foursquare_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'foursquare_url',
		array(
			'label' => __('Foursquare URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 10,
		)
	);
	$wp_customize->add_setting(
		'instagram_username',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'instagram_username',
		array(
			'label' => __('Instagram Username','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 11,
		)
	);
	$wp_customize->add_setting(
		'flickr_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'flickr_url',
		array(
			'label' => __('Flickr URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 12,
		)
	);
	$wp_customize->add_setting(
		'rss_url', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
	$wp_customize->add_control(
		'rss_url',
		array(
			'label' => __('RSS URL','pixelobject'),
			'section' => 'social_profiles',
			'type' => 'text',
			'priority' => 13,
		)
	);
}
add_action( 'customize_register', 'po_social_profiles' );


/* TYPOGRAPHY
------------------------------------------------------- */ 

function po_typography( $wp_customize ) {
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __('Typography','pixelobject'),
			'description' => __('First, get <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> or <a href="http://pixelobject.com/tutorials/font-setup/" target="_blank">learn more</a>.','pixelobject'),
            'priority' => 7,
        )
    );
	$wp_customize->add_setting(
		'family_code',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Libre+Baskerville:400,400italic|Montserrat:400,700',
			
		)
	);
	$wp_customize->add_control(
		'family_code',
		array(
			'label' => __('Font Family Code','pixelobject'),
			'section' => 'typography',
			'type' => 'text',
			'priority' => 1,
		)
	);
	$wp_customize->add_setting(
		'header_font',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => "'Montserrat', sans-serif;",
			
		)
	);
	$wp_customize->add_control(
		'header_font',
		array(
			'label' => __('Header CSS','pixelobject'),
			'section' => 'typography',
			'type' => 'text',
			'priority' => 2,
		)
	);
	$wp_customize->add_setting(
		'body_font',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => "'Libre Baskerville', serif;",
			
		)
	);
	$wp_customize->add_control(
		'body_font',
		array(
			'label' => __('Body CSS','pixelobject'),
			'section' => 'typography',
			'type' => 'text',
			'priority' => 3,
		)
	);
}
add_action( 'customize_register', 'po_typography' );


/* FORMS
------------------------------------------------------- */ 

function po_forms( $wp_customize ) {
    $wp_customize->add_section(
        'forms',
        array(
            'title' => __('Forms','pixelobject'),
            'priority' => 8,
        )
    );
	
	$wp_customize->add_setting(
		'subscription_section',
		array(
			'sanitize_callback' => 'po_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'subscription_section',
		array(
			'type' => 'checkbox',
			'label' => __('Show Subscription Form','pixelobject'),
			'description' => __('Subscription form shows on single post pages.','pixelobject'),
			'section' => 'forms',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_setting(
    'email_client',
		array(
			'default' => 'mailchimp',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	 
	$wp_customize->add_control(
		'email_client',
		array(
			'type' => 'select',
			'label' => __('Email Client','pixelobject'),
			'section' => 'forms',
			'choices' => array(
				'mailchimp' => __('Mailchimp','pixelobject'),
				'campaign-monitor' => __('Campaign Monitor','pixelobject'),
			),
			'priority' => 2,
		)
	);
	
	$wp_customize->add_setting(
		'subscription_header',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Subscribe to our newsletter.',
			
		)
	);
	$wp_customize->add_control(
		'subscription_header',
		array(
			'label' => __('Subscription Header','pixelobject'),
			'section' => 'forms',
			'type' => 'text',
			'priority' => 3,
		)
	);
	$wp_customize->add_setting(
		'subscription_description',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Be the first to get the latest updates, right to your inbox.',
			
		)
	);
	$wp_customize->add_control(
		'subscription_description',
		array(
			'label' => __('Subscription Description','pixelobject'),
			'section' => 'forms',
			'type' => 'text',
			'priority' => 4,
		)
	);
}
add_action( 'customize_register', 'po_forms' );



/* COLORS - ACCENT
------------------------------------------------------- */ 

function po_accent_colors( $wp_customize ) {
    $wp_customize->add_section(
        'accent_colors',
        array(
            'title' => __('Colors - Accent','pixelobject'),
            'priority' => 8,
        )
    );
	$wp_customize->add_setting(
		'accent',
		array(
			'default' => '#20C596',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent',
			array(
				'label' => __('Accent','pixelobject'),
				'section' => 'accent_colors',
				'settings' => 'accent',
				'priority' => 1,
			)
		)
	);
	$wp_customize->add_setting(
		'secondary_accent',
		array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_accent',
			array(
				'label' => __('Secondary Accent','pixelobject'),
				'section' => 'accent_colors',
				'settings' => 'secondary_accent',
				'priority' => 2,
			)
		)
	);
	$wp_customize->add_setting(
		'link_hover',
		array(
			'default' => '#118C6A',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover',
			array(
				'label' => __('Link Hover','pixelobject'),
				'section' => 'accent_colors',
				'settings' => 'link_hover',
				'priority' => 3,
			)
		)
	);
}
add_action( 'customize_register', 'po_accent_colors' );

/* COLORS - LOADER
------------------------------------------------------- */ 

function po_structure_colors( $wp_customize ) {
    $wp_customize->add_section(
        'struture_colors',
        array(
            'title' => __('Colors - Loader','pixelobject'),
            'priority' => 9,
        )
    );
	
	$wp_customize->add_setting(
		'loader',
		array(
			'default' => '#222222',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'loader',
			array(
				'label' => __('Loader','pixelobject'),
				'section' => 'struture_colors',
				'settings' => 'loader',
				'priority' => 1,
			)
		)
	);
	
	$wp_customize->add_setting(
		'loader_highlight',
		array(
			'default' => '#eeeeee',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'loader_highlight',
			array(
				'label' => __('Loader Highlight','pixelobject'),
				'section' => 'struture_colors',
				'settings' => 'loader_highlight',
				'priority' => 2,
			)
		)
	);
}
add_action( 'customize_register', 'po_structure_colors' );


/* COLORS - SLIDER
------------------------------------------------------- */ 

function po_slider_colors( $wp_customize ) {
    $wp_customize->add_section(
        'slider_colors',
        array(
            'title' => __('Colors - Slider','pixelobject'),
            'priority' => 11,
        )
    );
	$wp_customize->add_setting(
		'slider_overlay',
		array(
			'default' => '#20C596',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'slider_overlay',
			array(
				'label' => __('Overlay','pixelobject'),
				'section' => 'slider_colors',
				'settings' => 'slider_overlay',
				'priority' => 1,
			)
		)
	);
}
add_action( 'customize_register', 'po_slider_colors' );


/* COLORS - Form
------------------------------------------------------- */ 

function po_contact_colors( $wp_customize ) {
    $wp_customize->add_section(
        'forms_colors',
        array(
            'title' => __('Colors - Forms','pixelobject'),
            'priority' => 12,
        )
    );
	$wp_customize->add_setting(
		'form_borders',
		array(
			'default' => '#dddddd',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'form_borders',
			array(
				'label' => __('Form Borders','pixelobject'),
				'section' => 'forms_colors',
				'settings' => 'form_borders',
				'priority' => 1,
			)
		)
	);
	
}
add_action( 'customize_register', 'po_contact_colors' );



/* COLORS - FOOTER
------------------------------------------------------- */ 

function po_footer_colors( $wp_customize ) {
    $wp_customize->add_section(
        'footer_colors',
        array(
            'title' => __('Colors - Footer','pixelobject'),
            'priority' => 14,
        )
    );
	
	$wp_customize->add_setting(
		'footer_headers',
		array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_headers',
			array(
				'label' => __('Headers','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_headers',
				'priority' => 4,
			)
		)
	);
	
	$wp_customize->add_setting(
		'footer_social',
		array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_social',
			array(
				'label' => __('Social Icons','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_social',
				'priority' => 6,
			)
		)
	);
	
	$wp_customize->add_setting(
		'footer_twitter_username',
		array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_twitter_username',
			array(
				'label' => __('Twitter Name','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_twitter_username',
				'priority' => 7,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_twitter_username_hover',
		array(
			'default' => '#20C596',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_twitter_username_hover',
			array(
				'label' => __('Twitter Name Hover','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_twitter_username_hover',
				'priority' => 9,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_text',
		array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text',
			array(
				'label' => __('Text','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_text',
				'priority' => 12,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_links',
		array(
			'default' => '#20C596',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_links',
			array(
				'label' => __('Links','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_links',
				'priority' => 15,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_links_hover',
		array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_links_hover',
			array(
				'label' => __('Links Hover','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_links_hover',
				'priority' => 17,
			)
		)
	);
	
	$wp_customize->add_setting(
		'footer_bottom_background',
		array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bottom_background',
			array(
				'label' => __('Bottom Background','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_bottom_background',
				'priority' => 20,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_bottom_text',
		array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bottom_text',
			array(
				'label' => __('Bottom Text','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_bottom_text',
				'priority' => 22,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_bottom_links',
		array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bottom_links',
			array(
				'label' => __('Bottom Links','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_bottom_links',
				'priority' => 24,
			)
		)
	);
	$wp_customize->add_setting(
		'footer_bottom_links_hover',
		array(
			'default' => '#20C596',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bottom_links_hover',
			array(
				'label' => __('Bottom Links Hover','pixelobject'),
				'section' => 'footer_colors',
				'settings' => 'footer_bottom_links_hover',
				'priority' => 26,
			)
		)
	);
}
add_action( 'customize_register', 'po_footer_colors' );


?>