<?php

get_header();
?>
<section class="all-posts">
<h1>All posts</h1>
<?php 
//this section is for if we want to display specific number of posts per page
    // $specified_posts=new WP_Query(array(
    //     'post_type' => 'post',
    //     'posts_per_page'=> 2,
    //     'orderby'=>'ASC',
    //     'orderby'=>'date',
    //  ));
    //  while($specified_posts->have_posts()){
    //     $specified_posts-> the_post()
    //this section is for if we want to show all posts on a page
    while(have_posts()){ 
        the_post()?>
     <div class="posts-div">
        
        <h1><?php the_title();?></h1>
        <div class="post-thumbnail"><p><?php echo get_the_post_thumbnail();?></p></div>
        
  <!-- for writting html code in php--->
    <p><?php the_content();?></p>
    <p><?php the_author();?></p>

    <p><?php echo get_the_date();?></p>
    <a href="<?php  the_permalink();?>">
<p>Read More</p>
</a>
 <hr>
</div>
    
 <?php }
?>
<div class="pagination">
<?php  echo get_the_posts_pagination();?></div>
</div>

<?php 
  get_footer();
  ?>
