<!-- This file is used to markup the public-facing widget. -->

<P>   
   <?php if (strlen(trim($address)) > 0) : ?>
   <?php echo $address; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($city)) > 0) : ?>
   <?php echo $city; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($province)) > 0) : ?>
   <?php echo $province; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($postal)) > 0) : ?>
   <?php echo $postal; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($phone)) > 0) : ?>
   <a href="<?php echo esc_url( 'tell:' ); ?>"><?php printf( esc_html( '' ), '' ); ?></a>
   <?php echo $phone; ?>
   <?php endif; ?>
</p>


<P>   
   <?php if (strlen(trim($email)) > 0) : ?>
   <?php echo $email; ?>
   <?php endif; ?>
</p>
