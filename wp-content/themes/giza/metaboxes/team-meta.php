<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
 	
    <?php $selected = ' selected="selected"'; ?>
    
    <?php $mb->the_field('image'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert')->setTab('type'); ?>
 	
    <label>Team thumbnail image</label><br/>
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Add Image')); ?>
    </p>
    
    <label>Thumbnail offset (for centering)</label><br/>
	<?php $metabox->the_field('offset'); ?>
    <select name="<?php $metabox->the_name(); ?>">
    <option value=""></option>
    <option value="1"<?php if ($metabox->get_the_value() == '1') echo $selected; ?>>1</option>
    <option value="2"<?php if ($metabox->get_the_value() == '2') echo $selected; ?>>2</option>
    <option value="3"<?php if ($metabox->get_the_value() == '3') echo $selected; ?>>3</option>
    <option value="4"<?php if ($metabox->get_the_value() == '4') echo $selected; ?>>4</option>
    </select>
    
    <label>Thumbnail delay</label><br/>
	<?php $mb->the_field('delay'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>In ms. E.g. 400</span>
    
    <label>Page image text colour</label><br/>
	<?php $metabox->the_field('slider_bg'); ?>
    <select name="<?php $metabox->the_name(); ?>">
        <option value="white-content"<?php if ($metabox->get_the_value() == 'white-content') echo $selected; ?>>white</option>
        <option value="light-content"<?php if ($metabox->get_the_value() == 'light-content') echo $selected; ?>>light</option>
        <option value="black-content"<?php if ($metabox->get_the_value() == 'black-content') echo $selected; ?>>black</option>
    </select>
    
    
   <label>Insert Social Person shortcode</label><br/>
	<?php $mb->the_field('social_links'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
 
</div>