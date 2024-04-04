<?php

get_header();
?>
<div class="single-page">

<?php
while(have_posts()){ 
        the_post()?>
     
        
        <h1><?php the_title();?></h1>
        
  <!-- for writting html code in php--->
    <p><?php the_content();?></p>
    <p><?php the_author();?></p>
    <p><?php echo get_the_date();?></p>
    

   
 <hr>
 <?php }
 ?>
 </div>



<?php 
  get_footer();
  ?>