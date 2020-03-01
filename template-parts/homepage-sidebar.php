<aside class="col-sm-4">
    <div class="">
       
        <?php
        if (is_active_sidebar('sidebar-1')) {
            dynamic_sidebar('sidebar-1');
        }
        ?>

    </div>

    <div class="right_content">

     
    <div class="crime_games">

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'খেলাধুলা',
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
            'category_name' => 'খেলাধুলা',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>6,
            'offset' => 1,
            'category_name' => 'খেলাধুলা',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="">
                    <div class="single_post_content">
                        <h2><span>খেলাধুলা</span></h2>
                        <?php wp_reset_postdata(); ?>
                        <ul>
                        <?php while ($firstPost->have_posts()) : $firstPost->the_post(); ?> 
                            <li>
                                <figure class="bsbig_fig"> <a href="" class="featured_img">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"/></a>
						
  <figcaption> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </figcaption>
                                    <p class='text-justify'> <?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = " "); ?><a class="btn btn-info btn-xs" href='<?php the_permalink(); ?>'>Read More</a></p>
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
  <img style="margin: 5px 5px 0 0;" class="pull-left" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 15, $more = " ..."); ?></small></p>
</span>
      </div>
                  
                 </li></a>
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
								<li>
							
		


							</li>	
							
							
							
                            </ul>
                   
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
            'category_name' =>  'শিক্ষা',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>8,
            'category_name' => 'শিক্ষা',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="">
                    <div class="single_post_content">
                        <h2><span> শিক্ষা </span></h2>
                        <?php wp_reset_postdata(); ?>
                       
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 15, $more = " ..."); ?></small></p>
</span>
      </div>
                  
                 </li></a>
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
								<li>
							
	

							</li>	
							
							
							
                            </ul>
                   
                </div>
           
            <?php
        endif;
        ?>
        
		</div>	
		
    </div>

    <div class="">

        <?php
        if (is_active_sidebar('sidebar-2')) {
            dynamic_sidebar('sidebar-2');
        }
        ?>

    </div>
    <div class="">



    </div>
    <div class="">

        <?php
        if (is_active_sidebar('sidebar-3')) {
            dynamic_sidebar('sidebar-3');
        }
        ?>

    </div>
		
			
    <div class="crime_games">

        <?php
        $isPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' =>  'অন্যান্য',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));

        $otherPost = new WP_Query(
                array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' =>8,
            'category_name' => 'অন্যান্য',
            'meta_key' => 'show_homepage',
            'meta_value' => 1
        ));


        if ($isPost->have_posts()) :
            ?>

        
                <div class="">
                    <div class="single_post_content">
                        <h2><span> অন্যান্য </span></h2>
                        <?php wp_reset_postdata(); ?>
                       
                        <ul>
                        <?php while ($otherPost->have_posts()) : $otherPost->the_post(); ?> 
 <a class="short-list" href="<?php the_permalink(); ?>">
                                     <li>
                                           	<div class="">
<span class="media-left"> 
  <img style="margin: 5px 5px 0 0;" class="pull-left img-thumbnail" alt="" src="<?php the_post_thumbnail_url(); ?>"> 
                                        
  <small class="text-justify"><b> </b></small>
	<p class="text-justify"><small><?php echo wp_trim_words(get_the_content(), $num_words = 15, $more = " ..."); ?></small></p>
</span>
      </div>
                  
                 </li></a>
                        
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?> 
								<li>
							
		

							</li>	
							
							
							
                            </ul>
                   
                </div>
           
            <?php
        endif;
        ?>
        
		</div>	
		
    </div>

		
</aside>
