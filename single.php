<?php get_header(); ?>


<main class="col-sm-8">

    <div class="left_content text-justify">


        <?php
 
          while (have_posts()): the_post(); 
          setPostViews(get_the_ID());?>
		
            <h2 style="margin: auto; padding:10px 0px; line-hight:30px;"><?php the_title(); ?></h2>
            <hr style="line-height: 1px; margin: 0px; margin-bottom:1px; padding: 0px;">
            <small class=""></small>
            <hr style="line-height: 1px; margin: 0px; margin-bottom: 20px; padding: 0px;">
		 <?php if ( has_post_thumbnail() ) { ?>
            <div class="col-sm-6" style="padding: 0px; padding-right:8px; padding-bottom: 4px;margin: 0px;">
                <img class="img-responsive img-thumbnail pull-right" alt="" src="<?php the_post_thumbnail_url(); ?>"/>
            </div>
           
            <?php }
            the_content();




        endwhile;
        ?>



        <span> <i> <strong class="pull-right text-info">EDITOR: <?php the_author(); ?>&nbsp; &nbsp;</strong></i></span>

    </div>
    <br>




    <?php
    $otherPost = new WP_Query(
            array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'post__not_in' => array(get_the_ID()),
        'category' => array(get_the_category())
    ));



    if ($otherPost->have_posts()) :
        ?>


        <div class="">
            <div class="single_post_content">
                <h2><span>  আরও খবর  </span></h2>
	<br />

                <ul>
                    <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 

	<a class="short-list" href="<?php the_permalink(); ?>">
                               <li>
  <div class="">
	  <?php if ( has_post_thumbnail() ) { ?>	
<span class="media-left"> 
	
 <img style="margin: 5px 5px 0 0;" class="pull-left img-bordered" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                          <?php } ?>                
  <small class="text-justify"><b> </b></small>
	
		
	
	<p class="text-justify test-mutted"> <b> <?php the_title();?> </b> <br>
		<small><?php echo wp_trim_words(get_the_content(), $num_words = 30, $more = " ..."); ?></small></p>
</span>
      </div>
               <br>   
                 </li></a>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?> 
                </ul>


            </div>
        </div>

        <?php
    endif;
    ?>






































</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
