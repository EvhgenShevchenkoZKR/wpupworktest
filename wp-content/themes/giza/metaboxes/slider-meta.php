<div class="my_meta_control">

	<label>Show slider</label><br/>
	<?php $mb->the_field('cb_single'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?>/>
    
    <label>Gallery category</label><br/>
	<?php $mb->the_field('title'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>Enter a gallery category name.</span>
    
    <label>Title category</label><br/>
	<?php $mb->the_field('description'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>Enter a title category name.</span>
    
    <label>Button text</label><br/>
	<?php $mb->the_field('button'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>Enter the anchor button text. E.g. "Learn more"</span>
    
    <label>Show video modal</label><br/>
	<?php $mb->the_field('video_modal'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="show"<?php $mb->the_checkbox_state('show'); ?>/>
    
    <label>Vimeo/YouTube embed code</label><br/>
	<?php $mb->the_field('video_code'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span><strong>Note:</strong> To make a YouTube video autoplay, add "?autoplay=1" right after the video ID.</span>
    
    <label>Video button text</label><br/>
	<?php $mb->the_field('button_video'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<span>Enter the video button text. E.g. "Watch video"</span>
    
    
   
</div>