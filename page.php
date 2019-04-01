<?php 

get_header();

// while we have posts loop through all
while(have_posts()) {
  the_post();?>
  
  <div class="container marketing">
    
    <h1 class="page-title"><?php the_title(); ?></h1>

      
      <?php the_content();?>
     

  </div> <!-- -->

  <hr class="featurette-divider">
  
<?php }

get_footer();

?>