<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
 	
    <?php $selected = ' selected="selected"'; ?>
    
    <label>Page template</label><br/>
	<?php $metabox->the_field('page_template'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="slider"<?php if ($metabox->get_the_value() == 'slider') echo $selected; ?>>slider</option>
        <option value="standard"<?php if ($metabox->get_the_value() == 'standard') echo $selected; ?>>standard</option>
    </select>
    
    <?php $mb->the_field('image'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert')->setTab('type'); ?>
 	
    <label>Portfolio thumbnail image</label><br/>
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Add Image')); ?>
    </p>
    
     <label>Thumbnail delay</label><br/>
	<?php $mb->the_field('delay'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>In ms. E.g. 400</span>
    
    <label>Show page slider overlay</label><br/>
	<?php $mb->the_field('show_overlay'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?>/>
    
    <label>Show page slider video</label><br/>
	<?php $mb->the_field('show_video'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?>/>
    
    <label>Vimeo/YouTube embed code</label>
	<p>
		<?php $metabox->the_field('video_embed'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
	</p>
    
    <label>Page slider text color</label><br/>
	<?php $metabox->the_field('slider_bg'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="white-content"<?php if ($metabox->get_the_value() == 'white-content') echo $selected; ?>>white</option>
        <option value="light-content"<?php if ($metabox->get_the_value() == 'light-content') echo $selected; ?>>light</option>
        <option value="black-content"<?php if ($metabox->get_the_value() == 'black-content') echo $selected; ?>>black</option>
    </select>
    
    <label>Description</label>
	<p>
		<?php $metabox->the_field('description'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
	</p>
    <span>For slider templates only.</span>
    
    
    <label>Display external link</label><br/>
	<?php $metabox->the_field('portfolio_link_show'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="none"<?php if ($metabox->get_the_value() == 'none') echo $selected; ?>>hide</option>
        <option value=""<?php if ($metabox->get_the_value() == '') echo $selected; ?>>show</option>
    </select>
    <span>For slider templates only.</span>
    
    <label>External link URL</label><br/>
	<?php $mb->the_field('portfolio_link'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    <span>For slider templates only.</span>
    
    <label>Add template arrow</label><br/>
	<?php $mb->the_field('slider_arrow'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?> />
    <span>Standard template only.</span>
    
    <label>Template arrow color</label><br/>
	<?php $mb->the_field('slider_arrow_color'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>Standard template only.</span>
 
</div>