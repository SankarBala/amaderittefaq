<?php get_header();?>

<main class="col-md-8">
   <?php
      while (have_posts()): the_post();       
	      
            the_content();
      endwhile;
   ?>
</main>

<?php get_footer();?>