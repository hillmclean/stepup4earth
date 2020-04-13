<!-- This file is used to markup the public-facing widget. -->
<div class="social-widget-footer">

<ul class="social-icons">
  <li>
    <a href="<?php echo $facebook; ?>">
      <?php if (strlen($facebook) > 0) : ?> 
        <i class="fab fa-facebook-square"></i>
      <?php endif; ?> 
    </a>
  </li>

  <li>      
    <a href="<?php echo $instagram; ?>">
      <?php if (strlen($instagram) > 0) : ?> 
        <i class="fab fa-instagram"></i>
      <?php endif; ?> 
    </a>
  </li>

  <li>
    <a href="<?php echo $twitter; ?>">
      <?php if (strlen($twitter) > 0) : ?> 
        <i class="fab fa-twitter"></i>
      <?php endif; ?> 
    </a>
  </li>

</ul>

</div> 



