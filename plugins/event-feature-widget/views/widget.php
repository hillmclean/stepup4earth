<!-- This file is used to markup the public-facing widget. -->


<h4>   
   <?php if (strlen(trim($tagline)) > 0) : ?>
   <?php echo $tagline; ?>
   <?php endif; ?>
</h4>


<p>   
   <?php if (strlen(trim($description)) > 0) : ?>
   <?php echo $description; ?>
   <?php endif; ?>
</p>


<div class="cta-button">
   <a class="cta-text" href="<?php echo $cta; ?>">
      <?php if (strlen($cta) > 0) : ?> 
         <p>Learn More</p>
      <?php endif; ?> 
   </a>
</div>
