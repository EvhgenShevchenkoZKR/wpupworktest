<div class="my_meta_control">
	
    <?php $selected = ' selected="selected"'; ?>
    
    <label>header style</label><br/>
	<?php $metabox->the_field('header_style'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="slider"<?php if ($metabox->get_the_value() == 'slider') echo $selected; ?>>slider</option>
        <option value="image"<?php if ($metabox->get_the_value() == 'image') echo $selected; ?>>image</option>
    </select>
    <span>For home templates only.</span>
    
    <label>Post thumbnail style</label><br/>
	<?php $metabox->the_field('post_style'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="standard"<?php if ($metabox->get_the_value() == 'standard') echo $selected; ?>>standard</option>
        <option value="minimal"<?php if ($metabox->get_the_value() == 'minimal') echo $selected; ?>>minimal</option>
    </select>
    <span>For home templates only.</span>
    
    
	<label>Template style</label><br/>
	<?php $metabox->the_field('page_template'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="image"<?php if ($metabox->get_the_value() == 'image') echo $selected; ?>>image</option>
        <option value="video"<?php if ($metabox->get_the_value() == 'video') echo $selected; ?>>video</option>
    </select>
    
    <label>Video URL</label><br/>
	<?php $mb->the_field('video_url'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>To display a video within the video template, first upload a video in .mp4, .webm and .ogg formats within the same folder. Then, enter the url of your video with the .file-type-name encluded.</span>
    
    <label>Image text color</label><br/>
	<?php $metabox->the_field('slider_bg'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="white-content"<?php if ($metabox->get_the_value() == 'white-content') echo $selected; ?>>white</option>
        <option value="light-content"<?php if ($metabox->get_the_value() == 'light-content') echo $selected; ?>>light</option>
        <option value="black-content"<?php if ($metabox->get_the_value() == 'black-content') echo $selected; ?>>black</option>
    </select>
    <span>For image template styles only.</span>
    
    <label>Hide breadcrumbs</label><br/>
	<?php $mb->the_field('cb_single'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="hide"<?php $mb->the_checkbox_state('hide'); ?> />
    
    <label>Remove page padding</label><br/>
	<?php $mb->the_field('page_padding'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="hide"<?php $mb->the_checkbox_state('hide'); ?> />
    
   
   
</div>