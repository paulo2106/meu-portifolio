<?php
 	if (have_posts()) : while ( have_posts()) : the_post(); 
 ?>
 
		
 <?php the_content();?>
 <h1></h1>
 <?php  endwhile; else: ?>

 <?php
 	endif;
 ?>
  <?php get_footer();?>

