<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">

   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('tagline'); ?>">Tagline:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('tagline'); ?>" name="<?php echo $this->get_field_name('tagline'); ?>" type="text" value="<?php echo $tagline; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('description'); ?>">Description:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo $description; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('cta'); ?>">Call to Action Link:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('cta'); ?>" name="<?php echo $this->get_field_name('cta'); ?>" type="text" value="<?php echo $cta; ?>">
   </p>


</div>
