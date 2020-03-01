<?php get_header(); ?>

<main class="col-sm-8">


    <div class="left_content">

        <!-- Hot post section -->

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'রাজনৈতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $firstPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            'category_name' => 'রাজনৈতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,
            'offset' => 1,
            'category_name' => 'রাজনৈতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
	
            ?>


            <div class="single_post_content">

                <h2><span> রাজনৈতিক </span></h2>
                <?php wp_reset_postdata(); ?>

                <div class="single_post_content_left">
                    <ul class="business_catgnav  wow fadeInDown">
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>

                                         

                                    <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
          <p class="text-justify"> <?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
                                </figure>
                            </li>

                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 

                    </ul>
                </div>

                <div class="single_post_content_right">
                    <div class="latest_post_container">
                        <ul class="">
                            <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
		
					
                   <li class="short-list">
					   <a href="<?php the_permalink(); ?>">
			 <div class="media wow fadeInDown">
		<div class="">
<span class="media-left">
	
		<img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
		<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " ..."); ?></small></p>
</span>
      </div>

						   </div></a>
					</li>

                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?> 

                        </ul>
                    </div>

                </div>


            </div>

            <?php
        endif;
        ?>



        <!-- Hot post section end -->


    <div class="crime_games">

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'ক্রাইম',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $firstPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            'category_name' => 'ক্রাইম',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>3,
            'offset' => 1,
            'category_name' => 'ক্রাইম',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="crimes">
                    <div class="single_post_content">
                        <h2><span>ক্রাইম</span></h2>
                        <?php wp_reset_postdata(); ?>
                        <ul>
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                        
                                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>
                         
  <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
                                    <p class='text-justify'> <?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
                                </figure>
                            </li>
                        
                        
                        
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
                            </ul>
						
									


							
							
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 22, $more = " ..."); ?></small></p>
</span>
      </div>
                  
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
        
       
        
        
        
        

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'বিনোদন',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $firstPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            'category_name' => 'বিনোদন',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>3,
            'offset' => 1,
            'category_name' => 'বিনোদন',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="crimes pull-right">
                    <div class="single_post_content">
                        <h2><span>বিনোদন</span></h2>
                        <?php wp_reset_postdata(); ?>
								
							


							
                        <ul>
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                        
                                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>
                       
 <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
                                    <p class='text-justify'> <?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
                                </figure>
                            </li>
                        
                        
                        
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
                            </ul>
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
					 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 22, $more = " ..."); ?></small></p>
</span>
      </div>
                  
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
	        
 </div>



















































    <div class="crime_games">

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'আন্তর্জাতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $firstPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            'category_name' => 'আন্তর্জাতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>3,
            'offset' => 1,
            'category_name' => 'আন্তর্জাতিক',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="crimes">
                    <div class="single_post_content">
                        <h2><span>  আন্তর্জাতিক   </span></h2>
                        <?php wp_reset_postdata(); ?>
                        <ul>
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                        
                                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>
                         
  <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
                                    <p class='text-justify'> <?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
                                </figure>
                            </li>
                        
                        
                        
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
                            </ul>
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 22, $more = " ..."); ?></small></p>
</span>
      </div>
                  
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
        
       
        
        
        
        

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' =>  'জাতীয়',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $firstPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 1,
            'category_name' =>  'জাতীয়',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>3,
            'offset' => 1,
            'category_name' => 'জাতীয়',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="crimes pull-right">
                    <div class="single_post_content">
                        <h2><span> জাতীয় </span></h2>
                        <?php wp_reset_postdata(); ?>
                        <ul>
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 

                        
                                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>
                       
 <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
                                    <p class='text-justify'> <?php echo wp_trim_words(get_the_content(), $num_words = 25, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
                                </figure>
                            </li>
                        
                        
                        
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
                            </ul>
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                               	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 22, $more = " ..."); ?></small></p>
</span>
      </div>
                                         
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
        
 </div>





















































































    </div>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
