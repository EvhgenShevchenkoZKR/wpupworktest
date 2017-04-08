<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
	<?php $selected = ' selected="selected"'; ?>    
    
    <label>Show slider overlay</label><br/>
	<?php $mb->the_field('show_overlay'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?>/>
    
    <label>Image text color</label><br/>
	<?php $metabox->the_field('slider_bg'); ?>
    <select name="<?php $metabox->the_name(); ?>">
    	<option value="white-content"<?php if ($metabox->get_the_value() == 'white-content') echo $selected; ?>>white</option>
        <option value="light-content"<?php if ($metabox->get_the_value() == 'light-content') echo $selected; ?>>light</option>
        <option value="black-content"<?php if ($metabox->get_the_value() == 'black-content') echo $selected; ?>>black</option>
    </select>
    
    <label>Audio type</label><br/>
	<?php $metabox->the_field('audio_type'); ?>
    <select name="<?php $metabox->the_name(); ?>">
    	<option value="standard"<?php if ($metabox->get_the_value() == 'standard') echo $selected; ?>>standard</option>
        <option value="soundcloud"<?php if ($metabox->get_the_value() == 'soundcloud') echo $selected; ?>>soundcloud</option>
    </select>
    
    <label>Soundcloud embed code</label><br/>
	<?php $mb->the_field('soundcloud_embed'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    
    <?php $mb->the_field('audio_upload'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert')->setTab('type'); ?>
 	
    <label>Upload audio</label>
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Upload audio')); ?>
    </p>
    
    
    <label>Vimeo/YouTube embed code</label><br/>
	<?php $mb->the_field('video_embed'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    <span><strong>Note:</strong> To make a YouTube video autoplay, add "?autoplay=1" right after the video ID.</span>
    
    <label>Quote</label>
	<p>
		<?php $mb->the_field('quote'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>
    
    <label>Quote attribution</label><br/>
	<?php $mb->the_field('quote_attribution'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    
    <label>Gallery category</label><br/>
	<?php $mb->the_field('gallery'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    
    <label>Single page style</label><br/>
	<?php $metabox->the_field('single_page_style'); ?>
    <select name="<?php $metabox->the_name(); ?>">
    	<option value="full"<?php if ($metabox->get_the_value() == 'full') echo $selected; ?>>full</option>
        <option value="sidebar"<?php if ($metabox->get_the_value() == 'sidebar') echo $selected; ?>>sidebar</option>
    </select>
    
    
   
</div>